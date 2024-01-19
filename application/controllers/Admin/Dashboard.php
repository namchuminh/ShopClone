<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$this->load->model('Model_Website');
	}

	public function index()
	{
		$data['title'] = "Trang quản trị viên";
		$data['sumUser'] = count($this->Model_Website->getSumUser());
		$data['sumOrderClone'] = $this->Model_Website->sumOrderClone()[0]['SoLuongBan'];
		$data['sumProduct'] = count($this->Model_Website->getSumProduct());
		$data['sumClone'] = $this->Model_Website->getSumClone();
		$data['doanhThuThang'] = $this->Model_Website->getDoanhThuThang();
		$data['doanhThuTuan'] = $this->Model_Website->getDoanhThuTuan();
		$data['doanhThuNgay'] = $this->Model_Website->getDoanhThuNgay();
		$data['banTrongThang'] = $this->Model_Website->getBanTrongThang();
		$data['banTrongTuan'] = $this->Model_Website->getBanTrongTuan();
		$data['banTrongNgay'] = $this->Model_Website->getBanTrongNgay();
		$data['dangKyThang'] = $this->Model_Website->getDangKyThang();
		$data['dangKyTuan'] = $this->Model_Website->getDangKyTuan();
		$data['dangKyNgay'] = $this->Model_Website->getDangKyNgay();
		$data['dongTien'] = $this->Model_Website->getDongTien();
		return $this->load->view('Admin/Dashboard/View_Dashboard', $data);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */