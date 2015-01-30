<?php 

class Page extends CI_Controller{

	public function index2()
    {
        $akun = $this->session->userdata('akun');
        if ($akun['login'] == FALSE) {
            redirect(base_url().'page/index');
        }
        else {
            $this->load->view('template/header');
            $this->load->view('template/panel');
            $this->load->view('home');
            $this->load->view('template/footer');
        }
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
        $this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('rekap');
        $this->load->view('template/footer');
    }

    public function edit()
    {
        $this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('edit');
        $this->load->view('template/footer');
    }

    public function data()
    {
        $akun = $this->session->userdata('akun');
        if ($akun['login'] == FALSE) {
            redirect(base_url().'page/index');
        }
        else {
            $this->load->model('siswa_model', 'siswa');
            $data['data'] = $this->siswa->tampil();
            $breadcrumb = array(
                "Beranda" => "index",
                "Data" => "data",         
                "Rekap Data" => ""
                );
            $data['breadcrumb'] = $breadcrumb;
            $this->load->view('template/header');
            $this->load->view('template/panel');
            $this->load->view('data', $data);
            $this->load->view('template/footer');
        }
    }

    //aziz edit
    public function index()
    {
        $akun = $this->session->userdata('akun');
        if ($akun['login'] == TRUE) {
            redirect(base_url().'page/index2');
        }
        else{
            $this->load->view('login');
        }
    }
}

?>