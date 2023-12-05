<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Login extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function checkAccountAdmin($taikhoan, $matkhau){
		$sql = "SELECT * FROM nguoidung WHERE TaiKhoan = ? AND MatKhau = ? AND PhanQuyen = 1";
		$result = $this->db->query($sql, array($taikhoan, $matkhau));
		return $result->num_rows();
	}

	public function getInfoByUsername($taikhoan){
		$sql = "SELECT * FROM nguoidung WHERE TaiKhoan = ?";
		$result = $this->db->query($sql, array($taikhoan));
		return $result->result_array();
	}

	public function checkEmailForgetPassword($email){
		$sql = "SELECT * FROM nguoidung WHERE Email = ? AND PhanQuyen = 1";
		$result = $this->db->query($sql, array($email));
		return $result->result_array();
	}

	public function updatePassword($matkhau,$email,$taikhoan){
		$sql = "UPDATE nguoidung SET MatKhau = ? WHERE Email = ? AND TaiKhoan = ? AND PhanQuyen = 1";
		$result = $this->db->query($sql, array($matkhau,$email,$taikhoan));
		return $result;
	}

}

/* End of file DangNhap.php */
/* Location: ./application/models/DangNhap.php */