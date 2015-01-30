<?php 

	class Login extends CI_Controller{
		 
    public function masuk()
    {
        $username = $_POST['email'];
        $pass = $_POST['pass'];
        $this->load->model('login_model','login');
        if ($this->login->login($username,$pass) == TRUE) {
            redirect(base_url().'page/index2');
        }
        else {
            redirect(base_url().'page/index');
        }
    }

    public function logout(){
    	$this->session->unset_userdata(array('username'=>'','login'=>FALSE));
    	$this->session->sess_destroy();
    	redirect(base_url().'page/index');
    }

}

?>