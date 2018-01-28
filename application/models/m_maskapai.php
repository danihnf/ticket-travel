<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_maskapai extends CI_Model {

	public function addmaskapai($data){
    	$this->db->insert('maskapai',$data);
    }

    function data($number,$offset){
        return $query = $this->db->get('maskapai',$number,$offset)->result();       
    }

    function jumlah_data(){
        return $this->db->get('maskapai')->num_rows();
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('maskapai');
    }

    public function showedit(){
    	return $this->db->get('maskapai')->result();
    }

    public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('maskapai');
    }

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('maskapai',$data);
    }

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>