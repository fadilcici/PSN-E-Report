<?php
class Pemasukan_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_pemasukan($id = FALSE)
		{
			if ($id === FALSE)
	        {
	                $query = $this->db->get('pendapatan');
	                return $query->result_array();
	        }  
		    $query = $this->db->get_where('pendapatan', array('id_bend' =>  $id));
	        return $query->row_array();
		}

		public function set_pemasukan()
		{

		    $data = array(
		    	'id_bend' => $this->session->userdata('user_id'),
		        'nama_pend' => $this->input->post('nama_pend'),
		        'tgl_pend' => $this->input->post('tgl_pend'),
		        'ket_pend' => $this->input->post('ket_pend'),
		        'jml_pend' => $this->input->post('jml_pend')
		    );

		    return $this->db->insert('pendapatan', $data);
		}
}