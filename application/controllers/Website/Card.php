<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Card extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Website/Model_Card');
	}

	private function curl_get($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        
        curl_close($ch);
        return $data;
    }

	public function index()
	{
		$data['title'] = "Nạp tiền qua thẻ cào";
		$data['configCard'] = $this->Model_Card->getConfig();
		$data['configSale'] = $this->Model_Card->getSale();

		if ($this->input->server('REQUEST_METHOD') === 'POST') {

			if(count($this->Model_Card->getConfig()) <= 0 || empty($this->Model_Card->getConfig()[0]['Id']) || empty($this->Model_Card->getConfig()[0]['IdKey']) || ($this->Model_Card->getConfig()[0]['TrangThai'] <= 0)){
				$data['error'] = "Chức năng nạp thẻ đăng tắt!";
		    	return $this->load->view('Website/Card/View_Card', $data);
			}


			$mathe = $this->input->post('mathe');
		    $seri =  $this->input->post('seri');
		    $amount =  $this->input->post('amount');
		    $type =  $this->input->post('type');

		    if(!$mathe || !$seri){
		    	$data['error'] = "Vui lòng nhập đầy đủ thông tin!";
		    	return $this->load->view('Website/Card/View_Card', $data);
		    }

		    $code = rand(11111111,99999999999);
		    $id = $this->Model_Card->getConfig()[0]['Id'];
		    $key = $this->Model_Card->getConfig()[0]['IdKey'];
		    $url = 'https://thecaosieure.vn/chargingws/v2?sign='.md5($key.$mathe.$seri).'&telco='.$type.'&code='.$mathe.'&serial='.$seri.'&amount='.$amount.'&request_id='.$code.'&partner_id='.$id.'&command=charging';
		    $xuly = json_decode($this->curl_get($url), true);

		    if($xuly['status'] == 99 || $xuly['status'] == 1){
		    	$manguoidung = $this->session->userdata('id');
		    	$this->Model_Card->insert($manguoidung,$mathe,$seri,$type,$amount,$code);
		       	$data['success'] = $xuly['message'];
		    	return $this->load->view('Website/Card/View_Card', $data); 
		    }else{
		        $data['error'] = $xuly['message'];
		    	return $this->load->view('Website/Card/View_Card', $data); 
		    }
		}

		return $this->load->view('Website/Card/View_Card', $data);
	}

}

/* End of file Card.php */
/* Location: ./application/controllers/Card.php */