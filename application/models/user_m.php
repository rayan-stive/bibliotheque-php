<?php 

/**
* 
*/
class User_m extends CI_Model
{
	function __construct(){
		parent::__construct();
		$this->load->database();
}


	public function is_user($login)
	{
		$nb = $this->db->where('NomMemb', $login)->get('membre')->num_rows();
		if($nb > 0)
			return true;
		else
			return false;
	}

	public function get($login)
	{
		return $this->db->where('NomMemb', $login)->get('membre')->row();
	}


public function showAllMembre(){
	$this->db->order_by('IdMemb', 'desc');
	$query = $this->db->get('membre');
	if($query->num_rows() > 0){
		return $query->result();
	}else{
		return false;
	}
	}

public function addMembre(){
	$field = array(
		'NomMemb' => $this->input->post('NomMemb'),
		'PrenomMemb' => $this->input->post('PrenomMemb'),
		'EmailMemb' => $this->input->post('EmailMemb'),
		'MotPass' => $this->input->post('MotPass'),
		'Types' => $this->input->post('Types')
	);
	$this->db->insert('membre', $field);

	if($this->db->affected_rows() > 0){
		return true;
	}else{
	return false;
		}
	}

	public function updateMembre(){
	$id=$this->input->post('IdMemb');
	$data = array(
		'NomMemb' => $this->input->post('NomMemb'),
		'PrenomMemb' => $this->input->post('PrenomMemb'),
		'EmailMemb' => $this->input->post('EmailMemb'),
		'MotPass' => $this->input->post('MotPass'),
		'Types' => $this->input->post('Types')
	);
	$this->db->where('IdMemb',$id);
	$this->db->update('membre', $data);
	if($this->db->affected_rows() > 0){
		return true;
	}else{
		return false;
	}
}
public function deleteMembre(){
	$id = $this->input->get('id');
	$this->db->where('IdMemb', $id);
	$this->db->delete('membre');
	if($this->db->affected_rows() > 0){
		return true;
	}else{
		return false;
	}
}
function check_user($NomMemb,$MotPass){
	$this->db->select('*');
	$this->db->from('membre');
	$this->db->where('NomMemb',$NomMemb);
	$this->db->where('MotPass',md5($MotPass));
	 $query=$this->db->get();
	 return $query;
	 
  
  }
function countMembre(){
	$data=$this->db->get('membre');

    return $data->num_rows();


}  


}