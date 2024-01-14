<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Policy extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Chính sách dịch vụ";
		return $this->load->view('Website/Policy/View_Policy', $data);
	}

}

/* End of file Policy.php */
/* Location: ./application/controllers/Policy.php */