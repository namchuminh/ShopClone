<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$data = array();
		$this->load->model('Admin/Model_Category');
	}

	public function index()
	{
		$data['title'] = "Quản lý chuyên mục sản phẩm";
		$data['list'] = $this->Model_Category->getAll();
		return $this->load->view('Admin/Category/View_Category', $data);
	}

	public function add()
	{
		$data['title'] = "Thêm chuyên mục sản phẩm";
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenchuyenmuc = $this->input->post('tenchuyenmuc');
			$hinhanh = "";

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('hinhanh')){
				$img = $this->upload->data();
				$hinhanh = base_url('uploads')."/".$img['file_name'];
			}

			if(empty($tenchuyenmuc) || empty($hinhanh)){
				$data['error'] = "Vui lòng nhập đủ thông tin chuyên mục!";
				return $this->load->view('Admin/Category/View_AddCategory', $data);
			}

			$this->Model_Category->add($tenchuyenmuc,$hinhanh);

			$data['success'] = "Thêm chuyên mục thành công!";
			return $this->load->view('Admin/Category/View_AddCategory', $data);

		}
		return $this->load->view('Admin/Category/View_AddCategory', $data);
	}

	public function update($MaChuyenMuc)
	{

		if(count($this->Model_Category->getById($MaChuyenMuc)) < 1){
			return redirect(base_url('admin/chuyen-muc/'));
		}

		$data['title'] = "Cập nhật chuyên mục sản phẩm";
		$data['detail'] = $this->Model_Category->getById($MaChuyenMuc);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tenchuyenmuc = $this->input->post('tenchuyenmuc');
			$trangthai = $this->input->post('trangthai');

			if(empty($tenchuyenmuc)){
				$data['error'] = "Vui lòng nhập tên chuyên mục!";
				return $this->load->view('Admin/Category/View_UpdateCategory', $data);
			}

			if($trangthai != 0 && $trangthai != 1){
				$data['error'] = "Trạng thái chuyên mục không hợp lệ!";
				return $this->load->view('Admin/Category/View_UpdateCategory', $data);
			}

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('hinhanh')){
				$img = $this->upload->data();
				$hinhanh = base_url('uploads')."/".$img['file_name'];
				$this->Model_Category->updateImage($hinhanh,$MaChuyenMuc);
			}

			$this->Model_Category->updateById($tenchuyenmuc,$trangthai,$MaChuyenMuc);

			$data['success'] = "Cập nhật chuyên mục thành công!";
			$data['detail'] = $this->Model_Category->getById($MaChuyenMuc);
			return $this->load->view('Admin/Category/View_UpdateCategory', $data);

		}
		return $this->load->view('Admin/Category/View_UpdateCategory', $data);
	}

	public function search(){
		$tenchuyenmuc = $this->input->post('tenchuyenmuc');
		$trangthai = $this->input->post('trangthai');

		if(empty($tenchuyenmuc) && ($trangthai != 0 && $trangthai != 1)){
			return redirect(base_url('admin/chuyen-muc/'));
		}

		$data['title'] = "Quản lý chuyên mục sản phẩm";
		$data['list'] = $this->Model_Category->search($tenchuyenmuc,$trangthai);

		return $this->load->view('Admin/Category/View_Category', $data);
	}

	public function delete($MaChuyenMuc){
		$this->Model_Category->delete($MaChuyenMuc);
		return redirect(base_url('admin/chuyen-muc/'));
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */