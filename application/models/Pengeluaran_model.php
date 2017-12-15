<?php
class Pengeluaran_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        public function get_pengeluaran($id = FALSE)
		{
			if ($id === FALSE)
	        {
	                $query = $this->db->get('pengeluaran');
	                return $query->result_array();
	        }  
		    $query = $this->db->get_where('pengeluaran', array('id_bend' =>  $id));
	        return $query->row_array();
		}

		public function set_pengeluaran()
		{

		    $data = array(
		    	'id_bend' => $this->session->userdata('user_id'),
		        'nama_peng' => $this->input->post('nama_peng'),
		        'tgl_peng' => $this->input->post('tgl_peng'),
		        'ket_peng' => $this->input->post('ket_peng'),
		        'jml_peng' => $this->input->post('jml_peng')
		    );

		    return $this->db->insert('pengeluaran', $data);
		}
}