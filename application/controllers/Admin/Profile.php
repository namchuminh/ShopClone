<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$this->load->model('Admin/Model_Login');
		$this->load->model('Admin/Model_User');
	}

	public function index()
	{
		$data['title'] = "Thay đổi thông tin admin";
		$data['detail'] = $this->Model_Login->getInfoByUsername($this->session->userdata('username'));

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$hoten = $this->input->post('hoten');
			$taikhoan = $this->input->post('taikhoan');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$manguoidung = $this->Model_Login->getInfoByUsername($this->session->userdata('username'))[0]['MaNguoiDung'];
			$matkhau = $this->Model_Login->getInfoByUsername($this->session->userdata('username'))[0]['MatKhau'];
			$matkhau2 = $this->input->post('matkhau2');

			if(empty($hoten) || empty($taikhoan) || empty($sodienthoai) || empty($email)){
				$data['error'] = "Vui lòng nhập đủ thông tin cá nhân!";
				return $this->load->view('Admin/Auth/View_Profile', $data);
			}


			if (!(strlen(preg_replace('/[^0-9]/', '', $sodienthoai)) === 10)) {
				$data['error'] = "Vui lòng nhập số điện thoại hợp lệ!";
				return $this->load->view('Admin/Auth/View_Profile', $data);
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    $data['error'] = "Vui lòng nhập Email hợp lệ!";
				return $this->load->view('Admin/Auth/View_Profile', $data);
			}

			if (!(strpos($taikhoan, ' ') === false)) {
				$data['error'] = "Vui lòng nhập tên đăng nhập hợp lệ và không có dấu cách!";
				return $this->load->view('Admin/Auth/View_Profile', $data);
			}

			if(!empty($this->input->post('matkhau'))){
				$matkhau = md5($this->input->post('matkhau'));

				if($matkhau !== md5($matkhau2)){
					$data['error'] = "Mật khẩu không trùng khớp!";
					return $this->load->view('Admin/Auth/View_Profile', $data);
				}
			}


			$this->Model_User->updateAdmin($hoten,$taikhoan,$sodienthoai,$email,$matkhau,$manguoidung);

			$newdata = array(
				'id' => $manguoidung,
			    'username'  => $taikhoan,
			    'login' => True,
			    'fullname' => $hoten,
			    'phone' => $sodienthoai,
			    'email' => $email,
			);
			$this->session->set_userdata($newdata);

			$data['success'] = "Cập nhật thông tin quản trị thành công!";
			$data['detail'] = $this->Model_Login->getInfoByUsername($this->session->userdata('username'));

			return $this->load->view('Admin/Auth/View_Profile', $data);
		}


		return $this->load->view('Admin/Auth/View_Profile', $data);
	}

}

/* End of file ChangePassword.php */
/* Location: ./application/controllers/ChangePassword.php */