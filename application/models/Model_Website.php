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

}

/* End of file Model_Website.php */
/* Location: ./application/models/Model_Website.php */