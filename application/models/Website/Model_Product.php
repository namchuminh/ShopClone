<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Product extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAll(){
		
	}

	public function getByCategoryId($MaChuyenMuc){
		$sql = "SELECT * FROM sanpham WHERE MaChuyenMuc = ?";
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

}

/* End of file Model_Product.php */
/* Location: ./application/models/Model_Product.php */