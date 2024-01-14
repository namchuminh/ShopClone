<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Setting extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll(){
		$sql = "SELECT * FROM caidat";
		$result = $this->db->query($sql);
		return $result->result_array();
	}

	public function insert($tenwebsite,$motawebsite,$tukhoa,$logowebsite,$faviconwebsite,$taikhoangmail,$matkhaugmail,$sodienthoai,$email,$facebook,$zalo,$huongdan,$chinhsach){
		$sql = "INSERT INTO caidat (tenwebsite,motawebsite,tukhoa,logowebsite,faviconwebsite,taikhoangmail,matkhaugmail,sodienthoai,email,facebook,zalo,huongdan,chinhsach) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
		$result = $this->db->query($sql, array($tenwebsite,$motawebsite,$tukhoa,$logowebsite,$faviconwebsite,$taikhoangmail,$matkhaugmail,$sodienthoai,$email,$facebook,$zalo,$huongdan,$chinhsach));
		return $result;
	}

	public function update($tenwebsite,$motawebsite,$tukhoa,$logowebsite,$faviconwebsite,$taikhoangmail,$matkhaugmail,$sodienthoai,$email,$facebook,$zalo,$huongdan,$chinhsach){
		$sql = "UPDATE caidat SET tenwebsite = ?, motawebsite = ?, tukhoa = ?, logowebsite = ?, faviconwebsite = ?, taikhoangmail = ?, matkhaugmail = ?, sodienthoai = ?, email = ?, facebook = ?, zalo = ?, huongdan = ?, chinhsach = ?";
		$result = $this->db->query($sql, array($tenwebsite,$motawebsite,$tukhoa,$logowebsite,$faviconwebsite,$taikhoangmail,$matkhaugmail,$sodienthoai,$email,$facebook,$zalo,$huongdan,$chinhsach));
		return $result;
	}

}

/* End of file Model_Setting.php */
/* Location: ./application/models/Model_Setting.php */