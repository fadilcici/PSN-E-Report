<?php
class User_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_user()
		{

	                $query = $this->db->get('cp_user');
	                return $query->result_array();
		}

		public function set_user()
		{

		    $data = array(
		    	'user_login' => $this->input->post('user_login'),
		        'user_name' => $this->input->post('user_name'),
		        'user_email' => $this->input->post('user_email'),
		        'user_group' => 9,
		        'user_pass' => md5($this->input->post('user_pass'))

		    );

		    return $this->db->insert('cp_user', $data);
		}
}