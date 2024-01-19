<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Login extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function checkAccount($taikhoan, $matkhau){
		$sql = "SELECT * FROM nguoidung WHERE TaiKhoan = ? AND MatKhau = ? AND PhanQuyen = 0";
		$result = $this->db->query($sql, array($taikhoan, $matkhau));
		return $result->num_rows();
	}

	public function checkAccountBlock($taikhoan){
		$sql = "SELECT * FROM nguoidung WHERE TaiKhoan = ? AND TrangThai = 0";
		$result = $this->db->query($sql, array($taikhoan));
		return $result->num_rows();
	}

	public function getInfoByUsername($taikhoan){
		$sql = "SELECT * FROM nguoidung WHERE TaiKhoan = ?";
		$result = $this->db->query($sql, array($taikhoan));
		return $result->result_array();
	}

	public function getInfoByEmail($email){
		$sql = "SELECT * FROM nguoidung WHERE Email = ?";
		$result = $this->db->query($sql, array($email));
		return $result->result_array();
	}

	public function getInfoByPhone($phone){
		$sql = "SELECT * FROM nguoidung WHERE SoDienThoai = ?";
		$result = $this->db->query($sql, array($phone));
		return $result->result_array();
	}

	public function register($hoten,$sodienthoai,$email,$taikhoan,$matkhau){
		$sql = "INSERT INTO nguoidung (HoTen,SoDienThoai,Email,TaiKhoan,MatKhau) VALUES(?, ?, ?, ?, ?)";
		$result = $this->db->query($sql, array($hoten,$sodienthoai,$email,$taikhoan,$matkhau));
		return $result;
	}

	public function updatePassword($matkhau,$email,$taikhoan){
		$sql = "UPDATE nguoidung SET MatKhau = ? WHERE Email = ? AND TaiKhoan = ?";
		$result = $this->db->query($sql, array($matkhau,$email,$taikhoan));
		return $result;
	}
}

/* End of file Model_Login.php */
/* Location: ./application/models/Model_Login.php */