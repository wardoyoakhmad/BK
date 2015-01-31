<?php
	class Pesan extends CI_Controller{

		public function index(){
			$breadcrumb = array(
            "Beranda" => "index",
            "Pesan" => "data",         
            "Kirim Pesan" => ""
        );
        $data['breadcrumb'] = $breadcrumb;

        $this->load->model('mysms_model');
        $coba = $this->mysms_model->loadNo();
        $data['no'] = $coba;
        
        $this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('sms_page', $data);
        $this->load->view('template/footer');
		}

	} 
?>