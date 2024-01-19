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
	    $this->load->model('Website/Model_Category');
        $this->load->model('Website/Model_Product');
        $this->load->model('Website/Model_Order');
        $this->load->model('Model_Website');
	}

	public function index()
	{
		$data['title'] = "Đăng nhập tài khoản hệ thống!";
		$data['product'] = $this->Model_Product->getAll();
        $data['category'] = $this->Model_Category->getAll();
        $data['history'] = $this->Model_Order->getHistory();
        $data['config'] = $this->Model_Website->getAllConfig();
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
		return $this->load->view('Website/Auth/View_Login', $data);
	}

	public function register(){
		$data['title'] = "Đăng ký tài khoản";
		$data['product'] = $this->Model_Product->getAll();
        $data['category'] = $this->Model_Category->getAll();
        $data['history'] = $this->Model_Order->getHistory();
        $data['config'] = $this->Model_Website->getAllConfig();
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
        	$hoten = $this->input->post('hoten');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$taikhoan = $this->input->post('taikhoan');
			$matkhau = $this->input->post('matkhau');

			if(empty($hoten) || empty($sodienthoai) || empty($email) || empty($taikhoan) || empty($matkhau)){
				$data['error'] = "Vui lòng nhập đủ thông tin!";
				return $this->load->view('Website/Auth/View_Register', $data);
			}

			if (!(strlen(preg_replace('/[^0-9]/', '', $sodienthoai)) === 10)) {
				$data['error'] = "Vui lòng nhập số điện thoại hợp lệ!";
				return $this->load->view('Website/Auth/View_Register', $data);
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    $data['error'] = "Vui lòng nhập Email hợp lệ!";
				return $this->load->view('Website/Auth/View_Register', $data);
			}

			if (!(strpos($taikhoan, ' ') === false)) {
				$data['error'] = "Vui lòng nhập tài khoản hợp lệ và không có dấu cách!";
				return $this->load->view('Website/Auth/View_Register', $data);
			}

			if(count($this->Model_Login->getInfoByPhone($sodienthoai)) >= 1){
				$data['error'] = "Số điện thoại đã được đăng ký!";
				return $this->load->view('Website/Auth/View_Register', $data);
			}

			if(count($this->Model_Login->getInfoByEmail($email)) >= 1){
				$data['error'] = "Email đã được đăng ký!";
				return $this->load->view('Website/Auth/View_Register', $data);
			}

			if(count($this->Model_Login->getInfoByUsername($taikhoan)) >= 1){
				$data['error'] = "Tài khoản đã được đăng ký!";
				return $this->load->view('Website/Auth/View_Register', $data);
			}

			$this->Model_Login->register($hoten,$sodienthoai,$email,$taikhoan,md5($matkhau));

			$data['success'] = "Đăng ký tài khoản thành công!";
			return $this->load->view('Website/Auth/View_Register', $data);
        }
		return $this->load->view('Website/Auth/View_Register', $data);
	}

	public function forgetPassword(){
		$data['title'] = "Quên mật khẩu?";
		$data['product'] = $this->Model_Product->getAll();
        $data['category'] = $this->Model_Category->getAll();
        $data['history'] = $this->Model_Order->getHistory();
        $data['config'] = $this->Model_Website->getAllConfig();
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$email = $this->input->post('email');
			if(empty($email)){
				$data['error'] = "Vui lòng nhập email tài khoản!";
				return $this->load->view('Website/Auth/View_ForgetPassword', $data);
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    $data['error'] = "Vui lòng nhập email hợp lệ!";
				return $this->load->view('Website/Auth/View_ForgetPassword', $data);
			}

			if(count($this->Model_Website->getAllConfig()) < 1){
				$data['error'] = "Chức năng hiện chưa sử dụng được do chưa cài đặt tài khoản gửi mail trong hệ thống!";
				return $this->load->view('Website/Auth/View_ForgetPassword', $data);
			}

			if(count($this->Model_Login->getInfoByEmail($email)) <= 0){
				$data['error'] = "Không tìm thấy email này!";
				return $this->load->view('Website/Auth/View_ForgetPassword', $data);
			}

			$hoten = $this->Model_Login->getInfoByEmail($email)[0]['HoTen'];
			$taikhoan = $this->Model_Login->getInfoByEmail($email)[0]['TaiKhoan'];
			$matkhau = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 10);
			$this->load->library('email');
            $this->load->library('parser');
            $this->email->clear();

            $config['protocol'] = 'smtp';
            $config['smtp_host'] = 'ssl://smtp.googlemail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = $this->Model_Website->getAllConfig()[0]['TaiKhoanGmail'];
            $config['smtp_pass'] = $this->Model_Website->getAllConfig()[0]['MatKhauGmail'];
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $config['validation'] = TRUE;   
            $this->email->initialize($config);
            $this->email->from($this->Model_Website->getAllConfig()[0]['TaiKhoanGmail'], $this->Model_Website->getAllConfig()[0]['TenWebsite']);
            $this->email->to($email);
            $this->email->subject($this->Model_Website->getAllConfig()[0]['TenWebsite'].' - Đặt lại mật khẩu khách hàng!');
            $this->email->message('Chào khách hàng '.$hoten.'! <br>Hệ thống '.$this->Model_Website->getAllConfig()[0]['TenWebsite'].' đã tiếp nhận được yêu cầu đặt lại mật khẩu cho khách hàng với email ' .$email. '<br>Chúng tôi đã đặt lại mật khẩu đăng nhập mới cho bạn và bạn có thể tiếp tục đăng nhập là: <br>Tài khoản: <b>'.$taikhoan. '</b><br>Mật khẩu: <b>'.$matkhau.'</b><br><br>Vui lòng đăng nhập với thông tin trên tại địa chỉ: <a href="'.base_url('dang-nhap/').'">'.base_url('dang-nhap/').'</a>');
            $this->email->send();

            $this->Model_Login->updatePassword(md5($matkhau),$email,$taikhoan);

            $this->session->set_flashdata('success', "Mật khẩu mới đã được gửi tới: ".$email."! Vui lòng kiểm tra!");
			return redirect(base_url('dang-nhap/'));

		}
		return $this->load->view('Website/Auth/View_ForgetPassword', $data);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */