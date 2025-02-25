<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('admin')){
			$this->session->sess_destroy();
			return redirect(base_url('admin/dang-nhap/'));
		}
		$data = array();
		$this->load->model('Admin/Model_Bank');
	}

	public function index()
	{
		$data['title'] = "Cấu hình thông tin thanh toán qua ví VNPAY";
		$data['detail'] = $this->Model_Bank->getById();
		$data['bank'] = $this->Model_Bank->getBank();


		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$id = $this->input->post('id');
			$key = $this->input->post('key');
			$luuy = $this->input->post('luuy');
			$trangthai = $this->input->post('trangthai');

			if(empty($id) || empty($key) || empty($luuy)){
				$data['error'] = "Vui lòng nhập đẩy đủ thông tin cấu hình!";
				return $this->load->view('Admin/Bank/View_Bank', $data);
			}

			if($trangthai != 0 && $trangthai != 1){
				$data['error'] = "Vui lòng chọn BẬT / TẮT nạp thẻ!";
				return $this->load->view('Admin/Bank/View_Bank', $data);
			}

			if(count($this->Model_Bank->getById()) < 1){
				$this->Model_Bank->insert($id, $key,$luuy,$trangthai);
			}else{
				$this->Model_Bank->update($id, $key,$luuy,$trangthai);
			}

			$data['success'] = "Cập nhật thông tin cấu hình thanh toán qua ví VNPAY thành công!";
			$data['detail'] = $this->Model_Bank->getById();
			return $this->load->view('Admin/Bank/View_Bank', $data);
		}



		return $this->load->view('Admin/Bank/View_Bank', $data, FALSE);
	}

}

/* End of file Bank.php */
/* Location: ./application/controllers/Bank.php */