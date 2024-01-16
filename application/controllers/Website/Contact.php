<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Liên hệ với chúng tôi";
		return $this->load->view('Website/Contact/View_Contact', $data);
	}

}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */