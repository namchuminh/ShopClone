<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_Order');
		$this->load->model('Website/Model_Category');
		$this->load->model('Website/Model_Product');
	}

	public function index()
	{
		$data['title'] = "Danh sách đơn mua";
		$data['list'] = $this->Model_Order->getByIdUser($this->session->userdata('id'));
		return $this->load->view('Website/Order/View_Order.php', $data);
	}

	public function detail($MaGiaoDich){

		if(count($this->Model_Order->getByCodePay($MaGiaoDich, $this->session->userdata('id'))) <= 0){
			return redirect(base_url('don-mua/'));
		}

		$data['title'] = "Xem danh sách tài khoản đã mua!";
		$data['detail'] = $this->Model_Order->getByCodePay($MaGiaoDich, $this->session->userdata('id'));
		return $this->load->view('Website/Order/View_DetailOrder.php', $data);
	}

	public function realtime(){
		if(count($this->Model_Order->getHistory()) <= 0){
			echo FALSE;
		}else{
			$data = $this->Model_Order->getHistory();
			echo json_encode($data[0]);
		}
	}
}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */