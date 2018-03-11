<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	public function adduser($data){

    	$this->db->insert('user',$data);
    }

    public function edit($id){

         $this->db->where("id",$id);
        return $this->db->get('user');
    }

    public function update($id,$data){

        $this->db->where("id",$id);
        $this->db->update('user',$data);
    }

    public function data(){

        return $this->db->get('user')->result();
    }

    public function hapus($id){

        $this->db->where("id",$id);
        $this->db->delete('user');
    }

    public function pesan($id){

    	$this->db->where("id",$id);
 		return $this->db->get('booking');
    }

    public function konfirmasi($data,$token){

    	$this->db->where("token",$token);
    	$this->db->update('customer',$data);
    
    }

    public function pembayaran($data,$token){

        $this->db->where("token",$token);
        $this->db->update('customer',$data);
    
    }

    public function customer(){

		$this->db->select('*'); 
		$this->db->from('customer'); 
		$this->db->join('booking', 'booking.token_pemesan = customer.token_booking', 'left');
		$this->db->join('rute', 'rute.id = customer.id_rute', 'left');
		$this->db->where("customer.status = '0'");
        $this->db->group_by('nama_pemesan');
		return $this->db->get();
	}

    public function hapuscustomer($token){

        $this->db->where("token",$token);
        $this->db->delete('customer');
    }

}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */

?>