<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$userdata = array('id', 'user', 'excess', 'fullname', 'login', 'phone', 'email', 'jointime');
		$this->session->unset_userdata($userdata);
		$this->session->set_flashdata('success', 'Đăng xuất thành công!');
		return redirect(base_url());
	}

}

/* End of file DangNhap.php */
/* Location: ./application/controllers/DangNhap.php */