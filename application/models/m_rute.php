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

  $this->db->select('rute.*, maskapai.nama,maskapai.kode,maskapai.gambar'); 
  $this->db->from('rute'); 
  $this->db->join('maskapai', 'maskapai.id = rute.id_maskapai', 'left');
  $this->db->where("rute.id",$id);
  return $this->db->get();
}

public function asal(){
  $this->db->select('rute_from');
  $this->db->group_by('rute_from');
  return $this->db->get('rute')->result();
}

public function tujuan(){
  $this->db->select('rute_to');
  $this->db->group_by('rute_to');
  return $this->db->get('rute')->result();
}

public function detailboking($id_booking){

  $this->db->where("id_booking",$id_booking);
  return $this->db->get('booking');
}

public function addcustomer($data){
  $this->db->insert_batch('customer',$data);
}

public function addpemesan($data){
  $this->db->insert('booking',$data);
}


public function penumpang($token){

  $this->db->select('*'); 
  $this->db->from('customer'); 
  $this->db->join('booking', 'booking.token_pemesan = customer.token_booking', 'left');
  $this->db->where("customer.token",$token);
  return $this->db->get();
}

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>