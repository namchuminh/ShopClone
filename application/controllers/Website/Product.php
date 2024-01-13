<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_Product');
		$this->load->model('Website/Model_Category');
		$this->load->model('Website/Model_Profile');
		$this->load->model('Website/Model_Order');
	}

	public function index($MaSanPham)
	{
		if(count($this->Model_Product->getById($MaSanPham)) <= 0){
			return redirect(base_url());
		}

		$data['title'] = $this->Model_Product->getById($MaSanPham)[0]['TenSanPham'];
		$data['detail'] = $this->Model_Product->getById($MaSanPham);
		$data['number'] = $this->Model_Product->getNumberProduct($MaSanPham);
		return $this->load->view('Website/Product/View_Product', $data);
	}

	public function pay($MaSanPham){
		if(count($this->Model_Product->getById($MaSanPham)) <= 0){
			return redirect(base_url());
		}

		if($this->Model_Product->getNumberProduct($MaSanPham) < $this->Model_Product->getById($MaSanPham)[0]['MuaToiThieu']){
			$this->session->set_flashdata('error', 'Sản phẩm đã hết hàng!');
			return redirect(base_url('san-pham/'.$MaSanPham.'/'));
		}

		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$soluongmua = $this->input->post('soluongmua');
			if (!ctype_digit($soluongmua)) {
				$this->session->set_flashdata('error', 'Vui lòng nhập số lượng mua là 1 số!');
				return redirect(base_url('san-pham/'.$MaSanPham.'/'));
			}

			if ($soluongmua <= 0) {
				$this->session->set_flashdata('error', 'Vui lòng nhập số lượng mua lớn hơn 0!');
				return redirect(base_url('san-pham/'.$MaSanPham.'/'));
			}

			if($soluongmua > $this->Model_Product->getNumberProduct($MaSanPham)){
				$this->session->set_flashdata('error', 'Vui lòng nhập số lượng mua nhỏ hơn '.$this->Model_Product->getNumberProduct($MaSanPham) .' tài khoản!');
				return redirect(base_url('san-pham/'.$MaSanPham.'/'));
			}

			if(count($this->Model_Profile->getExcess($this->session->userdata('id'))) <= 0){
				$this->session->set_flashdata('error', 'Số dư không đủ để thực hiện!');
				return redirect(base_url('san-pham/'.$MaSanPham.'/'));
			}

			if($this->Model_Profile->getExcess($this->session->userdata('id'))[0]['SoDuKhaDung'] < ($soluongmua * $this->Model_Product->getById($MaSanPham)[0]['GiaBan'])){
				$this->session->set_flashdata('error', 'Số dư không đủ để thực hiện!');
				return redirect(base_url('san-pham/'.$MaSanPham.'/'));
			}

			$danhsach = $this->Model_Product->getAllCloneById($MaSanPham)[0]['DanhSachTaiKhoan'];
			$mangdanhsach = explode("\n", $danhsach);

			// Lấy các phần tử từ cuối mảng đến đầu mảng
			$mangdanhsachmua = array_reverse(array_slice($mangdanhsach, -$soluongmua));
			$danhsachmua = "";

			for($i = 0; $i < count($mangdanhsachmua); $i++){
				$danhsach = str_replace(trim($mangdanhsachmua[$i]),"\n",$danhsach);
				$danhsachmua = $danhsachmua. trim($mangdanhsachmua[$i])."\n";
			}

			$tensanpham = $this->Model_Product->getById($MaSanPham)[0]['TenSanPham'];
			$manguoidung = $this->session->userdata('id');
			$machuyenmuc = $this->Model_Product->getById($MaSanPham)[0]['MaChuyenMuc'];
			$magiaodich = strtoupper(substr(bin2hex(random_bytes(ceil(14 / 2))), 0, 14));
			$thanhtoan = $soluongmua * $this->Model_Product->getById($MaSanPham)[0]['GiaBan'];
			$hanhdong = "Đã mua ".$soluongmua." ".$tensanpham."!";
			$daban = $this->Model_Product->getById($MaSanPham)[0]['DaBan'];
			$dabanmoi = $daban + $soluongmua;
			

			$sodukhadung = $this->Model_Profile->getExcess($manguoidung)[0]['SoDuKhaDung'];
			$dasudung = $this->Model_Profile->getExcess($manguoidung)[0]['DaSuDung'];
			$sodukhadungmoi = $sodukhadung - $thanhtoan;
			$dasudungmoi = $dasudung + $thanhtoan;

			$this->Model_Product->importClone(trim($danhsach), $MaSanPham);
			$this->Model_Product->update($dabanmoi, $MaSanPham);
			$this->Model_Order->insert($magiaodich,$danhsachmua,$manguoidung,$MaSanPham,$soluongmua,$thanhtoan,$machuyenmuc);
			$this->Model_Order->insertHistory($manguoidung,$MaSanPham,$hanhdong);
			$this->Model_Profile->updateWallet($sodukhadungmoi,$dasudungmoi,$manguoidung);

			$newdata = array(
		        'excess' => $sodukhadungmoi,
		        'used' => $dasudungmoi
			);

			$this->session->set_userdata($newdata);

			$this->session->set_flashdata('success', 'Bạn đã mua thành công '.$soluongmua.' '.$tensanpham.'! Vui lòng kiểm tra trong danh sách đã mua!');
			return redirect(base_url('san-pham/'.$MaSanPham.'/'));
		}else{
			return redirect(base_url('san-pham/'.$MaSanPham.'/'));
		}

	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */