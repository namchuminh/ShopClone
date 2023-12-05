<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Bank extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getById(){
		$sql = "SELECT * FROM thanhtoan WHERE MaThanhToan = ?";
		$result = $this->db->query($sql, array("ChuyenKhoan"));
		return $result->result_array();
	}

	public function insert($id, $key,$luuy,$trangthai){
		$sql = "INSERT INTO thanhtoan(MaThanhToan,TenThanhToan,Id,IdKey,LuuY,TrangThai) VALUES(?,?,?,?,?,?)";
		$result = $this->db->query($sql, array("ChuyenKhoan","Chuyển Khoản Ví VNPAY",$id, $key,$luuy,$trangthai));
		return $result;
	}

	public function update($id, $key,$luuy,$trangthai){
		$sql = "UPDATE thanhtoan SET Id = ?, IdKey = ?, LuuY = ?, TrangThai = ? WHERE MaThanhToan = ?";
		$result = $this->db->query($sql, array($id, $key,$luuy,$trangthai,"ChuyenKhoan"));
		return $result;
	}

	public function getBank(){
		$sql = "SELECT quanlychuyenkhoan.*, nguoidung.MaNguoiDung, nguoidung.TaiKhoan FROM quanlychuyenkhoan, nguoidung, thanhtoan WHERE quanlychuyenkhoan.MaNguoiDung = nguoidung.MaNguoiDung AND quanlychuyenkhoan.MaThanhToan = thanhtoan.MaThanhToan AND thanhtoan.MaThanhToan = ? ORDER BY quanlychuyenkhoan.MaChuyenKhoan DESC";
		$result = $this->db->query($sql, array("ChuyenKhoan"));
		return $result->result_array();
	}

}

/* End of file Model_Bank.php */
/* Location: ./application/models/Model_Bank.php */