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

	public function getDoanhThuThang(){
		$nganhang = $this->db->query("SELECT COALESCE(SUM(SoTien), 0) AS TongSoTien FROM quanlychuyenkhoan WHERE TrangThai = ? AND MONTH(ThoiGian) = MONTH(NOW()) AND YEAR(ThoiGian) = YEAR(NOW())", array("Thành công"))->result_array()[0]['TongSoTien'];

		$napthe = $this->db->query("SELECT COALESCE(SUM(MenhGia), 0) AS TongSoTien FROM quanlynapthe WHERE TrangThai = 1 AND MONTH(ThoiGian) = MONTH(NOW()) AND YEAR(ThoiGian) = YEAR(NOW())")->result_array()[0]['TongSoTien'];

		return $nganhang + $napthe;
	}

	public function getDoanhThuTuan(){
		$nganhang = $this->db->query("SELECT COALESCE(SUM(SoTien), 0) AS TongSoTien FROM quanlychuyenkhoan WHERE TrangThai = ? AND ThoiGian >= DATE_SUB(NOW(), INTERVAL 7 DAY) AND ThoiGian < NOW()", array("Thành công"))->result_array()[0]['TongSoTien'];

		$napthe = $this->db->query("SELECT COALESCE(SUM(MenhGia), 0) AS TongSoTien FROM quanlynapthe WHERE TrangThai = 1 AND ThoiGian >= DATE_SUB(NOW(), INTERVAL 7 DAY) AND ThoiGian < NOW()")->result_array()[0]['TongSoTien'];

		return $nganhang + $napthe;
	}

	public function getDoanhThuNgay(){
		$nganhang = $this->db->query("SELECT COALESCE(SUM(SoTien), 0) AS TongSoTien FROM quanlychuyenkhoan WHERE TrangThai = ? AND DATE(ThoiGian) = CURDATE()", array("Thành công"))->result_array()[0]['TongSoTien'];

		$napthe = $this->db->query("SELECT COALESCE(SUM(MenhGia), 0) AS TongSoTien FROM quanlynapthe WHERE TrangThai = 1 AND DATE(ThoiGian) = CURDATE()")->result_array()[0]['TongSoTien'];

		return $nganhang + $napthe;
	}

	public function getBanTrongThang(){
		$taikhoan = $this->db->query("SELECT COALESCE(SUM(SoLuong), 0) AS TongSoLuong FROM donhang WHERE MONTH(ThoiGian) = MONTH(NOW()) AND YEAR(ThoiGian) = YEAR(NOW())")->result_array()[0]['TongSoLuong'];
		return $taikhoan;
	}

	public function getBanTrongTuan(){
		$taikhoan = $this->db->query("SELECT COALESCE(SUM(SoLuong), 0) AS TongSoLuong FROM donhang WHERE ThoiGian >= DATE_SUB(NOW(), INTERVAL 7 DAY) AND ThoiGian < NOW()")->result_array()[0]['TongSoLuong'];
		return $taikhoan;
	}

	public function getBanTrongNgay(){
		$taikhoan = $this->db->query("SELECT COALESCE(SUM(SoLuong), 0) AS TongSoLuong FROM donhang WHERE DATE(ThoiGian) = CURDATE()")->result_array()[0]['TongSoLuong'];
		return $taikhoan;
	}

	public function getDangKyThang(){
		$khachhang = $this->db->query("SELECT COALESCE(COUNT(*), 0) AS SoLuongNguoiDung FROM nguoidung WHERE MONTH(NgayThamGia) = MONTH(NOW()) AND YEAR(NgayThamGia) = YEAR(NOW())")->result_array()[0]['SoLuongNguoiDung'];
		return $khachhang;
	}

	public function getDangKyTuan(){
		$khachhang = $this->db->query("SELECT COALESCE(COUNT(*), 0) AS SoLuongNguoiDung FROM nguoidung WHERE NgayThamGia >= DATE_SUB(NOW(), INTERVAL 7 DAY) AND NgayThamGia < NOW()")->result_array()[0]['SoLuongNguoiDung'];
		return $khachhang;
	}

	public function getDangKyNgay(){
		$khachhang = $this->db->query("SELECT COALESCE(COUNT(*), 0) AS SoLuongNguoiDung FROM nguoidung WHERE DATE(NgayThamGia) = CURDATE()")->result_array()[0]['SoLuongNguoiDung'];
		return $khachhang;
	}

	public function getDongTien(){
		$sql = "SELECT dongtien.*, nguoidung.TaiKhoan, nguoidung.MaNguoiDung FROM `dongtien`, `nguoidung` WHERE dongtien.MaNguoiDung = nguoidung.MaNguoiDung ORDER BY dongtien.MaDongTien DESC LIMIT 15";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

/* End of file Model_Website.php */
/* Location: ./application/models/Model_Website.php */