<?php 

/**
* 
*/
class chart_m extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
}
public function countLivre(){
  
    $data=$this->db->get('livre');

    return $data->num_rows();
}
public function countCategorie(){
    $data=$this->db->get('Categorie');

    return $data->num_rows();

}



}
