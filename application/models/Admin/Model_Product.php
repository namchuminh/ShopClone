<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Product extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAll(){
		$sql = "SELECT sanpham.*, quocgia.*, chuyenmuc.TenChuyenMuc, chuyenmuc.MaChuyenMuc, chuyenmuc.HinhAnh FROM sanpham,quocgia,chuyenmuc WHERE sanpham.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND sanpham.MaQuocGia = quocgia.MaQuocGia ORDER BY MaSanPham DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM sanpham";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($Masanpham){
		$sql = "SELECT sanpham.*, quocgia.TenQuocGia, quocgia.MaQuocGia, chuyenmuc.TenChuyenMuc, chuyenmuc.MaChuyenMuc FROM sanpham,quocgia,chuyenmuc WHERE sanpham.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND sanpham.MaQuocGia = quocgia.MaQuocGia AND sanpham.MaSanPham = ?";
		$result = $this->db->query($sql, array($Masanpham));
		return $result->result_array();
	}

	public function add($tensanpham,$hinhanh,$maquocgia,$giaban,$muatoida,$muatoithieu,$machuyenmuc,$mota,$luuy){
		$sql = "INSERT INTO `sanpham`(`Tensanpham`, `HinhAnh`, `maquocgia`, `giaban`,`muatoida`,`muatoithieu`,`machuyenmuc`,`mota`,`luuy`,`daban`,`trangthai`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		$result = $this->db->query($sql,array($tensanpham,$hinhanh,$maquocgia,$giaban,$muatoida,$muatoithieu,$machuyenmuc,$mota,$luuy,0,1));
		return $result;
	}

	public function updateById($tensanpham,$maquocgia,$giaban,$muatoida,$muatoithieu,$machuyenmuc,$mota,$luuy,$trangthai,$MaSanPham){
		$sql = "UPDATE `sanpham` SET `Tensanpham`=?,`MaQuocGia`=?,`giaban`=?,`muatoida`=?,`muatoithieu`=?,`machuyenmuc`=?,`mota`=?,`luuy`=?,`trangthai`=? WHERE `Masanpham`=?";
		$result = $this->db->query($sql,array($tensanpham,$maquocgia,$giaban,$muatoida,$muatoithieu,$machuyenmuc,$mota,$luuy,$trangthai,$MaSanPham));
		return $result;
	}

	public function search($tensanpham,$machuyenmuc){
		$tensanpham = "%".$tensanpham."%";
		if(empty($machuyenmuc)){
			$sql = "SELECT sanpham.*, quocgia.TenQuocGia, quocgia.MaQuocGia, chuyenmuc.TenChuyenMuc, chuyenmuc.MaChuyenMuc FROM sanpham,quocgia,chuyenmuc WHERE sanpham.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND sanpham.MaQuocGia = quocgia.MaQuocGia AND sanpham.TenSanPham LIKE ?";
			$result = $this->db->query($sql,array($tensanpham));
			return $result->result_array();
		}else{
			$sql = "SELECT sanpham.*, quocgia.TenQuocGia, quocgia.MaQuocGia, chuyenmuc.TenChuyenMuc, chuyenmuc.MaChuyenMuc FROM sanpham,quocgia,chuyenmuc WHERE sanpham.MaChuyenMuc = chuyenmuc.MaChuyenMuc AND sanpham.MaQuocGia = quocgia.MaQuocGia AND sanpham.TenSanPham LIKE ? AND sanpham.MaChuyenMuc = ?";
			$result = $this->db->query($sql,array($tensanpham,$machuyenmuc));
			return $result->result_array();
		}
		
	}

	public function delete($Masanpham){
		$sql = "DELETE FROM `sanpham` WHERE `Masanpham`= ?";
		$result = $this->db->query($sql,array($Masanpham));
		return $result;
	}

	public function getCountryById($MaQuocGia){
		$sql = "SELECT * FROM `quocgia` WHERE `MaQuocGia`= ?";
		$result = $this->db->query($sql,array($MaQuocGia));
		return $result->result_array();
	}

	public function getAllCountry(){
		$sql = "SELECT * FROM `quocgia` ORDER BY TenQuocGia ASC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function getAllCloneById($MaSanPham){
		$sql = "SELECT * FROM `taikhoan` WHERE MaSanPham = ?";
		$result = $this->db->query($sql, array($MaSanPham));
		return $result->result_array();
	}

	public function insertClone($danhsach,$MaSanPham){
		$sql = "INSERT INTO `taikhoan` (MaSanPham,DanhSachTaiKhoan) VALUES(?,?)";
		$result = $this->db->query($sql, array($MaSanPham,$danhsach));
		return $result;
	}

	public function importClone($danhsach,$MaSanPham){
		$sql = "UPDATE `taikhoan` SET `DanhSachTaiKhoan`=? WHERE `MaSanPham`=?";
		$result = $this->db->query($sql, array($danhsach,$MaSanPham));
		return $result;
	}

	public function updateImage($hinhanh, $MaSanPham){
		$sql = "UPDATE `sanpham` SET `HinhAnh`=? WHERE `MaSanPham`=?";
		$result = $this->db->query($sql, array($hinhanh,$MaSanPham));
		return $result;
	}
}

/* End of file Model_Product.php */
/* Location: ./application/models/Model_Product.php */