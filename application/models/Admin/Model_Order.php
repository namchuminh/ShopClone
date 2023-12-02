<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Order extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAll(){
		$sql = "SELECT donhang.*, nguoidung.TaiKhoan, nguoidung.MaNguoiDung, sanpham.TenSanPham, chuyenmuc.TenChuyenMuc FROM donhang, nguoidung, sanpham, chuyenmuc WHERE donhang.MaNguoiDung = nguoidung.MaNguoiDung AND donhang.MaSanPham = sanpham.MaSanPham AND donhang.MaChuyenMuc = chuyenmuc.MaChuyenMuc ORDER BY donhang.MaDonHang DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM donhang";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaGiaoDich){
		$sql = "SELECT donhang.*, nguoidung.TaiKhoan, nguoidung.MaNguoiDung, sanpham.TenSanPham, chuyenmuc.TenChuyenMuc FROM donhang, nguoidung, sanpham, chuyenmuc WHERE donhang.MaNguoiDung = nguoidung.MaNguoiDung AND donhang.MaSanPham = sanpham.MaSanPham AND donhang.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND donhang.MaGiaoDich = ?";
		$result = $this->db->query($sql, array($MaGiaoDich));
		return $result->result_array();
	}

	public function search($MaGiaoDich){
		$MaGiaoDich = "%".$MaGiaoDich."%";
		$sql = "SELECT donhang.*, nguoidung.TaiKhoan, nguoidung.MaNguoiDung, sanpham.TenSanPham, chuyenmuc.TenChuyenMuc FROM donhang, nguoidung, sanpham, chuyenmuc WHERE donhang.MaNguoiDung = nguoidung.MaNguoiDung AND donhang.MaSanPham = sanpham.MaSanPham AND donhang.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND donhang.MaGiaoDich LIKE ?";
		$result = $this->db->query($sql,array($MaGiaoDich));
		return $result->result_array();
	}

}

/* End of file Model_Order.php */
/* Location: ./application/models/Model_Order.php */