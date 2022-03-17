<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_accueil extends CI_Controller {
	public function __construct() {
		parent::__construct();

		//form -validation
		$this->load->library('form_validation');
		$this->load->model('model_member');
		$this->load->model('user_m', 'user');
	} 

	public function index()
	{
	
		$this->load->view('accueil');
		
	} 
	public function acceuil()
	{
		$this->load->view('accueil.php');
		
    } 
}