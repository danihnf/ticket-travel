<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rute extends CI_Model {

	public function addrute($data){
    	$this->db->insert('rute',$data);
    }

    function data($number,$offset){
        return $query = $this->db->get('rute',$number,$offset)->result();       
    }

    function jumlah_data(){
        return $this->db->get('rute')->num_rows();
    }

    public function hapus($id){
    	$this->db->where("id",$id);
    	$this->db->delete('rute');
    }

    public function showedit(){
    	return $this->db->get('rute')->result();
    }

    public function edit($id){
    	$this->db->where("id",$id);
    	return $this->db->get('rute');
    }

    public function update($id,$data){
    	$this->db->where("id",$id);
    	$this->db->update('rute',$data);
    }

    public function funcname($id){

        $this->db->select('nama');
        $this->db->from('rute a');
        $this->db->join('maskapai b', 'b.id=a.id_maskapai'
            , 'left');

        $this->db->where('a.id_maskapai');
        $query = $this->db->get();
        return $query->result();

    }

    public function caridata(){

        $this->db->like('from', $f);
        $this->db->like('to', $t);
        
 }

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>