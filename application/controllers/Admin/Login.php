<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->has_userdata('username')){
			return redirect(base_url('admin/'));
		}
		$data = array();
		$this->load->model('Admin/Model_Login');
	}

	public function index()
	{	
		$data['title'] = "Đăng nhập tài khoản quản trị!";
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $taikhoan = $this->input->post('taikhoan');
			$matkhau = md5($this->input->post('matkhau'));

			if($taikhoan == "" || $matkhau == ""){
				$data["error"] = "Tài khoản hoặc mật khẩu không được trống!";
				return $this->load->view('Admin/Auth/View_Login', $data);
			}


			if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $taikhoan)) {
			    $data["error"] = "Tài khoản không hợp lệ!";
				return $this->load->view('Admin/Auth/View_Login', $data);
			} 

			if($this->Model_Login->checkAccountAdmin($taikhoan, $matkhau) >= 1){
				$newdata = array(
					'id' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['MaNguoiDung'],
				    'username'  => $taikhoan,
				    'login' => True,
				    'fullname' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['HoTen'],
				    'phone' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['SoDienThoai'],
				    'email' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['Email'],
				    'fullname' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['NgayThamGia'],
				);
				$this->session->set_userdata($newdata);
				return redirect(base_url('admin/'));
			}else{
				$data["error"] = "Tài khoản hoặc mật khẩu không đúng!";
				return $this->load->view('Admin/Auth/View_Login', $data);
			}

        }

		return $this->load->view('Admin/Auth/View_Login',$data);
	}

}

/* End of file DangNhap.php */
/* Location: ./application/controllers/DangNhap.php */