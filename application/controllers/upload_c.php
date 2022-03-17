<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class upload_c extends CI_Controller {
	public function __construct() {
		parent::__construct();

		//form -validation
		$this->load->library('form_validation');
		$this->load->model('user_m', 'user');
		$this->load->model('upload_m');

	}

	public function index()
	{

		$this->load->view('home');
	} 
	
	
	public function insert()
    {
    	// assets/images/product_image
		$config['upload_path'] = './imagebibliotheque';
       
        $config['allowed_types'] = 'pdf';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('NumeLivre'))
        {
            echo "error";
        }
        else
        {

            $fd=$this->upload->data();
            $fn=$fd['file_name'];
            $this->upload_m->ajout($fn);
                
        }
	}
		
	public function insertImage()
    {
    	// assets/images/product_image
		$config['upload_path'] = './imagebibliotheque';
       
        $config['allowed_types'] = 'jpg|jpeg|gif|png|';
        $config['max_size'] = '1000';

        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('ImageLivre'))
        {
            echo "error";
        }
        else
        {

            $fd=$this->upload->data();
            $fn=$fd['file_name'];
            $this->upload_m->updat($fn);
                
        }
	}
	
	
}
