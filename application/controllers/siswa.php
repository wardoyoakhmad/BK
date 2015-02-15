<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('siswa_model','siswa');
<<<<<<< HEAD
=======
		$this->load->model('kelas_model','kelas');
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
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
<<<<<<< HEAD
        	$this->siswa->input_kelas($kelas,$nis[$j],$semester);	
=======
        	$this->kelas->input_kelas($kelas,$nis[$j],$semester);	
>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
        }
        
	}

<<<<<<< HEAD
=======
	public function tambah_semester()
	{
		$awal_semester = $this->input->post('awal_semester');
		$akhir_semester = $this->input->post('akhir_semester');
		$tahun_ajaran = $this->input->post('tahun_ajaran');
		$jenis = $this->input->post('jenis');
		$nama = $this->input->post('nama');

		if (isset($awal_semester) && isset($akhir_semester) && isset($tahun_ajaran) && isset($jenis) && isset($nama)) {
			$this->load->model('siswa_model');
			$dataSemester = array('awal_semester' =>$awal_semester ,
								'akhir_semester'=> $akhir_semester,
								'tahun_ajaran'=>$tahun_ajaran,
								'jenis'=>$jenis,
								'nama_semester'=>$nama );
			$this->kelas->tambah_semester($dataSemester);
			redirect(base_url().'page/semester');

		}
		else{
			echo "data tidak ada";
		}

	}

>>>>>>> 4eb7f4c286601333acca784b360ffd11d3e58801
}

/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */
?>