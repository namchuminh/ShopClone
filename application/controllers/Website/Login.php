<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->has_userdata('login')){
	        return redirect(base_url());
	    }

	    $this->load->model('Website/Model_Login');
	    $this->load->model('Website/Model_Profile');
	}

	public function index()
	{
		$data['title'] = "Đăng nhập tài khoản hệ thống!";
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $taikhoan = $this->input->post('taikhoan');
			$matkhau = md5($this->input->post('matkhau'));

			if($taikhoan == "" || $matkhau == ""){
				$data["error"] = "Tài khoản hoặc mật khẩu không được trống!";
				return $this->load->view('Website/Auth/View_Login.php', $data);
			}


			if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $taikhoan)) {
			    $data["error"] = "Tài khoản không hợp lệ!";
				return $this->load->view('Website/Auth/View_Login.php', $data);
			} 

			if($this->Model_Login->checkAccount($taikhoan, $matkhau) >= 1){
				if($this->Model_Login->checkAccountBlock($taikhoan) >= 1){
					$data["error"] = "Tài khoản hiện đang bị chặn khỏi hệ thống!";
					return $this->load->view('Website/Auth/View_Login.php', $data);
				}else{
					$excess = 0;
					$total = 0;
					$used = 0;

					if(count($this->Model_Profile->getExcess($this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'])) >= 1){
						$excess = $this->Model_Profile->getExcess($this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'])[0]['SoDuKhaDung'];
						$total = $this->Model_Profile->getExcess($this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'])[0]['TongNap'];
						$used = $this->Model_Profile->getExcess($this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'])[0]['DaSuDung'];
					}

					$newdata = array(
						'id' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'],
					    'user'  => $taikhoan,
					    'login' => True,
					    'fullname' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['HoTen'],
					    'phone' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['SoDienThoai'],
					    'email' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['Email'],
					    'excess' => $excess,
					    'total' => $total,
					    'used' => $used,
					    'jointime' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['NgayThamGia'],
					);
					$this->session->set_userdata($newdata);
					$this->session->set_flashdata('success', 'Đăng nhập thành công!');
					return redirect(base_url());
				}
			}else{
				$data["error"] = "Tài khoản hoặc mật khẩu không đúng!";
				return $this->load->view('Website/Auth/View_Login.php', $data);
			}

        }
		return $this->load->view('Website/Auth/View_Login.php', $data, FALSE);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */