<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller {

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
       $this->load->model('pemasukan_model');
    }
	public function index()
	{
		$data['id'] = $this->session->userdata('user_id');
		$data['pend'] = $this->pemasukan_model->get_pemasukan();
		$data = array();
		$data['main_content'] = 'pemasukan';
		
		$this->load->view('includes/template', $data);
	}
	public function tambah()
	{

		$data = array();
		$data['main_content'] = 'pemasukan';

		 $this->form_validation->set_rules('nama_pend', 'Nama_pend', 'required');
         $this->form_validation->set_rules('tgl_pend', 'Tgl_pend', 'required');
         $this->form_validation->set_rules('jml_pend', 'Jml_pend', 'required');

         if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('includes/template', $data);
            }

        else
            {
                $this->pemasukan_model->set_pemasukan();
             	$this->load->view('success');   
            }
	}
	public function get_report(){
	    $this->load->model('pemasukan_model');
	    $this->load->dbutil();
	    $this->load->helper('file');
	    $this->load->helper('download');
	    /* get the object   */
	    $report = $this->pemasukan_model->get_pemasukan();
	    /*  pass it to db utility function  */
	    $new_report = $this->dbutil->csv_from_result($report);
	    /*  Now use it to write file. write_file helper function will do it */
	    $name = 'csv_file.csv';
	    //write_file($name,$new_report);
	    /*  Done    */
	    force_download($name, $new_report);
	}
};

