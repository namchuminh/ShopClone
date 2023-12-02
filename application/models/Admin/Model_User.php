<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_User extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAll(){
		$sql = "SELECT nguoidung.MaNguoiDung, nguoidung.HoTen, nguoidung.TaiKhoan, nguoidung.MatKhau, nguoidung.SoDienThoai, nguoidung.Email, nguoidung.NgayThamGia, nguoidung.PhanQuyen, nguoidung.TrangThai, COALESCE(vitien.MaViTien, 0) AS MaViTien, nguoidung.MaNguoiDung, COALESCE(vitien.SoDuKhaDung, 0) AS SoDuKhaDung, COALESCE(vitien.DaSuDung, 0) AS DaSuDung, COALESCE(vitien.TongNap, 0) AS TongNap FROM nguoidung LEFT JOIN vitien ON nguoidung.MaNguoiDung = vitien.MaNguoiDung ORDER BY nguoidung.MaNguoiDung DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM nguoidung";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaNguoiDung){
		$sql = "SELECT nguoidung.MaNguoiDung, nguoidung.HoTen, nguoidung.TaiKhoan, nguoidung.MatKhau, nguoidung.SoDienThoai, nguoidung.Email, nguoidung.NgayThamGia, nguoidung.PhanQuyen, nguoidung.TrangThai, COALESCE(vitien.MaViTien, 0) AS MaViTien, nguoidung.MaNguoiDung, COALESCE(vitien.SoDuKhaDung, 0) AS SoDuKhaDung, COALESCE(vitien.DaSuDung, 0) AS DaSuDung, COALESCE(vitien.TongNap, 0) AS TongNap FROM nguoidung LEFT JOIN vitien ON nguoidung.MaNguoiDung = vitien.MaNguoiDung WHERE nguoidung.MaNguoiDung = ?";
		$result = $this->db->query($sql, array($MaNguoiDung));
		return $result->result_array();
	}

	public function changeStatus($trangthai,$MaNguoiDung){
		$sql = "UPDATE `nguoidung` SET TrangThai = ? WHERE MaNguoiDung = ?";
		$result = $this->db->query($sql, array($trangthai,$MaNguoiDung));
		return $result;
	}

	public function search($tennguoidung,$trangthai){
		$tennguoidung = "%".$tennguoidung."%";
		$sql = "SELECT nguoidung.MaNguoiDung, nguoidung.HoTen, nguoidung.TaiKhoan, nguoidung.MatKhau, nguoidung.SoDienThoai, nguoidung.Email, nguoidung.NgayThamGia, nguoidung.PhanQuyen, nguoidung.TrangThai, COALESCE(vitien.MaViTien, 0) AS MaViTien, nguoidung.MaNguoiDung, COALESCE(vitien.SoDuKhaDung, 0) AS SoDuKhaDung, COALESCE(vitien.DaSuDung, 0) AS DaSuDung, COALESCE(vitien.TongNap, 0) AS TongNap FROM nguoidung LEFT JOIN vitien ON nguoidung.MaNguoiDung = vitien.MaNguoiDung WHERE nguoidung.TaiKhoan LIKE ? OR nguoidung.TrangThai = ?";
		$result = $this->db->query($sql,array($tennguoidung,$trangthai));
		return $result->result_array();
	}

	public function updateById($hoten,$taikhoan,$sodienthoai,$email,$trangthai,$MaNguoiDung){
		$sql = "UPDATE `nguoidung` SET HoTen = ?, taikhoan = ?, sodienthoai = ?, email = ?, trangthai = ?  WHERE MaNguoiDung = ?";
		$result = $this->db->query($sql, array($hoten,$taikhoan,$sodienthoai,$email,$trangthai,$MaNguoiDung));
		return $result;
	}

	public function updateMoney($sodukhadung,$MaNguoiDung){
		$sql = "UPDATE `vitien` SET SoDuKhaDung = ? WHERE MaNguoiDung = ?";
		$result = $this->db->query($sql, array($sodukhadung,$MaNguoiDung));
		return $result;
	}

	public function insertCashFlow($MaNguoiDung,$SoTienTruoc,$SoTienThayDoi,$SoTienHienTai,$NoiDung){
		$sql = "INSERT INTO `dongtien`(`MaNguoiDung`, `SoTienTruoc`, `SoTienThayDoi`, `SoTienHienTai`, `NoiDung`) VALUES (?,?,?,?,?)";
		$result = $this->db->query($sql, array($MaNguoiDung,$SoTienTruoc,$SoTienThayDoi,$SoTienHienTai,$NoiDung));
		return $result;
	}

	public function getCashFlowById($MaNguoiDung){
		$sql = "SELECT * FROM dongtien WHERE MaNguoiDung = ? ORDER BY MaDongTien DESC";
		$result = $this->db->query($sql, array($MaNguoiDung));
		return $result->result_array();
	}
}

/* End of file Model_User.php */
/* Location: ./application/models/Model_User.php */