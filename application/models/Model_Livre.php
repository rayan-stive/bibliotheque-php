

    <?php
    	class model_livre extends CI_Model {
    		function __construct(){
    			parent::__construct();
    			$this->load->database();
    		}
     
    		public function getAllLivre(){
    			$query = $this->db->get('livre');
    			return $query->result(); 
    		}

            public function showAllLivre(){
            $this->db->order_by('id', 'desc');
            $query = $this->db->get('livre');
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                return false;
            }
            }
            
            public function addLivre(){
            $data = array(
            'TitreLiv' => $this->input->post('TitreLiv'),
			'CatLivre' => $this->input->post('CatLivre'),
			'AuteurLiv' => $this->input->post('AuteurLiv'),
			'EditionLiv' => $this->input->post('EditionLiv'),
			'AdresseLiv' => $this->input->post('AdresseLiv'),
			'CollectionLiv' => $this->input->post('CollectionLiv'),
			'NoteLiv' => $this->input->post('NoteLiv'),
			'NumIsbn' => $this->input->post('NumIsbn'),
			'PageLiv' => $this->input->post('PageLiv'),
			'ImageLivre' => $this->input->post('ImageLivre'),
			'NumeLivre' => $this->input->post('NumeLivre')
            );
            $this->db->insert('livre', $data);

            if($this->db->affected_rows() > 0){
                return true;
            }else{
            return false;
                }
            }
     
    		public function getLivre($id){
    			$query = $this->db->get_where('livre',array('id'=>$id));
    			return $query->row_array();
    		}
     
            public function updateLivre(){
                $id=$this->input->post('id');
            $data = array(
                'TitreLiv' => $this->input->post('TitreLiv'),
                'CatLivre' => $this->input->post('CatLivre'),
                'AuteurLiv' => $this->input->post('AuteurLiv'),
                'EditionLiv' => $this->input->post('EditionLiv'),
                'AdresseLiv' => $this->input->post('AdresseLiv'),
                'CollectionLiv' => $this->input->post('CollectionLiv'),
                'NoteLiv' => $this->input->post('NoteLiv'),
                'NumIsbn' => $this->input->post('NumIsbn'),
                'PageLiv' => $this->input->post('PageLiv'),
                'ImageLivre' => $this->input->post('ImageLivre'),
                'NumeLivre' => $this->input->post('NumeLivre')
            );
            $this->db->where('id',$id);
            $this->db->update('livre', $data);
            if($this->db->affected_rows() > 0){
                return true;
            }else{
                return false;
            }
        }
     
    		public function deleteLivre(){
    			$id = $this->input->get('id');
                $this->db->where('id', $id);
                $this->db->delete('livre');
                if($this->db->affected_rows() > 0){
                    return true;
                }else{
                    return false;
                }
    		}
     
    	}
    ?>