<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
    	$this->load->model('user_m', 'user');
    
	}


	public function index()
	{		
		$this->load->view('loginview.php');
	}

	public function identifier()
	{
		
    $db_user = $this->user->get($this->input->post('login'));
    
		if(! $this->user->is_user($this->input->post('login'))){
			redirect('login/index');
		}
		else if($this->input->post('pw') != $db_user->MotPass){
			redirect('login/index');
		}
		else
		{
      if($db_user->Types=="Admin"){
        $this->session->set_userdata('user', $db_user->NomMemb);
			  redirect('welcome');
      }else{
        $this->session->set_userdata('user', $db_user->NomMemb);
			  redirect('index.php/c_accueil');
      }
			
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('login');
	}

}
?>