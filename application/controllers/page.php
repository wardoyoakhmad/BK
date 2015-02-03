<?php 

	class Page extends CI_Controller{
		 
	public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('home');
        $this->load->view('template/footer');
    }

    public function input()
    {
    	$this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('form');
        $this->load->view('template/footer');
    }

    public function rekap()
    {
        $breadcrumb = array(
            "Beranda" => "index",
            "Data" => "data",         
            "Rekap Data" => ""
        );
        $data['breadcrumb'] = $breadcrumb;

        $this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('rekap', $data);
        $this->load->view('template/footer');
    }

    public function edit()
    {
        $breadcrumb = array(
            "Beranda" => "index",
            "Data" => "data",         
            "Edit Data" => ""
        );
        $data['breadcrumb'] = $breadcrumb;

        $this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('edit', $data);
        $this->load->view('template/footer');
    }

    public function data()
    {
        $breadcrumb = array(
            "Beranda" => "index",
            "Data" => "data",         
            "Data Siswa" => ""
        );
        $data['breadcrumb'] = $breadcrumb;

        $this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('data', $data);
        $this->load->view('template/footer');
    }
}

?>