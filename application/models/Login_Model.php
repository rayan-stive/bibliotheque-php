<?php 

/**
* 
*/
class Login_model extends CI_Model
{
 function check_user($NomMemb,$MotPass){
  $this->db->select('*');
  $this->db->from('membre');
  $this->db->where('NomMemb',$NomMemb);
  $this->db->where('MotPass',md5($MotPass));
   $query=$this->db->get();
   return $query;
   

}
}