<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$this->load->model('Admin/Model_User');
	}

	public function index()
	{
		$data['title'] = "Quản lý người dùng";
		$data['list'] = $this->Model_User->getAll();
		return $this->load->view('Admin/User/View_User', $data);
	}


	public function changeStatus($MaNguoiDung){
		if(count($this->Model_User->getById($MaNguoiDung)) < 1){
			return redirect(base_url('admin/nguoi-dung/'));
		}

		$trangthai = 1;
		if($this->Model_User->getById($MaNguoiDung)[0]['TrangThai'] == 1){
			$trangthai = 0;
			$this->session->set_flashdata('success', 'Chặn người dùng thành công!');
		}else{
			$this->session->set_flashdata('success', 'Bỏ chặn người dùng thành công!');
		}

		$this->Model_User->changeStatus($trangthai,$MaNguoiDung);
		return redirect(base_url('admin/nguoi-dung/'));
	}
	

	public function search(){
		if ($this->input->server('REQUEST_METHOD') !== 'POST') {
			return redirect(base_url('admin/nguoi-dung/'));
		}

		$tennguoidung = $this->input->post('tennguoidung');
		$trangthai = $this->input->post('trangthai');

		if(empty($tennguoidung) && ($trangthai != 0 && $trangthai != 1)){
			return redirect(base_url('admin/chuyen-muc/'));
		}

		$data['title'] = "Quản lý người dùng";
		$data['list'] = $this->Model_User->search($tennguoidung,$trangthai);

		return $this->load->view('Admin/User/View_User', $data);
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */