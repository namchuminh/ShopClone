<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Order extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function insert($magiaodich,$danhsach,$manguoidung,$masanpham,$soluong,$thanhtoan,$machuyenmuc){
		$sql = "INSERT INTO `donhang`(`MaGiaoDich`, `DanhSachClone`, `MaNguoiDung`, `MaSanPham`, `SoLuong`, `ThanhToan`, `MaChuyenMuc`) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$result = $this->db->query($sql, array($magiaodich,$danhsach,$manguoidung,$masanpham,$soluong,$thanhtoan,$machuyenmuc));
		return $result;
	}

	public function insertHistory($manguoidung,$masanpham,$hanhdong){
		$sql = "INSERT INTO `lichsumua`(`MaNguoiDung`, `MaSanPham`, `HanhDong`) VALUES (?, ?, ?)";
		$result = $this->db->query($sql, array($manguoidung,$masanpham,$hanhdong));
		return $result;
	}

}

/* End of file Model_Pay.php */
/* Location: ./application/models/Model_Pay.php */