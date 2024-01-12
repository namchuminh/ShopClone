<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$data = array();
		$this->load->model('Website/Model_Category');
		$this->load->model('Website/Model_Product');
	}

	public function index()
	{
		$data['title'] = "Shop Clone mua tài nguyên mạng xã hội!";
		$data['category'] = $this->Model_Category->getAll();
		return $this->load->view('View_Home', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */