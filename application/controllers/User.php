<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
       parent::__construct();
       $this->load->model('user_model');
    }
	public function index()
	{
		$data['id'] = $this->session->userdata('user_id');
		$data['pend'] = $this->user_model->get_user();
		$data = array();
		$data['main_content'] = 'user';
		
		$this->load->view('includes/template', $data);
	}
	public function tambah()
	{
		$data = array();
		$data['main_content'] = 'user';

		 $this->form_validation->set_rules('user_login', 'User_login', 'required');
         $this->form_validation->set_rules('user_name', 'User_name', 'required');
         $this->form_validation->set_rules('user_pass', 'User_pass', 'required');

         if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('includes/template', $data);
            }

        else
            {
                $this->user_model->set_user();
                $this->load->view('success');
            }
	}

}
