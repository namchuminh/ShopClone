<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_Category');
		$this->load->model('Website/Model_Product');
	}

	public function index($MaChuyenMuc)
	{
		if(count($this->Model_Category->getById($MaChuyenMuc)) <= 0){
			return redirect(base_url());
		}

		$data['title'] = $this->Model_Category->getById($MaChuyenMuc)[0]['TenChuyenMuc'];
		$data['productCategory'] = $this->Model_Product->getByCategoryId($MaChuyenMuc);
		$data['categoryProduct'] = $this->Model_Category->getById($MaChuyenMuc);
		return $this->load->view('Website/Category/View_Category', $data);
	}

}

/* End of file Category.php */
/* Location: ./application/controllers/Category.php */