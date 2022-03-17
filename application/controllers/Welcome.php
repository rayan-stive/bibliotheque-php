<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();

		//form -validation
		$this->load->library('form_validation');
		$this->load->model('user_m', 'user');
		$this->load->model('model_member');

	}

	public function index()
	{

		$this->load->view('home');
	} 

	public function create() 
	{

		$validator = array('success' => false, 'messages' => array());

		$config = array(
	    array(
        'field' => 'TitreLiv',
        'label' => 'Titre',
        'rules' => 'trim|required'
	    ),
	    array(
        'field' => 'IdCat',
        'label' => 'Categorie',
        'rules' => 'trim|required'	            
	    ),
	    array(
        'field' => 'AuteurLiv',
        'label' => 'Auteur',
        'rules' => 'trim|required'           
	    )
		);

		$this->form_validation->set_rules($config);
		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

		if($this->form_validation->run() === true) {
			
			$createMember = $this->ajout(); 

			if($createMember === true) {
				redirect(base_url('welcome'));
			  } else {
				$validator['success'] = false;
				$validator['messages'] = "Error while updating the information";
			}			
		} 
		else {
			$validator['success'] = false;
			foreach ($_POST as $key => $value) {
				$validator['messages'][$key] = form_error($key);	
			}			
		}

		echo json_encode($validator);
	}

	public function fetchMemberData() 
	{
		$result = array('data' => array());

		$data = $this->model_member->fetchMemberData();
		foreach ($data as $key => $value) {
			

			// button
			$buttons = '
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Action <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
			    <li><a type="button" onclick="editMember('.$value['id'].')" data-toggle="modal" data-target="#editMemberModal">Modifier</a></li>
			    <li><a type="button" onclick="removeMember('.$value['id'].')" data-toggle="modal" data-target="#removeMemberModal">Supprimer</a></li>			    
			  </ul>
			</div>
			';
			$img = '<img src="'.base_url($value['ImageLivre']).'" alt="'.$value['ImageLivre'].'" class="img-circle" width="50" height="50" id="dasi3" />';
 
			$result['data'][$key] = array(
				$value['TitreLiv'],
				$value['IdCat'],
				$value['AuteurLiv'],
				$value['EditionLiv'],
				$value['AdresseLiv'],
				$value['CollectionLiv'],
				$value['NoteLiv'],
				$value['NumIsbn'],
				$value['PageLiv'],
				$img,
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	public function getSelectedMemberInfo($id) 
	{
		if($id) {
			$data = $this->model_member->fetchMemberData($id);
			echo json_encode($data);
		}
	}

	public function edit($id = null) 
	{
		if($id) {
			$validator = array('success' => false, 'messages' => array());

			$config = array(
		 array(
        'field' => 'editTitreLiv',
        'label' => 'Titre',
        'rules' => 'trim|required'
	    )
	    
			);

			$this->form_validation->set_rules($config);
			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

			if($this->form_validation->run() === true) {

				$editMember = $this->model_member->edit($id); 

				if($editMember === true) {
					$validator['success'] = true;
					$validator['messages'] = "Modification avec succees";
				} else {
					$validator['success'] = false;
					$validator['messages'] = "Error while updating the infromation";
				}			
			} 
			else {
				$validator['success'] = false;
				foreach ($_POST as $key => $value) {
					$validator['messages'][$key] = form_error($key);	
				}			
			}

			echo json_encode($validator);
		}
	}

	public function remove($id = null)
	{
		if($id) {
			$validator = array('success' => false, 'messages' => array());

			$removeMember = $this->model_member->remove($id);
			if($removeMember === true) {
				$validator['success'] = true;
				$validator['messages'] = "Supprimer avec succees";
			}
			else {
				$validator['success'] = true;
				$validator['messages'] = "Successfully removed";
			}

			echo json_encode($validator);
		}
	}
	public function upload_image()
    {
    	// assets/images/product_image
		$config['upload_path'] = './imagebibliotheque';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        
		$config['encrypt_name'] = FALSE;
        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('ImageLivre'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['ImageLivre']['name']);
            $type = $type[count($type) - 1];
            
            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;            
        }
	}
	public function upload_fichier()
    {
    	// assets/images/product_image
		$config['upload_path'] = './imagebibliotheque';
        $config['file_name'] =  uniqid();
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['max_size'] = '1000';
        $config['encrypt_name'] = TRUE;
        // $config['max_width']  = '1024';
        // $config['max_height']  = '768';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('NumeLivre'))
        {
            $error = $this->upload->display_errors();
            return $error;
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $type = explode('.', $_FILES['NumeLivre']['name']);
            $type = $type[count($type) - 1];
            
            $path = $config['upload_path'].'/'.$config['file_name'].'.'.$type;
            return ($data == true) ? $path : false;            
        }
	}
	public function ajout() 
	{
		

		$path_image=$this->upload_image();
		$path_fichier=$this->upload_fichier();
		$data = array(
			'TitreLiv' => $this->input->post('TitreLiv'),
			'IdCat' => $this->input->post('IdCat'),
			'AuteurLiv' => $this->input->post('AuteurLiv'),
			'EditionLiv' => $this->input->post('EditionLiv'),
			'AdresseLiv' => $this->input->post('AdresseLiv'),
			'CollectionLiv' => $this->input->post('CollectionLiv'),
			'NoteLiv' => $this->input->post('NoteLiv'),
			'NumIsbn' => $this->input->post('NumIsbn'),
			'PageLiv' => $this->input->post('PageLiv'),
			'Resume' => $this->input->post('Resume'),
			'ImageLivre' => $path_image,
			'NumeLivre' => $path_fichier
			
		);
       
		$sql = $this->db->insert('livre', $data); 

		if($sql === true) {
			return true; 
		} else {
			return false;
		}
	}
	public function ajoutCategorie() 
	{
		
		$data = array(
			'NomCat' => $this->input->post('NomCat'),
			
		);
       
		$sql = $this->db->insert('categorie', $data); 

		if($sql === true) {

			redirect(base_url('welcome'));
			return true; 
			
		} else {
			return false;
		}
		
	} // /create function


	public function getAllLivre(){
		$data = $this->model_member->getAllLivre();	 
        echo json_encode($data);
	}
	
	public function getAllCat(){
        $id = $this->input->post('id');
		$data = $this->model_member->categorie($id);

        echo json_encode($data);
	}

	public function count(){
		$result = $this->model_member->count();
		echo json_encode($result);
	}

	public function select(){
		$result = $this->model_member->select();
		echo json_encode($result);
	}
	public function recherche(){
		$result = $this->model_member->recherche();
		echo json_encode($result);
	}
}
