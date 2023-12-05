<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Card extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}


	public function getById(){
		$sql = "SELECT * FROM thanhtoan WHERE MaThanhToan = ?";
		$result = $this->db->query($sql, array("NapThe"));
		return $result->result_array();
	}

	public function insert($id, $key,$luuy,$trangthai){
		$sql = "INSERT INTO thanhtoan(MaThanhToan,TenThanhToan,Id,IdKey,LuuY,TrangThai) VALUES(?,?,?,?,?,?)";
		$result = $this->db->query($sql, array("NapThe","Nạp Thẻ Cào",$id, $key,$luuy,$trangthai));
		return $result;
	}

	public function update($id, $key,$luuy,$trangthai){
		$sql = "UPDATE thanhtoan SET Id = ?, IdKey = ?, LuuY = ?, TrangThai = ? WHERE MaThanhToan = ?";
		$result = $this->db->query($sql, array($id, $key,$luuy,$trangthai,"NapThe"));
		return $result;
	}

	public function getCard(){
		$sql = "SELECT quanlynapthe.*, nguoidung.MaNguoiDung, nguoidung.TaiKhoan FROM quanlynapthe, nguoidung, thanhtoan WHERE quanlynapthe.MaNguoiDung = nguoidung.MaNguoiDung AND quanlynapthe.MaThanhToan = thanhtoan.MaThanhToan AND thanhtoan.MaThanhToan = ? ORDER BY quanlynapthe.MaNapThe DESC";
		$result = $this->db->query($sql, array("NapThe"));
		return $result->result_array();
	}

}

/* End of file Model_Card.php */
/* Location: ./application/models/Model_Card.php */