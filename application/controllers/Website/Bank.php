<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_Card');
		$this->load->model('Website/Model_Bank');
		$this->load->model('Website/Model_Profile');
	}

	public function index()
	{
		$data['title'] = "Nạp tiền qua ngân hàng";
		$data['configBank'] = $this->Model_Bank->getConfig();
		$data['configSale'] = $this->Model_Card->getSale();
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			if(count($this->Model_Bank->getConfig()) <= 0 || empty($this->Model_Bank->getConfig()[0]['Id']) || empty($this->Model_Bank->getConfig()[0]['IdKey']) || ($this->Model_Bank->getConfig()[0]['TrangThai'] <= 0)){
				$data['error'] = "Chức năng nạp qua ngân hàng đăng tắt!";
		    	return $this->load->view('Website/Bank/View_Bank', $data);
			}

			$amount = $this->input->post('amount');
			$bank_code = $this->input->post('bank_code');
			$noidung = $this->input->post('content');

			if(empty($amount) || empty($bank_code) || empty($noidung)){
				$data['error'] = "Vui lòng nhập đủ thông tin thanh toán!";
				return $this->load->view('Website/Bank/View_Bank', $data);
			}

			if (!ctype_digit($amount)) {
				$data['error'] = "Vui lòng nhập số tiền nạp là số!";
				return $this->load->view('Website/Bank/View_Bank', $data);
			}

			if ($amount < 10000) {
				$data['error'] = "Số tiền nạp tối thiều từ 10.000 VND trở lên!";
				return $this->load->view('Website/Bank/View_Bank', $data);
			}

			$bankOptions = [ "NCB", "AGRIBANK", "SCB", "SACOMBANK", "EXIMBANK", "MSBANK", "NAMABANK", "VNMART", "VIETINBANK", "VIETCOMBANK", "HDBANK", "DONGABANK", "TPBANK", "OJB", "BIDV", "TECHCOMBANK", "VPBANK", "MBBANK", "ACB", "OCB", "IVB", "VISA" ];
			if (!in_array($bank_code, $bankOptions)){
				$data['error'] = "Vui lòng chọn lại ngân hàng thanh toán!";
				return $this->load->view('Website/Bank/View_Bank', $data);
			}

			if(strlen($noidung) > 100){
				$data['error'] = "Nội dung thanh toán không được quá 100 ký tự!";
				return $this->load->view('Website/Bank/View_Bank', $data);
			}

			$this->bankVnpay($amount,$bank_code,$noidung);
		}
		return $this->load->view('Website/Bank/View_Bank', $data);
	}

	private function bankVnpay($amount,$bank_code,$noidung){
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$vnp_TmnCode = $this->Model_Bank->getConfig()[0]['Id']; //Website ID in VNPAY System
		$vnp_HashSecret = $this->Model_Bank->getConfig()[0]['IdKey']; //Secret key
		$vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
		$vnp_Returnurl = base_url("/thanh-toan-vnpay/");
		$vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";

		$startTime = date("YmdHis");
		$expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
		$vnp_TxnRef = time(); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
		$vnp_OrderInfo = "thanh toan vnpay";
		$vnp_OrderType = "order";
		$vnp_Amount = $amount * 100;
		$vnp_Locale = 'vn';
		$vnp_BankCode = $bank_code;

		$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

		$inputData = array(
		    "vnp_Version" => "2.1.0",
		    "vnp_TmnCode" => $vnp_TmnCode,
		    "vnp_Amount" => $vnp_Amount,
		    "vnp_Command" => "pay",
		    "vnp_CreateDate" => date('YmdHis'),
		    "vnp_CurrCode" => "VND",
		    "vnp_IpAddr" => $vnp_IpAddr,
		    "vnp_Locale" => $vnp_Locale,
		    "vnp_OrderInfo" => $vnp_OrderInfo,
		    "vnp_OrderType" => $vnp_OrderType,
		    "vnp_ReturnUrl" => $vnp_Returnurl,
		    "vnp_TxnRef" => $vnp_TxnRef,
		);

		if (isset($vnp_BankCode) && $vnp_BankCode != "") {
		    $inputData['vnp_BankCode'] = $vnp_BankCode;
		}
		if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
		    $inputData['vnp_Bill_State'] = $vnp_Bill_State;
		}
		ksort($inputData);
		$query = "";
		$i = 0;
		$hashdata = "";
		foreach ($inputData as $key => $value) {
		    if ($i == 1) {
		        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
		    } else {
		        $hashdata .= urlencode($key) . "=" . urlencode($value);
		        $i = 1;
		    }
		    $query .= urlencode($key) . "=" . urlencode($value) . '&';
		}
		$vnp_Url = $vnp_Url . "?" . $query;
		$vnpSecureHash = "";
		if (isset($vnp_HashSecret)) {
		    $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
		    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
		}
		$returnData = array('code' => '00'
		    , 'message' => 'success'
		    , 'data' => $vnp_Url);

		$newdata = array(
			'dathanhtoan' => true,
			'noidung' => $noidung
		);
		$this->session->set_userdata($newdata);
		header('Location: ' . $vnp_Url);
	    die();
	}

	public function resultVnpay(){
		if(($this->input->get('vnp_ResponseCode') == 00) && ($this->session->has_userdata('dathanhtoan'))){
			$manguoidung = $this->session->userdata('id');
			$nganhang = $this->input->get('vnp_BankCode');
			$loaithe = $this->input->get('vnp_CardType');
			$noidung = $this->session->userdata('noidung');
			$amount = $this->input->get('vnp_Amount') / 100;
			if(count($this->Model_Profile->checkDiscount($amount)) >= 1){
                $khuyenmai = $amount * ($this->Model_Profile->checkDiscount($amount)[0]['PhanTramKhuyenMai'] / 100);
                $amount = $amount + round($khuyenmai);
            }

            $sodukhadung = $this->session->userdata('excess') + $amount;
            $tongnap = $this->session->userdata('total') + $amount;
            if(count($this->Model_Profile->getExcess($manguoidung)) >= 1){
                $this->Model_Profile->updateWalletPay($manguoidung,$tongnap,$sodukhadung);
            }else{
                $this->Model_Profile->insertWalletPay($manguoidung,$tongnap,$sodukhadung);
            }

            $this->Model_Profile->insertCashFlow($manguoidung,$this->session->userdata('excess'),$amount,$sodukhadung,"Khách hàng nạp ".number_format($amount). "đ vào tài khoản!");

            $this->Model_Bank->insert($manguoidung,$nganhang,$loaithe,$amount,$noidung,"Thành công");
            $newdata = array(
                'total' => $tongnap,
                'excess' => $sodukhadung,
            );
            $this->session->set_userdata($newdata);
            $this->session->set_flashdata('success', 'Hệ thống đã cộng tiền vào tài khoản của bạn!');
			$userdata = array('dathanhtoan', 'noidung');
            $this->session->unset_userdata($userdata);
            return redirect(base_url('nap-tien-bank/'));
		}else{
			$manguoidung = $this->session->userdata('id');
			$nganhang = $this->input->get('vnp_BankCode');
			$loaithe = $this->input->get('vnp_CardType');
			$noidung = $this->session->userdata('noidung');
			$amount = $this->input->get('vnp_Amount') / 1000;
			$this->Model_Bank->insert($manguoidung,$nganhang,$loaithe,$amount,$noidung,"Thất bại");
			$userdata = array('dathanhtoan', 'noidung');
            $this->session->unset_userdata($userdata);
			$this->session->set_flashdata('error', 'Thanh toán thất bại!');
			return redirect(base_url('nap-tien-bank/'));
		}
	}

}

/* End of file Bank.php */
/* Location: ./application/controllers/Bank.php */