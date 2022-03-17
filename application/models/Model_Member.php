<?php 

/**
* 
*/
class Model_Member extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}
	public function getAllLivre(){
		$query = $this->db->get('categorie');
		return $query->result(); 
	}

	

	public function fetchMemberData($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM livre WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM livre";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function edit($id = null) 
	{
		if($id) {
			$data = array(
				'TitreLiv' => $this->input->post('editTitreLiv'),
				'AuteurLiv' => $this->input->post('editAuteurLiv'),
				'EditionLiv' => $this->input->post('editEditionLiv'),
				'AdresseLiv' => $this->input->post('editAdresseLiv'),
				'Resume' => $this->input->post('editResume')
			);

			$this->db->where('id', $id);
			$sql = $this->db->update('livre', $data);

			if($sql === true) {
				return true; 
			} else {
				return false;
			}
		}
			
	}

	public function remove($id = null) {
		if($id) {
			$sql = "DELETE FROM livre WHERE id = ?";
			$query = $this->db->query($sql, array($id));

			// ternary operator
			return ($query === true) ? true : false;			
		}
	}
		 // /if
	    public function categorie($idcat){
		
			if(null==$idcat){
				$this->db->select('*');
				$this->db->from('livre');
				
				$query = $this->db->get();
				return $query->result();
			}else{

				$this->db->select('*');
				$this->db->from('livre');
				$this->db->where('IdCat',$idcat);
				$query = $this->db->get();
				return $query->result();
			}
		}

		public function count(){
			$cat=$this->input->get('cat');

			$this->db->select('TitreLiv');
			$this->db->where('IdCat',$cat);

			$data=$this->db->get('livre');

			return $data->num_rows();
		}

		public function select(){
			$query = $this->db->get('categorie');
			return $query->result(); 
		}
		
        public function recherche(){
			$titre = $this->input->get('titre');
			$this->db->like('TitreLiv', $titre);
			$query = $this->db->get('livre');
			if($query->num_rows() > 0){
				return $query->result();
			}else{
				return false;
			}
			}


	


	
}