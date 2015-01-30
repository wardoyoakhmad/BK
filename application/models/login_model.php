<?php
	class Login_model extends CI_Model{

		function login($username, $password){
			$sql = 'SELECT * FROM user where username="'.$username.'" AND password="'.$password.'";';
			$hasil = $this->db->query($sql);
			if ($hasil->num_rows() == 1) {
				$data = array('username'=>$username, 'login'=>TRUE);
				$this->session->set_userdata('akun',$data);
				return TRUE;
			}
			else{
				echo "username password salah";
				return FALSE;
			}
		}
	}
?>