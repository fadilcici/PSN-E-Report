<?php
class Pemasukan_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_pemasukan()
		{
	        $query = $this->db->get('pendapatan');
		}

		public function set_pemasukan()
		{
			$fileName = $_FILES['bukti_pend']['name'];
			if($fileName)
			{
				$config = array(
					'upload_path' => "./assets/dist/upload/",
					'allowed_types' => "gif|jpg|png|jpeg",
					'overwrite' => TRUE,
					'max_size' => "2048000",
					'maintain_ratio' => TRUE,
					'max_width' => '300',
                    'max_height' => '300',
				);
				
				$this->load->library('upload', $config);
				$this->upload->do_upload('bukti_pend');
				$data = array(
			    	'id_bend' => $this->session->userdata('user_id'),
			        'nama_pend' => $this->input->post('nama_pend'),
			        'tgl_pend' => $this->input->post('tgl_pend'),
			        'ket_pend' => $this->input->post('ket_pend'),
			        'jml_pend' => $this->input->post('jml_pend'),
			        'bukti_pend' => $fileName
			    );
				}		
		   

		    return $this->db->insert('pendapatan', $data);
		}
}