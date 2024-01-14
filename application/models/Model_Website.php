<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Website extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllConfig(){
		$sql = "SELECT * FROM caidat";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getSumUser(){
		$sql = "SELECT * FROM nguoidung WHERE PhanQuyen = 0;";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function sumOrderClone(){
		$sql = "SELECT SUM(DaBan) AS SoLuongBan FROM sanpham";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getSumProduct(){
		$sql = "SELECT * FROM sanpham WHERE TrangThai = 1";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getSumClone(){
		$sql = "SELECT * FROM taikhoan";
		$result = $this->db->query($sql)->result_array();
		$number = 0;
		foreach ($result as $key => $value) {
			$listClone = explode("\n", $value['DanhSachTaiKhoan']);
			$number = $number + count($listClone);
		}
		return $number;
	}
}

/* End of file Model_Website.php */
/* Location: ./application/models/Model_Website.php */