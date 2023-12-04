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
			return redirect(base_url('admin/nguoi-dung/'));
		}

		$data['title'] = "Quản lý người dùng";
		$data['list'] = $this->Model_User->search($tennguoidung,$trangthai);

		return $this->load->view('Admin/User/View_User', $data);
	}

	public function update($MaNguoiDung)
	{
		if(count($this->Model_User->getById($MaNguoiDung)) < 1){
			return redirect(base_url('admin/nguoi-dung/'));
		}

		$data['title'] = "Cập nhật người dùng";
		$data['detail'] = $this->Model_User->getById($MaNguoiDung);
		$data['cashflow'] = $this->Model_User->getCashFlowById($MaNguoiDung);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$hoten = $this->input->post('hoten');
			$taikhoan = $this->input->post('taikhoan');
			$sodienthoai = $this->input->post('sodienthoai');
			$email = $this->input->post('email');
			$trangthai = $this->input->post('trangthai');

			if(empty($hoten) || empty($taikhoan) || empty($sodienthoai) || empty($email)){
				$data['error'] = "Vui lòng nhập đủ thông tin người dùng!";
				return $this->load->view('Admin/User/View_UpdateUser', $data);
			}


			if (!(strlen(preg_replace('/[^0-9]/', '', $sodienthoai)) === 10)) {
				$data['error'] = "Vui lòng nhập số điện thoại hợp lệ!";
				return $this->load->view('Admin/User/View_UpdateUser', $data);
			}

			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			    $data['error'] = "Vui lòng nhập Email hợp lệ!";
				return $this->load->view('Admin/User/View_UpdateUser', $data);
			}

			if (!(strpos($taikhoan, ' ') === false)) {
				$data['error'] = "Vui lòng nhập tên đăng nhập hợp lệ và không có dấu cách!";
				return $this->load->view('Admin/User/View_UpdateUser', $data);
			}

			if($trangthai != 0 && $trangthai != 1){
				$data['error'] = "Trạng thái người dùng không hợp lệ!";
				return $this->load->view('Admin/User/View_UpdateUser', $data);
			}

			$this->Model_User->updateById($hoten,$taikhoan,$sodienthoai,$email,$trangthai,$MaNguoiDung);
			$data['detail'] = $this->Model_User->getById($MaNguoiDung);
			$data['success'] = "Cập nhật thông tin người dùng thành công!";
			return $this->load->view('Admin/User/View_UpdateUser', $data);
		}
		return $this->load->view('Admin/User/View_UpdateUser', $data);
	}


	public function addMoney($MaNguoiDung){
		if ($this->input->server('REQUEST_METHOD') !== 'POST') {
			return redirect(base_url('admin/nguoi-dung/'));
		}

		if(count($this->Model_User->getById($MaNguoiDung)) < 1){
			return redirect(base_url('admin/nguoi-dung/'));
		}


		$sotiencong = $this->input->post('sotiencong');

		if(empty($sotiencong)){
			$this->session->set_flashdata('error', 'Vui lòng nhập số tiền cộng!');
			return redirect(base_url('admin/nguoi-dung/sua/'.$MaNguoiDung.'/'));
		}

		if (!is_numeric($sotiencong)) {
			$this->session->set_flashdata('error', 'Số tiền cộng không hợp lệ!');
			return redirect(base_url('admin/nguoi-dung/sua/'.$MaNguoiDung.'/'));
		}

		$ghichu = empty($this->input->post('ghichu')) ? "Admin cộng ".number_format($sotiencong)."đ vào tài khoản!" : $this->input->post('ghichu');

		$soducu = $this->Model_User->getById($MaNguoiDung)[0]['SoDuKhaDung'];
		$sodumoi = $sotiencong + $soducu;
		
		$this->Model_User->updateMoney($sodumoi,$MaNguoiDung);
		$this->Model_User->insertCashFlow($MaNguoiDung,$soducu,$sotiencong,$sodumoi,$ghichu);
		$this->session->set_flashdata('success', 'Cộng '. number_format($sotiencong) .'đ cho người dùng thành công!');
		return redirect(base_url('admin/nguoi-dung/sua/'.$MaNguoiDung.'/'));
	}

	public function subtractMoney($MaNguoiDung){
		if ($this->input->server('REQUEST_METHOD') !== 'POST') {
			return redirect(base_url('admin/nguoi-dung/'));
		}

		if(count($this->Model_User->getById($MaNguoiDung)) < 1){
			return redirect(base_url('admin/nguoi-dung/'));
		}

		$sotientru = $this->input->post('sotientru');

		if(empty($sotientru)){
			$this->session->set_flashdata('error', 'Vui lòng nhập số tiền trừ!');
			return redirect(base_url('admin/nguoi-dung/sua/'.$MaNguoiDung.'/'));
		}

		if (!is_numeric($sotientru)) {
			$this->session->set_flashdata('error', 'Số tiền trừ không hợp lệ!');
			return redirect(base_url('admin/nguoi-dung/sua/'.$MaNguoiDung.'/'));
		}

		$ghichu = empty($this->input->post('ghichu')) ? "Admin trừ ".number_format($sotientru)."đ khỏi tài khoản!" : $this->input->post('ghichu');

		$soducu = $this->Model_User->getById($MaNguoiDung)[0]['SoDuKhaDung'];
		$sodumoi = ($soducu - $sotientru) <= 0 ? 0 : $soducu - $sotientru;
		
		$this->Model_User->updateMoney($sodumoi,$MaNguoiDung);
		$this->Model_User->insertCashFlow($MaNguoiDung,$soducu,$sotientru,$sodumoi,$ghichu);
		$this->session->set_flashdata('success', 'Trừ '. number_format($sotientru) .'đ cho người dùng thành công!');
		return redirect(base_url('admin/nguoi-dung/sua/'.$MaNguoiDung.'/'));
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */