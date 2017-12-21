<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

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
       $this->load->model('pengeluaran_model');
    }
	public function index()
	{
		$data = array();
		$data['main_content'] = 'pengeluaran';
		$data['peng'] = $this->pengeluaran_model->get_pengeluaran();
		$data['id'] = $this->session->userdata('user_id');
		$this->load->view('includes/template', $data);
	}

	public function hapus()
	{
		$this->pengeluaran_model->hapus($data);
		redirect($route['default_controller'] = 'Pengeluaran', 'refresh');
	}

	public function tambah()
	{
		$data = array();
		$data['main_content'] = 'pengeluaran';

		 $this->form_validation->set_rules('nama_peng', 'Nama_peng', 'required');
         $this->form_validation->set_rules('tgl_peng', 'Tgl_peng', 'required');
         $this->form_validation->set_rules('jml_peng', 'Jml_peng', 'required');

         if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('includes/template', $data);
            }

        else
            {
                $this->pengeluaran_model->set_pengeluaran();
                redirect($route['default_controller'] = 'Pengeluaran', 'refresh');
            }
	}
}
