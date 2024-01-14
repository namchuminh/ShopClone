<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$data = array();
		$this->load->model('Website/Model_Category');
		$this->load->model('Website/Model_Product');
		$this->load->model('Model_Website');
	}

	public function index()
	{
		$data['title'] = "Shop Clone mua tài nguyên mạng xã hội!";
		$data['category'] = $this->Model_Category->getAll();
		$data['sumUser'] = count($this->Model_Website->getSumUser());
		$data['sumOrderClone'] = $this->Model_Website->sumOrderClone()[0]['SoLuongBan'];
		$data['sumProduct'] = count($this->Model_Website->getSumProduct());
		$data['sumClone'] = $this->Model_Website->getSumClone();
		return $this->load->view('View_Home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */