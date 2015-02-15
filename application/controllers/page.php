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
<<<<<<< HEAD
=======
        $breadcrumb = array(
                "Beranda" => "index",
                "Data" => "rekap",
                "Rekap Data" => ""
                );
        $data['breadcrumb'] = $breadcrumb;
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
        $this->load->view('template/header');
        $this->load->view('template/panel');
        $this->load->view('rekap');
        $this->load->view('template/footer');
    }

    public function import()
    {
        $akun = $this->session->userdata('akun');
        if ($akun['login'] == FALSE) {
            redirect(base_url().'page/index');
        }
        else {
<<<<<<< HEAD
            $this->load->model('siswa_model', 'siswa');
            $data['data'] = $this->siswa->tampil();
            $breadcrumb = array(
                "Beranda" => "index",
                "Import Data Siswa Baru" => ""
                );
            $data['breadcrumb'] = $breadcrumb;
            $this->load->view('template/header');
            $this->load->view('template/panel');
            $this->load->view('import',$data);
            $this->load->view('template/footer');
        }
    }

    public function edit()
    {
        $akun = $this->session->userdata('akun');
        if ($akun['login'] == FALSE) {
            redirect(base_url().'page/index');
        }
        else {
=======
            $breadcrumb = array(
                "Beranda" => "index",
                "Data" => "edit",
                "Input Data Siswa" => ""
                );
            $data['breadcrumb'] = $breadcrumb;
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
            $this->load->model('siswa_model', 'siswa');
            $data['siswa'] = $this->siswa->tampilSiswa();
            $this->load->model('kelas_model','kelas');
            $data['kelas'] = $this->kelas->tampil();
            $data['semester'] = $this->kelas->tampilSemester();
            $this->load->view('template/header');
            $this->load->view('template/panel');
            $this->load->view('edit', $data);
            $this->load->view('template/footer');
        }
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
<<<<<<< HEAD
                "Rekap Data" => ""
=======
                "Data Siswa" => ""
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
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
<<<<<<< HEAD
=======
    }

    public function absen()
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
                 "Data" => "absen",
                "Absensi" => "absen"
                );
            $this->load->view('template/header');
            $this->load->view('template/panel');
            $this->load->view('absen',$data);
            $this->load->view('template/footer');
        }
    }

    public function semester()
    {
        $akun = $this->session->userdata('akun');
        if ($akun['login'] == FALSE) {
            redirect(base_url().'page/index');
        }
        else {
            $breadcrumb = array(
                "Beranda" => "index",
                "Data" => "semester",         
                "Tambah Semester" => ""
                );
            $data['breadcrumb'] = $breadcrumb;
            $this->load->model('kelas_model','kelas');
            $data['semester'] = $this->kelas->tampilSemester();
            $this->load->view('template/header');
            $this->load->view('template/panel');
            $this->load->view('tambah_semester',$data);
            $this->load->view('template/footer');
        }
    }

    public function import()
    {
        $akun = $this->session->userdata('akun');
        if ($akun['login'] == FALSE) {
            redirect(base_url().'page/index');
        }
        else {
            $this->load->model('kelas_model', 'kelas');
            $data['data'] = $this->kelas->tampil();
            $breadcrumb = array(
                "Beranda" => "index",
                "Data" => "import",
                "Import Data Siswa" => ""
                );
            $data['breadcrumb'] = $breadcrumb;
            $this->load->view('template/header');
            $this->load->view('template/panel');
            $this->load->view('import',$data);
            $this->load->view('template/footer');
        }
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
    }
}

?>