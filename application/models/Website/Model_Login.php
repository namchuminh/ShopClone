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

}

/* End of file Model_Login.php */
/* Location: ./application/models/Model_Login.php */