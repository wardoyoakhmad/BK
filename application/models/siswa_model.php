<?php
	/**
	* 
	*/
	class Siswa_model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}

		function tampil(){
			$sql = 'SELECT nis, nama, nama_kelas, no_hp_wali FROM siswa join kelas_siswa using(id_siswa) join kelas using (id_kelas)';
			$data = $this->db->query($sql);
			$index = 1;
			foreach ($data->result() as $dataSiswa) {
				$kirimData[$index] = array(
					'nis' => $dataSiswa->nis,
					'nama' => $dataSiswa->nama,
					'kelas' => $dataSiswa->nama_kelas,
					'no_hp' => $dataSiswa->no_hp_wali
					);
				$index+=1;
			}
			return $kirimData;
		}
	}
	?>