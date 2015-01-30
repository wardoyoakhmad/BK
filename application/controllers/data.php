<?php

class Data extends CI_Controller{

public function siswa()
{
        $query = trim($this->input->get('term', TRUE)); //get term parameter sent via text field. Not sure how secure get() is

        $this->db->select('no, nama'); 
        $this->db->from('admin');
        $this->db->like('nama', $query);
        $this->db->limit('5');
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data['response'] = 'true'; //If username exists set true
            $data['message'] = array(); 

            foreach ($query->result() as $row)
            {
                $data['message'] = array( 
                    'label' => $row->nama,
                    'value' => $row->nama,
                    'user_id'  => $row->no
                );
            }    
        } 
        else
        {
            $data['response'] = 'false'; //Set false if user not valid
        }

        echo json_encode($data);
} 
}
?>