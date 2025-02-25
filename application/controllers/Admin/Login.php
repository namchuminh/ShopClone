<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->has_userdata('admin')){
			return redirect(base_url('admin/'));
		}
		$data = array();
		$this->load->model('Admin/Model_Login');
		$this->load->model('Admin/Model_Setting');
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
				    'jointime' => $this->Model_Login->getInfoByUsername($taikhoan)[0]['NgayThamGia'],
					'admin' => True
				);
				$this->session->set_userdata($newdata);
				$this->session->set_flashdata('success', 'Đăng nhập thành công!');
				return redirect(base_url('admin/'));
			}else{
				$data["error"] = "Tài khoản hoặc mật khẩu không đúng!";
				return $this->load->view('Admin/Auth/View_Login', $data);
			}

        }

		return $this->load->view('Admin/Auth/View_Login',$data);
	}

	public function forgotPassword(){
		$data['title'] = "Quên mật khẩu admin!";

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$email = $this->input->post('email');
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    $data['error'] = "Vui lòng nhập Email hợp lệ!";
				return $this->load->view('Admin/Auth/View_ForgotPassword', $data);
			}

			if(count($this->Model_Login->checkEmailForgetPassword($email)) < 1){
				$data['error'] = "Không tồn tại Email cho quản trị viên này!";
				return $this->load->view('Admin/Auth/View_ForgotPassword', $data);
			}

			if(count($this->Model_Setting->getAll()) < 1){
				$data['error'] = "Chức năng hiện chưa sử dụng được do chưa cài đặt tài khoản gửi mail trong hệ thống!";
				return $this->load->view('Admin/Auth/View_ForgotPassword', $data);
			}

			$hoten = $this->Model_Login->checkEmailForgetPassword($email)[0]['HoTen'];
			$taikhoan = $this->Model_Login->checkEmailForgetPassword($email)[0]['TaiKhoan'];
			$matkhau = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);
			$this->load->library('email');
            $this->load->library('parser');
            $this->email->clear();

            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = $this->Model_Setting->getAll()[0]['TaiKhoanGmail'];
            $config['smtp_pass'] = $this->Model_Setting->getAll()[0]['MatKhauGmail'];
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $config['validation'] = TRUE;   
            $this->email->initialize($config);
            $this->email->from($this->Model_Setting->getAll()[0]['TaiKhoanGmail'], 'Shop Clone 247');
            $this->email->to($email);
            $this->email->subject('Hệ thống Shop Clone 247 - Đặt lại mật khẩu admin!');
            $this->email->message('Chào quản trị viên '.$hoten.'! <br>Hệ thống Shop Clone 247 đã tiếp nhận được yêu cầu đặt lại mật khẩu cho quản trị viên với email ' .$email. '<br>Chúng tôi đã đặt lại mật khẩu đăng nhập mới cho quản trị viên có thể tiếp tục đăng nhập là: <br>Tài khoản: <b>'.$taikhoan. '</b><br>Mật khẩu: <b>'.$matkhau.'</b><br><br>Vui lòng đăng nhập với thông tin trên tại địa chỉ: <a href="'.base_url('admin/dang-nhap/').'">'.base_url('admin/dang-nhap/').'</a>');
            $this->email->send();

            $this->Model_Login->updatePassword(md5($matkhau),$email,$taikhoan);

            $this->session->set_flashdata('success', "Mật khẩu mới đã được gửi tới: ".$email."! Vui lòng kiểm tra!");
			return redirect(base_url('admin/dang-nhap/'));
		}

		return $this->load->view('Admin/Auth/View_ForgotPassword',$data);
	}
}

/* End of file DangNhap.php */
/* Location: ./application/controllers/DangNhap.php */