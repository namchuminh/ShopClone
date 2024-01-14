<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Card extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function check($manguoidung){
		$sql = "SELECT * FROM quanlynapthe WHERE TrangThai = 0 AND MaNguoiDung = ?";
		$result = $this->db->query($sql, array($manguoidung));
		return $result->result_array();
	}

	public function update($mathe,$seri,$type,$status){
		$sql = "UPDATE `quanlynapthe` SET `TrangThai`= ? WHERE MaThe = ? AND SeriThe = ? AND LoaiThe = ?";
		$result = $this->db->query($sql, array($status,$mathe,$seri,$type));
		return $result;
	}

	public function insert($manguoidung,$mathe,$seri,$type,$amount,$request_id){
		$sql = "INSERT INTO `quanlynapthe`(`MaNguoiDung`, `MaThanhToan`, `MaThe`, `SeriThe`, `LoaiThe`, `MenhGia`, `Request_Id`) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$result = $this->db->query($sql, array($manguoidung,"NapThe",$mathe,$seri,$type,$amount,$request_id));
		return $result;
	}

	public function getConfig(){
		$sql = "SELECT * FROM thanhtoan WHERE MaThanhToan = ?";
		$result = $this->db->query($sql, array("NapThe"));
		return $result->result_array();
	}

	public function getSale(){
		$sql = "SELECT * FROM khuyenmai";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
}

/* End of file Model_Card.php */
/* Location: ./application/models/Model_Card.php */