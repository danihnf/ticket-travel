<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rute extends CI_Model {

	public function addrute($data){
   $this->db->insert('rute',$data);
 }

 function data(){
       // return $query = $this->db->get('rute',$number,$offset)->result();

  $this->db->select('rute.*, maskapai.nama'); 
  $this->db->from('rute'); 
  $this->db->join('maskapai', 'maskapai.id = rute.id_maskapai', 'left'); 
  return $query = $this->db->get()->result();
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

public function cari($asal,$tujuan,$tgl){
  $this->db->like('rute_from',$asal);
  $this->db->like('rute_to',$tujuan);
  $this->db->like('depart_at',$tgl);

  $this->db->select('rute.*, maskapai.nama'); 
  $this->db->from('rute'); 
  $this->db->join('maskapai', 'maskapai.id = rute.id_maskapai', 'left'); 

  return $query = $this->db->get()->result();
}


public function detail($id){

  $this->db->select('rute.*, maskapai.nama,maskapai.kode'); 
  $this->db->from('rute'); 
  $this->db->join('maskapai', 'maskapai.id = rute.id_maskapai', 'left');
  $this->db->where("rute.id",$id);
 return $this->db->get();
}

public function adduser($data){
   $this->db->insert('booking',$data);
 }

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>