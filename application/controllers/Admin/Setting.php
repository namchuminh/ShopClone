<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('username')){
			return redirect(base_url('admin/dang-nhap/'));
		}
		$this->load->model('Admin/Model_Setting');
	}

	public function index()
	{
		$data['title'] = "Cài đặt hệ thống";
		$data['detail'] = $this->Model_Setting->getAll();

		if ($this->input->server('REQUEST_METHOD') === 'POST') {

			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$this->load->library('upload', $config);
			
			if(count($this->Model_Setting->getAll()) < 1){
				$tenwebsite = $this->input->post('tenwebsite');
				$motawebsite = $this->input->post('motawebsite');
				$tukhoa = $this->input->post('tukhoa');
				$logowebsite = ""; 
				$faviconwebsite = "";
				$taikhoangmail = $this->input->post('taikhoangmail');
				$matkhaugmail = str_replace(' ', '', $this->input->post('matkhaugmail'));
				$sodienthoai = $this->input->post('sodienthoai');
				$email = $this->input->post('email');
				$facebook = $this->input->post('facebook');
				$zalo = $this->input->post('zalo');

				if(empty($tenwebsite) || empty($motawebsite) || empty($tukhoa) || empty($taikhoangmail) || empty($matkhaugmail) || empty($sodienthoai) || empty($email) || empty($facebook) || empty($zalo)){
					$data['error'] = "Vui lòng nhập đủ thông tin cài đặt!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				if (!preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $taikhoangmail)) {
				    $data['error'] = "Vui lòng nhập tài khoản Gmail hợp lệ để cấu hình gửi mail!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				if ($this->upload->do_upload('logowebsite')){
					$img = $this->upload->data();
					$logowebsite = base_url('uploads')."/".$img['file_name'];
				}

				if ($this->upload->do_upload('faviconwebsite')){
					$img = $this->upload->data();
					$faviconwebsite = base_url('uploads')."/".$img['file_name'];
				}

				if(empty($logowebsite)){
					$data['error'] = "Vui lòng chọn Logo cho Website!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				if(empty($faviconwebsite)){
					$data['error'] = "Vui lòng chọn Favicon cho Website!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				if (!(strlen(preg_replace('/[^0-9]/', '', $sodienthoai)) === 10)) {
					$data['error'] = "Vui lòng nhập số điện thoại liên hệ hợp lệ!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				    $data['error'] = "Vui lòng nhập Email liên hệ hợp lệ!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				$this->Model_Setting->insert($tenwebsite,$motawebsite,$tukhoa,$logowebsite,$faviconwebsite,$taikhoangmail,$matkhaugmail,$sodienthoai,$email,$facebook,$zalo);

				$data['detail'] = $this->Model_Setting->getAll();
				$data['success'] = "Lưu thông tin cài đặt thành công!";
				return $this->load->view('Admin/Setting/View_Setting', $data);

			}else{
				$tenwebsite = $this->input->post('tenwebsite');
				$motawebsite = $this->input->post('motawebsite');
				$tukhoa = $this->input->post('tukhoa');
				$logowebsite = $this->Model_Setting->getAll()[0]['LogoWebsite']; 
				$faviconwebsite = $this->Model_Setting->getAll()[0]['FaviconWebsite']; ;
				$taikhoangmail = $this->input->post('taikhoangmail');
				$matkhaugmail = str_replace(' ', '', $this->input->post('matkhaugmail'));
				$sodienthoai = $this->input->post('sodienthoai');
				$email = $this->input->post('email');
				$facebook = $this->input->post('facebook');
				$zalo = $this->input->post('zalo');

				if(empty($tenwebsite) || empty($motawebsite) || empty($tukhoa) || empty($taikhoangmail) || empty($matkhaugmail) || empty($sodienthoai) || empty($email) || empty($facebook) || empty($zalo)){
					$data['error'] = "Vui lòng nhập đủ thông tin cài đặt!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				if (!preg_match('/^[a-zA-Z0-9._%+-]+@gmail\.com$/', $taikhoangmail)) {
				    $data['error'] = "Vui lòng nhập tài khoản Gmail hợp lệ để cấu hình gửi mail!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				if ($this->upload->do_upload('logowebsite')){
					$img = $this->upload->data();
					$logowebsite = base_url('uploads')."/".$img['file_name'];
				}

				if ($this->upload->do_upload('faviconwebsite')){
					$img = $this->upload->data();
					$faviconwebsite = base_url('uploads')."/".$img['file_name'];
				}

				if (!(strlen(preg_replace('/[^0-9]/', '', $sodienthoai)) === 10)) {
					$data['error'] = "Vui lòng nhập số điện thoại liên hệ hợp lệ!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				    $data['error'] = "Vui lòng nhập Email liên hệ hợp lệ!";
					return $this->load->view('Admin/Setting/View_Setting', $data);
				}

				$this->Model_Setting->update($tenwebsite,$motawebsite,$tukhoa,$logowebsite,$faviconwebsite,$taikhoangmail,$matkhaugmail,$sodienthoai,$email,$facebook,$zalo);

				$data['detail'] = $this->Model_Setting->getAll();
				$data['success'] = "Lưu thông tin cài đặt thành công!";
				return $this->load->view('Admin/Setting/View_Setting', $data);
			}

		}
		return $this->load->view('Admin/Setting/View_Setting', $data);
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */