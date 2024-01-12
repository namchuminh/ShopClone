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

}

/* End of file Model_Profile.php */
/* Location: ./application/models/Model_Profile.php */