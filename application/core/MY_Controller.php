<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('Model_Website');
        $this->load->model('Website/Model_Order');
        $this->load->model('Website/Model_Card');
        $this->load->model('Website/Model_Profile');
        $this->load->model('Website/Model_Category');
        $this->load->model('Website/Model_Product');
        $current_url = $this->uri->uri_string();
        if(($current_url != "") && ($current_url != "top-nap-tien") && ($current_url != "chinh-sach") && ($current_url != "lien-he")){
            if(!$this->session->has_userdata('login')){
                $this->session->set_flashdata('error', "Vui lòng đăng nhập để thực hiện!");
                return redirect(base_url('dang-nhap/'));
            }else{
                $this->load->model('Website/Model_Login');
                if($this->Model_Login->checkAccountBlock($this->session->userdata('user')) >= 1){
                    $userdata = array('id', 'user', 'excess', 'login', 'phone', 'email', 'jointime');
                    $this->session->unset_userdata($userdata);
                    $this->session->set_flashdata('error', 'Bạn đã bị chặn khỏi hệ thống!');
                    return redirect(base_url('dang-nhap/'));
                }
                $this->getWalletUser($this->session->userdata('user'));
                $this->checkPay();
            }
        }

        $this->data['product'] = $this->Model_Product->getAll();
        $this->data['category'] = $this->Model_Category->getAll();
        $this->data['history'] = $this->Model_Order->getHistory();
        $this->data['config'] = $this->Model_Website->getAllConfig();
        $this->load->vars($this->data);
    }

    private function curl_get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        
        curl_close($ch);
        return $data;
    }

    private function getWalletUser($taikhoan){
        $excess = 0;
        $total = 0;
        $used = 0;

        if(count($this->Model_Profile->getExcess($this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'])) >= 1){
            $excess = $this->Model_Profile->getExcess($this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'])[0]['SoDuKhaDung'];
            $total = $this->Model_Profile->getExcess($this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'])[0]['TongNap'];
            $used = $this->Model_Profile->getExcess($this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'])[0]['DaSuDung'];
        }

        $newdata = array(
            'excess' => $excess,
            'total' => $total,
            'used' => $used,
        );
        $this->session->set_userdata($newdata);
    }

    private function checkPay(){
        $manguoidung = $this->session->userdata('id');
        if(count($this->Model_Card->check($manguoidung)) >= 1){
            foreach ($this->Model_Card->check($manguoidung) as $keylop => $value) {
                $mathe = $value['MaThe'];
                $seri = $value['SeriThe'];
                $amount = $value['MenhGia'];
                $type = $value['LoaiThe'];
                $code = $value['Request_Id'];
                $id = $this->Model_Card->getConfig()[0]['Id'];
                $key = $this->Model_Card->getConfig()[0]['IdKey'];

                $url = 'https://thecaosieure.vn/chargingws/v2?sign='.md5($key.$mathe.$seri).'&telco='.$type.'&code='.$mathe.'&serial='.$seri.'&amount='.$amount.'&request_id='.$code.'&partner_id='.$id.'&command=check';
                $xuly = json_decode($this->curl_get($url), true);

                $this->Model_Card->update($mathe,$seri,$type,1);
                if($xuly['status'] == 1){
                    if(count($this->Model_Profile->checkDiscount($amount)) >= 1){
                        $khuyenmai = $amount * ($this->Model_Profile->checkDiscount($amount)[0]['PhanTramKhuyenMai'] / 100);
                        $amount = $amount + round($khuyenmai);
                    }
                    $sodukhadung = $this->session->userdata('excess') + $amount;
                    $tongnap = $this->session->userdata('total') + $amount;
                    if(count($this->Model_Profile->getExcess($manguoidung)) >= 1){
                        $this->Model_Profile->updateWalletPay($manguoidung,$tongnap,$sodukhadung);
                    }else{
                        $this->Model_Profile->insertWalletPay($manguoidung,$tongnap,$sodukhadung);
                    }

                    $this->Model_Profile->insertCashFlow($manguoidung,$this->session->userdata('excess'),$amount,$sodukhadung,"Khách hàng nạp ".number_format($amount). "đ vào tài khoản!");

                    $newdata = array(
                        'total' => $tongnap,
                        'excess' => $sodukhadung,
                    );
                    $this->session->set_userdata($newdata);
                    $this->session->set_flashdata('success', 'Hệ thống đã cộng tiền vào tài khoản của bạn!');
                }else if($xuly['status'] == 99 || $xuly['status'] == 4){
                    $this->Model_Card->update($mathe,$seri,$type,0);
                }
            }
        }
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */