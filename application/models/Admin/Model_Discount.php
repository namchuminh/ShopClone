<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Discount extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll(){
		$sql = "SELECT * FROM khuyenmai ORDER BY MaKhuyenMai DESC";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function checkNumber()
	{
		$sql = "SELECT * FROM khuyenmai";
		$result = $this->db->query($sql);
		return $result->num_rows();
	}

	public function getById($MaKhuyenMai){
		$sql = "SELECT * FROM khuyenmai WHERE MaKhuyenMai";
		$result = $this->db->query($sql, array($MaKhuyenMai));
		return $result->result_array();
	}

	public function add($naptoithieu,$phantram){
		$sql = "INSERT INTO `khuyenmai`(`NapToiThieu`, `PhanTramKhuyenMai`) VALUES (?,?)";
		$result = $this->db->query($sql,array($naptoithieu,$phantram));
		return $result;
	}

	public function updateById($naptoithieu,$phantram,$MaKhuyenMai){
		$sql = "UPDATE `khuyenmai` SET `NapToiThieu`=?,`PhanTramKhuyenMai`=? WHERE `MaKhuyenMai`=?";
		$result = $this->db->query($sql,array($naptoithieu,$phantram,$MaKhuyenMai));
		return $result;
	}

	public function delete($MaKhuyenMai){
		$sql = "DELETE FROM `khuyenmai` WHERE `MaKhuyenMai`= ?";
		$result = $this->db->query($sql,array($MaKhuyenMai));
		return $result;
	}
}

/* End of file Model_Discount.php */
/* Location: ./application/models/Model_Discount.php */