<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discount extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$this->load->model('Admin/Model_Discount');
	}

	public function index()
	{
		$data['title'] = "Quản lý khuyến mãi";
		$data['list'] = $this->Model_Discount->getAll();
		return $this->load->view('Admin/Discount/View_Discount', $data);
	}

	public function add()
	{
		$data['title'] = "Thêm khuyến mãi sản phẩm";
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$naptoithieu = $this->input->post('naptoithieu');
			$phantramkhuyenmai = $this->input->post('phantramkhuyenmai');

			if(empty($naptoithieu) || empty($phantramkhuyenmai)){
				$data['error'] = "Vui lòng nhập đủ thông tin khuyến mãi!";
				return $this->load->view('Admin/Discount/View_AddDiscount', $data);
			}

			if (!is_numeric($naptoithieu)) {
				$data['error'] = "Số tiền nạp tối thiểu không hợp lệ!";
				return $this->load->view('Admin/Discount/View_AddDiscount', $data);
			}

			if (!is_numeric($phantramkhuyenmai)) {
				$data['error'] = "Phần trăm khuyến mãi không hợp lệ!";
				return $this->load->view('Admin/Discount/View_AddDiscount', $data);
			}

			if ($phantramkhuyenmai < 1 || $phantramkhuyenmai > 100) {
				$data['error'] = "Phần trăm khuyến mãi tối thiểu từ 1% đến tối đa 100%!";
				return $this->load->view('Admin/Discount/View_AddDiscount', $data);
			}

			$this->Model_Discount->add($naptoithieu,$phantramkhuyenmai);

			$this->session->set_flashdata('success', 'Thêm khuyến mãi thành công!');
			return redirect(base_url('admin/khuyen-mai/'));
		}
		return $this->load->view('Admin/Discount/View_AddDiscount', $data);
	}

	public function update($MaKhuyenMai)
	{
		if(count($this->Model_Discount->getById($MaKhuyenMai)) < 1){
			return redirect(base_url('admin/chuyen-muc/'));
		}

		$data['title'] = "Cập nhật khuyến mãi sản phẩm";
		$data['detail'] = $this->Model_Discount->getById($MaKhuyenMai);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$naptoithieu = $this->input->post('naptoithieu');
			$phantramkhuyenmai = $this->input->post('phantramkhuyenmai');

			if(empty($naptoithieu) || empty($phantramkhuyenmai)){
				$data['error'] = "Vui lòng nhập đủ thông tin khuyến mãi!";
				return $this->load->view('Admin/Discount/View_UpdateDiscount', $data);
			}

			if (!is_numeric($naptoithieu)) {
				$data['error'] = "Số tiền nạp tối thiểu không hợp lệ!";
				return $this->load->view('Admin/Discount/View_UpdateDiscount', $data);
			}

			if (!is_numeric($phantramkhuyenmai)) {
				$data['error'] = "Phần trăm khuyến mãi không hợp lệ!";
				return $this->load->view('Admin/Discount/View_UpdateDiscount', $data);
			}

			if ($phantramkhuyenmai < 1 || $phantramkhuyenmai > 100) {
				$data['error'] = "Phần trăm khuyến mãi tối thiểu từ 1% đến tối đa 100%!";
				return $this->load->view('Admin/Discount/View_UpdateDiscount', $data);
			}

			$this->Model_Discount->updateById($naptoithieu,$phantramkhuyenmai,$MaKhuyenMai);

			$data['detail'] = $this->Model_Discount->getById($MaKhuyenMai);
			$data['success'] = "Cập nhật thông tin khuyến mãi thành công!";
			return $this->load->view('Admin/Discount/View_UpdateDiscount', $data);
		}
		return $this->load->view('Admin/Discount/View_UpdateDiscount', $data);
	}

	public function delete($MaKhuyenMai){
		$this->Model_Discount->delete($MaKhuyenMai);
		$this->session->set_flashdata('success', 'Xóa khuyến mãi thành công!');
		return redirect(base_url('admin/khuyen-mai/'));
	}

}

/* End of file Discount.php */
/* Location: ./application/controllers/Discount.php */