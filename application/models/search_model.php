<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	* 
	*/
	class Search_model extends CI_model
	{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function getData()
    	{
    		$office = $this->input->post('search');

  			$this->db->select('nama');
  			$this->db->from('admin');
  			$this->db->like('nama', $office);
  			$query = $this->db->get();

  			$office_array = array();
  			foreach ($query->result() as $row) {
   			$office_array[] = $row->nama;
  			}
 			$data = $office_array;

  			return $data;
    	}
	}

?>