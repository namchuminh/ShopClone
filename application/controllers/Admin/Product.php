<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$this->load->model('Admin/Model_Product');
		$this->load->model('Admin/Model_Category');
	}

	public function index()
	{
		$data['title'] = "Quản lý sản phẩm";
		$data['category'] = $this->Model_Category->getAll();
		$data['list'] = $this->Model_Product->getAll();
		return $this->load->view('Admin/Product/View_Product', $data);
	}

	public function add()
	{
		$data['title'] = "Thêm mới sản phẩm";
		$data['category'] = $this->Model_Category->getAll();
		$data['country'] = $this->Model_Product->getAllCountry();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tensanpham = $this->input->post('tensanpham');
			$maquocgia = $this->input->post('maquocgia');
			$giaban = $this->input->post('giaban');
			$muatoida = $this->input->post('muatoida');
			$muatoithieu = $this->input->post('muatoithieu');
			$machuyenmuc = $this->input->post('machuyenmuc');
			$mota = $this->input->post('mota');
			$luuy = $this->input->post('luuy');

			if(empty($tensanpham) || empty($mota) || empty($luuy)){
				$data['error'] = "Vui lòng nhập đủ thông tin sản phẩm!";
				return $this->load->view('Admin/Product/View_AddProduct', $data);
			}

			if(count($this->Model_Product->getCountryById($maquocgia)) < 1){
				$data['error'] = "Quốc gia không hợp lệ!";
				return $this->load->view('Admin/Product/View_AddProduct', $data);
			}

			if(count($this->Model_Category->getById($machuyenmuc)) < 1){
				$data['error'] = "Chuyên mục không tồn tại!";
				return $this->load->view('Admin/Product/View_AddProduct', $data);
			}

			if (!is_numeric($giaban)){
				$data['error'] = "Vui lòng nhập giá bán là một số!";
				return $this->load->view('Admin/Product/View_AddProduct', $data);
			}

			if (!is_numeric($muatoida)){
				$data['error'] = "Vui lòng nhập giá trị mua tối đa là một số!";
				return $this->load->view('Admin/Product/View_AddProduct', $data);
			}

			if (!is_numeric($muatoithieu)){
				$data['error'] = "Vui lòng nhập giá trị mua tối thiểu là kiểu số!";
				return $this->load->view('Admin/Product/View_AddProduct', $data);
			}

			$this->Model_Product->add($tensanpham,$maquocgia,$giaban,$muatoida,$muatoithieu,$machuyenmuc,$mota,$luuy);

			$this->session->set_flashdata('success', 'Thêm sản phẩm thành công!');
			return redirect(base_url('admin/san-pham/'));

		}
		return $this->load->view('Admin/Product/View_AddProduct', $data);
	}

	public function update($MaSanPham)
	{

		if(count($this->Model_Product->getById($MaSanPham)) < 1){
			return redirect(base_url('admin/san-pham/'));
		}

		$data['title'] = "Cập nhật sản phẩm";
		$data['category'] = $this->Model_Category->getAll();
		$data['country'] = $this->Model_Product->getAllCountry();
		$data['detail'] = $this->Model_Product->getById($MaSanPham);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$tensanpham = $this->input->post('tensanpham');
			$maquocgia = $this->input->post('maquocgia');
			$giaban = $this->input->post('giaban');
			$muatoida = $this->input->post('muatoida');
			$muatoithieu = $this->input->post('muatoithieu');
			$machuyenmuc = $this->input->post('machuyenmuc');
			$mota = $this->input->post('mota');
			$luuy = $this->input->post('luuy');
			$trangthai = $this->input->post('trangthai');

			if(empty($tensanpham) || empty($mota) || empty($luuy)){
				$data['error'] = "Vui lòng nhập đủ thông tin sản phẩm!";
				return $this->load->view('Admin/Product/View_UpdateProduct', $data);
			}

			if(count($this->Model_Product->getCountryById($maquocgia)) < 1){
				$data['error'] = "Quốc gia không hợp lệ!";
				return $this->load->view('Admin/Product/View_UpdateProduct', $data);
			}

			if(count($this->Model_Category->getById($machuyenmuc)) < 1){
				$data['error'] = "Chuyên mục không tồn tại!";
				return $this->load->view('Admin/Product/View_UpdateProduct', $data);
			}

			if (!is_numeric($giaban)){
				$data['error'] = "Vui lòng nhập giá bán là một số!";
				return $this->load->view('Admin/Product/View_UpdateProduct', $data);
			}

			if (!is_numeric($muatoida)){
				$data['error'] = "Vui lòng nhập giá trị mua tối đa là một số!";
				return $this->load->view('Admin/Product/View_UpdateProduct', $data);
			}

			if (!is_numeric($muatoithieu)){
				$data['error'] = "Vui lòng nhập giá trị mua tối thiểu là kiểu số!";
				return $this->load->view('Admin/Product/View_UpdateProduct', $data);
			}

			if($trangthai != 0 && $trangthai != 1){
				$data['error'] = "Trạng thái sản phẩm không hợp lệ!";
				return $this->load->view('Admin/Product/View_UpdateProduct', $data);
			}

			$this->Model_Product->updateById($tensanpham,$maquocgia,$giaban,$muatoida,$muatoithieu,$machuyenmuc,$mota,$luuy,$trangthai,$MaSanPham);

			$data['detail'] = $this->Model_Product->getById($MaSanPham);
			$data['success'] = "Cập nhật sản phẩm thành công!";
			return $this->load->view('Admin/Product/View_UpdateProduct', $data);

		}
		return $this->load->view('Admin/Product/View_UpdateProduct', $data);
	}

	public function search(){
		if ($this->input->server('REQUEST_METHOD') !== 'POST') {
			return redirect(base_url('admin/san-pham/'));
		}

		$tensanpham = $this->input->post('tensanpham');
		$machuyenmuc = $this->input->post('machuyenmuc');


		if(empty($tensanpham) && (count($this->Model_Category->getById($machuyenmuc)) < 1)){
			return redirect(base_url('admin/san-pham/'));
		}

		$data['title'] = "Quản lý sản phẩm";
		$data['list'] = $this->Model_Product->search($tensanpham,$machuyenmuc);
		$data['category'] = $this->Model_Category->getAll();
		return $this->load->view('Admin/Product/View_Product', $data);
	}

	public function delete($MaSanPham){
		$this->Model_Product->delete($MaSanPham);
		$this->session->set_flashdata('success', 'Xóa sản phẩm thành công!');
		return redirect(base_url('admin/san-pham/'));
	}

	public function importClone($MaSanPham){
		if(count($this->Model_Product->getById($MaSanPham)) < 1){
			return redirect(base_url('admin/san-pham/'));
		}

		$data['title'] = "Nhập Clone vào sản phẩm";
		$data['detail'] = $this->Model_Product->getById($MaSanPham);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$danhsachtaikhoan = trim($this->input->post('danhsach'));

			if(count($this->Model_Product->getAllCloneById($MaSanPham)) < 1){
				$this->Model_Product->insertClone($danhsachtaikhoan, $MaSanPham);
			}else{
				$danhsach = $this->Model_Product->getAllCloneById($MaSanPham)[0]['DanhSachTaiKhoan']."\n".$danhsachtaikhoan;
				if($this->Model_Product->getAllCloneById($MaSanPham)[0]['DanhSachTaiKhoan'] == ""){
					$danhsach = $danhsachtaikhoan;
				}		
				$this->Model_Product->importClone($danhsach, $MaSanPham);
			}

			$data['success'] = "Thêm danh sách Clone thành công!";
			return $this->load->view('Admin/Product/View_ImportClone', $data);
		}
		return $this->load->view('Admin/Product/View_ImportClone', $data);
	}

	public function deleteClone($MaSanPham){
		if(count($this->Model_Product->getById($MaSanPham)) < 1){
			return redirect(base_url('admin/san-pham/'));
		}

		if(count($this->Model_Product->getAllCloneById($MaSanPham)) < 1){
			$this->session->set_flashdata('error', 'Vui lòng thêm Clone trước khi thực hiện!');
			return redirect(base_url('admin/san-pham/'));
		}

		$data['title'] = "Xóa Clone khỏi sản phẩm";
		$data['detail'] = $this->Model_Product->getById($MaSanPham);
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$danhsach = $this->Model_Product->getAllCloneById($MaSanPham)[0]['DanhSachTaiKhoan'];
			

			$danhsachxoa = trim($this->input->post('danhsach'));
			$danhsachxoa = explode("\n", $danhsachxoa);

			for($i = 0; $i < count($danhsachxoa); $i++){
				$danhsach = str_replace(trim($danhsachxoa[$i]),"\n",$danhsach);
			}

			$this->Model_Product->importClone(trim($danhsach), $MaSanPham);

			$data['success'] = "Xóa Clone thành công!";
			return $this->load->view('Admin/Product/View_DeleteClone', $data);
		}
		return $this->load->view('Admin/Product/View_DeleteClone', $data);
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */