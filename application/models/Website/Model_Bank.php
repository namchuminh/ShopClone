<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Bank extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getConfig(){
		$sql = "SELECT * FROM thanhtoan WHERE MaThanhToan = ?";
		$result = $this->db->query($sql, array("ChuyenKhoan"));
		return $result->result_array();
	}

	public function insert($manguoidung,$nganhang,$loaithe,$sotien,$noidung,$trangthai){
		$sql = "INSERT INTO `quanlychuyenkhoan`(`MaThanhToan`, `MaNguoiDung`, `NganHang`, `LoaiThe`, `SoTien`, `NoiDung`, `TrangThai`) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$result = $this->db->query($sql, array("ChuyenKhoan",$manguoidung,$nganhang,$loaithe,$sotien,$noidung,$trangthai));
		return $result;
	}
}

/* End of file Model_Bank.php */
/* Location: ./application/models/Model_Bank.php */