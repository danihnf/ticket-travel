<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function adduser($data){
    	$this->db->insert('user',$data);
    }

    public function pesan($id){

    	$this->db->where("id",$id);
 		return $this->db->get('booking');
    }

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>