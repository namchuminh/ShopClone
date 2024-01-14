<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Profile extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getExcess($MaNguoiDung){
		$sql = "SELECT * FROM vitien WHERE MaNguoiDung = ?";
		$result = $this->db->query($sql, array($MaNguoiDung));
		return $result->result_array();
	}

	public function updateWallet($sodukhadung, $dasudung, $manguoidung){
		$sql = "UPDATE `vitien` SET `SoDuKhaDung`=?,`DaSuDung`=? WHERE `MaNguoiDung`=?";
		$result = $this->db->query($sql, array($sodukhadung, $dasudung, $manguoidung));
		return $result;
	}

	public function getInfoByUsername($taikhoan){
		$sql = "SELECT * FROM nguoidung WHERE TaiKhoan = ?";
		$result = $this->db->query($sql, array($taikhoan));
		return $result->result_array();
	}

	public function update($hoten,$sodienthoai,$email,$matkhau,$manguoidung){
		$sql = "UPDATE `nguoidung` SET HoTen = ?, sodienthoai = ?, email = ?, matkhau = ? WHERE MaNguoiDung = ?";
		$result = $this->db->query($sql, array($hoten,$sodienthoai,$email,$matkhau,$manguoidung));
		return $result;
	}

	public function getTopPay(){
		$sql = "SELECT nguoidung.*, vitien.* FROM nguoidung, vitien WHERE nguoidung.MaNguoiDung = vitien.MaNguoiDung AND nguoidung.PhanQuyen = 0 ORDER BY vitien.TongNap DESC LIMIT 10";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

/* End of file Model_Profile.php */
/* Location: ./application/models/Model_Profile.php */