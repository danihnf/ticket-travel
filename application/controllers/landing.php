<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_user");
		$this->load->model("m_rute");

	}

	public function index()
	{
		$data['asal'] = $this->m_rute->asal();
		$data['tujuan'] = $this->m_rute->tujuan();
		$this->load->view('front/index', $data);
	}

	public function cari(){

		$asal = $this->input->get('asal');
		$tujuan = $this->input->get('tujuan');
		$depart = $this->input->get('depart');
		$tgl = date('Y-m-d', strtotime($depart));
		$penumpang = $this->input->get('penumpang');

		$data['asal'] = $this->m_rute->asal();
		$data['tujuan'] = $this->m_rute->tujuan();
		$data['hasil'] =   $this->m_rute->cari($asal,$tujuan,$tgl,$penumpang);
		$this->load->view('front/v_rute',$data);
		
	}

	public function detail($id){

		$data['pilih'] = $this->m_rute->detail($id);

		$this->load->view('front/v_detail',$data);

	}

	public function booking($id){
		
		$id_rute = $this->input->post('id_rute');
		$token_pemesan = $this->input->post('token_pemesan');
		$nama_pemesan = $this->input->post('nama_pemesan');
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');
		$alamat = $this->input->post('alamat');
		$total_price = $this->input->post('total_price');
		$penumpang = $this->input->post('penumpang');
        
		$data = array(
			
			'id_rute' => $id_rute,
			'token_pemesan' => $token_pemesan,
			'nama_pemesan' => $nama_pemesan,
			'email' => $email,
			'nohp' => $nohp,
			'alamat' => $alamat

			);

			$this->m_rute->addpemesan($data); 
		
			$data['pilih'] = $this->m_rute->detail($id);
		$this->load->view('front/v_booking',$data);
	}

	public function customer($token){
		
		$id_rute = $this->input->post('id_rute');
		$token_booking = $this->input->post('token_booking');
		$identitas = $this->input->post('identitas');
		$nama_penumpang = $this->input->post('nama_penumpang');
		$token = $this->input->post('token');
		$price = $this->input->post('price');
		$penumpang = $this->input->post('penumpang');
		$data = array();
		
		foreach($identitas as $i => $val){
    		
		$data[] = array(
			'id_rute' => $id_rute,
			'token_booking' => $token_booking,
			'no_identitas' => $identitas[$i],
			'nama_penumpang' => $nama_penumpang[$i],
			'token' => $token,
			'total_price' => $price[$i]

			);}

			$this->m_rute->addcustomer($data);
 
		$data['tiket'] = $this->m_rute->penumpang($token);
		$this->load->view('front/v_ticket',$data);
	}

	public function seat(){


		
	}


}
