<?php
	class Mysms_model extends CI_Model{
		
		public function loadNo(){
			$index = 1;
			$query = $this->db->query("SELECT no_hp_wali FROM siswa");
			foreach ($query->result() as $row) {
				$data[$index] = array('no'=>$row->no_hp_wali);
				$index++;
			}
			
			return $data;
		}

	}
?>