<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('admin')){
			$this->session->sess_destroy();
			return redirect(base_url('admin/dang-nhap/'));
		}
		$this->load->model('Admin/Model_Order');
	}

	public function index()
	{
		$data['title'] = "Quản lý đơn đặt hàng của người dùng";
		$data['list'] = $this->Model_Order->getAll();
		return $this->load->view('Admin/Order/View_Order', $data);
	}

	public function view($MaGiaoDich){
		if(count($this->Model_Order->getById($MaGiaoDich)) < 1){
			return redirect(base_url('admin/don-hang/'));
		}

		$data['title'] = "Xem đơn hàng của người dùng";
		$data['detail'] = $this->Model_Order->getById($MaGiaoDich);
		return $this->load->view('Admin/Order/View_ViewOrder', $data);
	}

	public function download($MaGiaoDich) {
	    $order = $this->Model_Order->getById($MaGiaoDich);

	    if(count($order) < 1){
	        return redirect(base_url('admin/don-hang/'));
	    }

	    $danhsachclone = $order[0]['DanhSachClone'];

	    $filename = 'ds_clone_'.$order[0]['MaGiaoDich'].'.txt';

	    header('Content-Type: text/plain');
	    header('Content-Disposition: attachment; filename="' . $filename . '"');
	    header('Content-Length: ' . strlen($danhsachclone));

	    echo $danhsachclone;
	    exit;
	}

	public function search() {
	    if ($this->input->server('REQUEST_METHOD') !== 'POST') {
			return redirect(base_url('admin/don-hang/'));
		}

		$MaGiaoDich = $this->input->post('magiaodich');

		if(empty($MaGiaoDich)){
			return redirect(base_url('admin/don-hang/'));
		}

		$data['title'] = "Quản lý đơn đặt hàng của người dùng";
		$data['list'] = $this->Model_Order->search($MaGiaoDich);
		return $this->load->view('Admin/Order/View_SearchOrder', $data);
	}

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */