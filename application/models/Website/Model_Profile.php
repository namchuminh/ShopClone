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

	public function updateWalletPay($manguoidung,$tongnap, $sodukhadung){
		$sql = "UPDATE `vitien` SET `SoDuKhaDung`=?,`TongNap`=? WHERE `MaNguoiDung`=?";
		$result = $this->db->query($sql, array($sodukhadung, $tongnap, $manguoidung));
		return $result;
	}

	public function insertWalletPay($manguoidung,$tongnap, $sodukhadung){
		$sql = "INSERT INTO `vitien`(`MaNguoiDung`, `SoDuKhaDung`, `DaSuDung`, `TongNap`) VALUES (?,?,?,?)";
		$result = $this->db->query($sql, array($manguoidung, $sodukhadung, 0, $tongnap));
		return $result;
	}

	public function checkDiscount($tiennap){
		$sql = "SELECT * FROM khuyenmai WHERE NapToiThieu <= ? ORDER BY NapToiThieu DESC LIMIT 1";
		$result = $this->db->query($sql, array($tiennap));
		return $result->result_array();
	}

	public function getCashFlow($manguoidung){
		$sql = "SELECT * FROM dongtien WHERE MaNguoiDung = ?";
		$result = $this->db->query($sql, array($manguoidung));
		return $result->result_array();
	}

	public function insertCashFlow($manguoidung,$sotientruoc, $sotienthaydoi,$sotienhientai,$noidung){
		$sql = "INSERT INTO `dongtien`(`MaNguoiDung`, `SoTienTruoc`, `SoTienThayDoi`, `SoTienHienTai`, `NoiDung`) VALUES (?,?,?,?,?)";
		$result = $this->db->query($sql, array($manguoidung,$sotientruoc, $sotienthaydoi,$sotienhientai,$noidung));
		return $result;
	}

	public function getListCard($manguoidung){
		$sql = "SELECT * FROM quanlynapthe WHERE MaNguoiDung = ? ORDER BY MaNapThe DESC";
		$result = $this->db->query($sql, array($manguoidung));
		return $result->result_array();
	}

	public function getListBank($manguoidung){
		$sql = "SELECT * FROM quanlychuyenkhoan WHERE MaNguoiDung = ? ORDER BY MaChuyenKhoan DESC";
		$result = $this->db->query($sql, array($manguoidung));
		return $result->result_array();
	}
}

/* End of file Model_Profile.php */
/* Location: ./application/models/Model_Profile.php */