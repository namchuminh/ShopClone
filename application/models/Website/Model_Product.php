<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Product extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getById($MaSanPham){
		$sql = "SELECT * FROM sanpham WHERE MaSanPham = ? AND TrangThai = 1";
		$result = $this->db->query($sql, array($MaSanPham));
		return $result->result_array();
	}

	public function getAll(){
		$sql = "SELECT * FROM sanpham WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getByCategoryId($MaChuyenMuc){
		$sql = "SELECT * FROM sanpham WHERE MaChuyenMuc = ? AND TrangThai = 1";
		$result = $this->db->query($sql, array($MaChuyenMuc));
		return $result->result_array();
	}

	public function getNumberProduct($MaSanPham){
		$sql = "SELECT * FROM `taikhoan` WHERE MaSanPham = ?";
		$result = $this->db->query($sql, array($MaSanPham));
		if (count($result->result_array()) <= 0){
			return 0;
		}else{
			if(empty($result->result_array()[0]['DanhSachTaiKhoan'])){
				return 0;
			}

			$danhsach = explode("\n", $result->result_array()[0]['DanhSachTaiKhoan']);

			return count($danhsach);
		}
	}

	public function getNation($MaQuocGia){
		$sql = "SELECT * FROM quocgia WHERE MaQuocGia = ?";
		$result = $this->db->query($sql, array($MaQuocGia));
		return $result->result_array();
	}

	public function getAllNation(){
		$sql = "SELECT * FROM quocgia";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getAllCloneById($MaSanPham){
		$sql = "SELECT * FROM `taikhoan` WHERE MaSanPham = ?";
		$result = $this->db->query($sql, array($MaSanPham));
		return $result->result_array();
	}

	public function importClone($danhsach,$MaSanPham){
		$sql = "UPDATE `taikhoan` SET `DanhSachTaiKhoan`=? WHERE `MaSanPham`=?";
		$result = $this->db->query($sql, array($danhsach,$MaSanPham));
		return $result;
	}
}

/* End of file Model_Product.php */
/* Location: ./application/models/Model_Product.php */