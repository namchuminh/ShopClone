<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Card extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$data = array();
		$this->load->model('Admin/Model_Card');
	}

	public function index()
	{
		$data['title'] = "Cấu hình thông tin nạp thẻ";
		$data['detail'] = $this->Model_Card->getById();
		$data['card'] = $this->Model_Card->getCard();


		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$id = $this->input->post('id');
			$key = $this->input->post('key');
			$luuy = $this->input->post('luuy');
			$trangthai = $this->input->post('trangthai');

			if(empty($id) || empty($key) || empty($luuy)){
				$data['error'] = "Vui lòng nhập đẩy đủ thông tin cấu hình!";
				return $this->load->view('Admin/Card/View_Card', $data);
			}

			if($trangthai != 0 && $trangthai != 1){
				$data['error'] = "Vui lòng chọn BẬT / TẮT nạp thẻ!";
				return $this->load->view('Admin/Card/View_Card', $data);
			}

			if(count($this->Model_Card->getById()) < 1){
				$this->Model_Card->insert($id, $key,$luuy,$trangthai);
			}else{
				$this->Model_Card->update($id, $key,$luuy,$trangthai);
			}

			$data['success'] = "Cập nhật thông tin cấu hình nạp thẻ thành công!";
			$data['detail'] = $this->Model_Card->getById();
			return $this->load->view('Admin/Card/View_Card', $data);
		}



		return $this->load->view('Admin/Card/View_Card', $data, FALSE);
	}

}

/* End of file Card.php */
/* Location: ./application/controllers/Card.php */