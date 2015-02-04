<?php

	class Search extends CI_Controller{

		public function cari()
		{
			$this->load->helper('url');
			
			$this->load->model('search_model');
  			$this->search_model->getData();

  			$data = $this->search_model->getData();

  			echo json_encode($data);
		}
		

	}

?>