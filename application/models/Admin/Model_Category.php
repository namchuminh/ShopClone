<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Category extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll(){
		$sql = "SELECT * FROM chuyenmuc ORDER BY MaChuyenMuc DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM chuyenmuc";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaChuyenMuc){
		$sql = "SELECT * FROM chuyenmuc WHERE MaChuyenMuc = ?";
		$result = $this->db->query($sql, array($MaChuyenMuc));
		return $result->result_array();
	}

	public function add($tenchuyenmuc,$hinhanh){
		$sql = "INSERT INTO `chuyenmuc`(`TenChuyenMuc`, `HinhAnh`, `TrangThai`) VALUES (?,?,?)";
		$result = $this->db->query($sql,array($tenchuyenmuc,$hinhanh,1));
		return $result;
	}

	public function updateById($tenchuyenmuc,$trangthai,$MaChuyenMuc){
		$sql = "UPDATE `chuyenmuc` SET `TenChuyenMuc`=?,`TrangThai`=? WHERE `MaChuyenMuc`=?";
		$result = $this->db->query($sql,array($tenchuyenmuc,$trangthai,$MaChuyenMuc));
		return $result;
	}

	public function updateImage($hinhanh,$MaChuyenMuc){
		$sql = "UPDATE `chuyenmuc` SET `HinhAnh`=? WHERE `MaChuyenMuc`=?";
		$result = $this->db->query($sql,array($hinhanh,$MaChuyenMuc));
		return $result;
	}

	public function search($tenchuyenmuc,$trangthai){
		$tenchuyenmuc = "%".$tenchuyenmuc."%";
		$sql = "SELECT * FROM chuyenmuc WHERE TenChuyenMuc LIKE ? AND TrangThai = ?";
		$result = $this->db->query($sql,array($tenchuyenmuc,$trangthai));
		return $result->result_array();
	}

	public function delete($MaChuyenMuc){
		$sql = "DELETE FROM `chuyenmuc` WHERE `MaChuyenMuc`= ?";
		$result = $this->db->query($sql,array($MaChuyenMuc));
		return $result;
	}

}

/* End of file Model_Category.php */
/* Location: ./application/models/Model_Category.php */