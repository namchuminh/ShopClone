<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Thông tin liên hệ";
		return $this->load->view('Website/Contact/View_Contact', $data);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */