<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_Profile');
	}

	public function index()
	{
		$data['title'] = "Thông cá nhân thành viên";
		$data['detail'] = $this->Model_Profile->getInfoByUsername($this->session->userdata('user'));

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$hoten = $this->input->post('hoten');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$manguoidung = $this->Model_Profile->getInfoByUsername($this->session->userdata('user'))[0]['MaNguoiDung'];
			$matkhau = $this->Model_Profile->getInfoByUsername($this->session->userdata('user'))[0]['MatKhau'];
			$matkhau2 = $this->input->post('matkhau2');

			if(empty($hoten) || empty($sodienthoai) || empty($email)){
				$data['error'] = "Vui lòng nhập đủ thông tin cá nhân!";
				return $this->load->view('Website/Profile/View_Profile', $data);
			}


			if (!(strlen(preg_replace('/[^0-9]/', '', $sodienthoai)) === 10)) {
				$data['error'] = "Vui lòng nhập số điện thoại hợp lệ!";
				return $this->load->view('Website/Profile/View_Profile', $data);
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    $data['error'] = "Vui lòng nhập Email hợp lệ!";
				return $this->load->view('Website/Profile/View_Profile', $data);
			}

			if(!empty($this->input->post('matkhau'))){
				$matkhau = md5($this->input->post('matkhau'));

				if($matkhau !== md5($matkhau2)){
					$data['error'] = "Mật khẩu không trùng khớp!";
					return $this->load->view('Website/Profile/View_Profile', $data);
				}
			}


			$this->Model_Profile->update($hoten,$sodienthoai,$email,$matkhau,$manguoidung);

			$newdata = array(
			    'fullname' => $hoten,
			    'phone' => $sodienthoai,
			    'email' => $email,
			);
			$this->session->set_userdata($newdata);

			$data['success'] = "Cập nhật thông tin thành viên thành công!";
			$data['detail'] = $this->Model_Profile->getInfoByUsername($this->session->userdata('user'));

			return $this->load->view('Website/Profile/View_Profile', $data);
		}


		return $this->load->view('Website/Profile/View_Profile', $data);
	}

	public function topPay(){
		$data['title'] = "Top thành viên nạp tiền";
		$data['userPay'] = $this->Model_Profile->getTopPay();
		return $this->load->view('Website/Profile/View_TopPay', $data);
	}

}

/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */