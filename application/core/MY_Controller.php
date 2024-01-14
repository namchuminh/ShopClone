<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $data = array();

    public function __construct() {
        parent::__construct();

        if(!$this->session->has_userdata('login')){
            return redirect(base_url('dang-nhap/'));
        }

        $this->load->model('Website/Model_Login');
        if($this->Model_Login->checkAccountBlock($this->session->userdata('user')) >= 1){
            $userdata = array('id', 'username', 'excess', 'login', 'phone', 'email', 'jointime');
            $this->session->unset_userdata($userdata);
            $this->session->set_flashdata('error', 'Bạn đã bị chặn khỏi hệ thống!');
            return redirect(base_url('dang-nhap/'));
        }

        $this->load->model('Website/Model_Category');
        $this->load->model('Website/Model_Product');
        $this->load->model('Model_Website');
        $this->load->model('Website/Model_Order');
        $this->load->model('Website/Model_Card');
        $this->load->model('Website/Model_Profile');

        $this->data['product'] = $this->Model_Product->getAll();
        $this->data['category'] = $this->Model_Category->getAll();
        $this->data['config'] = $this->Model_Website->getAllConfig();
        $this->data['history'] = $this->Model_Order->getHistory();
        $this->load->vars($this->data);

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

    private function curl_get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        
        curl_close($ch);
        return $data;
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */