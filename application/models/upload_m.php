<?php 

/**
* 
*/
class upload_m extends CI_Model
{
	public function __construct() {
		parent::__construct();
    }
    public function ajout($x){
       
	
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
            'ImageLivre' =>$this->input->post('ImageLivre'),
			'NumeLivre' => $x
			
		);
       
		$sql = $this->db->insert('livre', $data); 

		if($sql === true) {
			return true; 
		} else {
			return false;
		}
		

    }

    public function updat($x){
       
    $titr=$this->input->get('TitreLiv');
    $idcat=$this->input->get('IdCat');
        
    $this->db->where('IdCat',$idcat);
    $this->db->where('TitreLiv',$titr);
    $this->db->set('ImageLivre',$x);
    $sql = $this->db->update('livre'); 

    if($sql === true) {
        return true; 
    } else {
        return false;
    }
    

   }
}