<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model','siswa');
	}

	public function input_kelas()
	{
		$kelas = $_POST['kelas'];
        $nis = $_POST['nis']; 
        $semester = $_POST['semester'];
        $i=0;
        foreach ($_POST as $banyak) {
        	$i++;
        }
        for ($j=0; $j < $i ; $j++) { 
        	$this->siswa->input_kelas($kelas,$nis[$j],$semester);	
        }
        
	}

}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */
?>