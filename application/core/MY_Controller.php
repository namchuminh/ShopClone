<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $data = array();

    public function __construct() {
        parent::__construct();

        if(!$this->session->has_userdata('login')){
            return redirect(base_url('dang-nhap/'));
        }

        $this->load->model('Website/Model_Login');
        if($this->Model_Login->checkAccountBlock($this->session->userdata('user')) >= 1){
            $userdata = array('id', 'username', 'excess', 'login', 'phone', 'email', 'jointime');
            $this->session->unset_userdata($userdata);
            $this->session->set_flashdata('error', 'Bạn đã bị chặn khỏi hệ thống!');
            return redirect(base_url('dang-nhap/'));
        }

        $this->load->model('Website/Model_Category');
        $this->load->model('Website/Model_Product');
        $this->load->model('Model_Website');
        $this->load->model('Website/Model_Order');

        $this->data['product'] = $this->Model_Product->getAll();
        $this->data['category'] = $this->Model_Category->getAll();
        $this->data['config'] = $this->Model_Website->getAllConfig();
        $this->data['history'] = $this->Model_Order->getHistory();
        $this->load->vars($this->data);
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */