<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			redirect('home');
		}else{
			// if(!empty($this->input->cookie('user')) && !empty($this->input->cookie('password')))
			if($this->input->cookie('user')!='' && $this->input->cookie('password')!='')
			{
				//cek cookie login dengan password dan username yang valid
				$query	= $this->db->where('user_login',$this->input->cookie('user'))
						->where('user_pass',$this->input->cookie('password'))
						->join('cp_group','cp_user.user_group = cp_group.group_id')
						->get('cp_user');
						
				if($query->num_rows() == '1'){
					$userdata = $query->row();
					//update last login
					$this->db->set('user_last_login',date('Y-m-d H:i:s'))
					->set('user_count',$userdata->user_count+1)
					->where('user_login',$user)
					->update('cp_user');
					$date_created = date_create($userdata->user_create_date);
					//jika valid set session 
					$data = array(
						'user_id' => $userdata->user_id,
						'user_login' => $userdata->user_login,
						'user_tenant' => $userdata->tenant_id,
						'user_name' => $userdata->user_name,
						'user_group' => $userdata->user_group,
						'last_login' => $userdata->user_last_login,
						'group_name' => $userdata->group_name,
						'date_created' => date_format($date_created,"M Y"),
						'is_logged_in' => true
					);
					$this->session->set_userdata($data);
					//redirect home
					redirect('home');
				}
			}else{
				$this->load->view('login');
			}
		}
		
	}
	
	function login_prosses()
	{	
		$user       = $this->input->post('user_login');
		$password   = md5($this->input->post('user_pass'));
		$query      = $this->db->where('user_login',$user)
					->where('user_pass',$password)
					->join('cp_group','cp_user.user_group = cp_group.group_id')
					->get('cp_user');
		  
		//cek jika setcookie di cek set cookie jika tidak ''
		if($this->input->post('setcookie')){
			$check = $this->input->post('setcookie');
		}else{
			$check = '';
		}
		
		if($query->num_rows() == '1'){
			$userdata = $query->row();
			//update last login
			$this->db->set('user_last_login',date('Y-m-d H:i:s'))
			->set('user_count',$userdata->user_count+1)
			->where('user_login',$user)
			->update('cp_user');
			$date_created = date_create($userdata->user_create_date);
			//jika valid set session 
			$data = array(
				'user_id' => $userdata->user_id,
				'user_login' => $userdata->user_login,
				'user_name' => $userdata->user_name,
				'user_tenant' => $userdata->tenant_id,
				'user_group' => $userdata->user_group,
				'last_login' => $userdata->user_last_login,
				'group_name' => $userdata->group_name,
				'date_created' => date_format($date_created,"M Y"),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			//jika remembere me, set cookie
			if($check) {
				$this->input->set_cookie('user',$user,time() + 3600);
				$this->input->set_cookie('password',$password,time() + 3600);
			}
			//redirect home
			if($this->session->user_group = 1) {
				redirect('home');
			}
			if($this->session->user_group = 9) {
				redirect('login');
			}
			
		}else{
			//redirect login
			redirect('login');
		}
	}	
	
	function logout()
	{
		delete_cookie("user");
		delete_cookie("password");
		$this->session->sess_destroy();
		redirect('login');
	}
	
}
