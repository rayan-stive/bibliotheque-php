<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
    class c_chart extends CI_Controller {
     
    	function __construct(){
			parent::__construct();
			$this->load->model('user_m', 'user');
			$this->load->model('chart_m');

    	}
     	
    	public function index(){
    		$this->load->view('Chart.php');

		}
		public function countLivre(){
			$result = $this->chart_m->countLivre();
			echo json_encode($result);
		}
		public function countCategorie(){
			$result = $this->chart_m->countCategorie();
			echo json_encode($result);
		}
    
    }