<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
     
    class user_c extends CI_Controller {
     
    	function __construct(){
    		parent::__construct();
			$this->load->helper('url');
			$this->load->model('user_m', 'user');
			$this->load->model('user_m');
    	}
     	
    	public function index(){
    		$this->load->view('user.php');

		}
		public function showAllMembre(){
			$result = $this->user_m->showAllMembre();
			echo json_encode($result);
			}
	
		public function addMembre(){
			$result = $this->user_m->addMembre();
			$msg['success'] = false;
			$msg['type'] = 'add';
			if($result){
				$msg['success'] = true;
			}
			echo json_encode($msg);
			}
        

		public function updateMembre(){
			$query=$this->user_m->updateMembre();
			$msg['success'] = false;
			$msg['type'] = 'update';
			if($query){
			$msg['success'] = true;
				}
				echo json_encode($msg);
				}
				
		public function Delete(){
			$result = $this->user_m->deleteMembre();
			$msg['success'] = false;
			if($result){
			$msg['success'] = true;
				}
				echo json_encode($msg);
				}	
				
		public function countMembre(){
			$result = $this->user_m->countMembre();
			echo json_encode($result);
		}		



				
}




