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
		$this->load->view('front/index');
	}

	public function cari(){

		$asal = $this->input->get('asal');
		$tujuan = $this->input->get('tujuan');
		$depart = $this->input->get('depart');
		$tgl = date('Y-m-d', strtotime($depart));
		$penumpang = $this->input->get('penumpang');

		$data['hasil'] =   $this->m_rute->cari($asal,$tujuan,$tgl,$penumpang);
		$this->load->view('front/v_rute',$data);
	}

	public function detail($id){

		$data['pilih'] = $this->m_rute->detail($id);

		$this->load->view('front/v_detail',$data);

	}

	public function booking(){
		
		$id = $this->input->post('id');
		$id_rute = $this->input->post('id_rute');
		$identitas = $this->input->post('identitas');
		$nama = $this->input->post('nama');
		$nohp = $this->input->post('nohp');
		//$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		
		$data = array(
			
			'identitas' => $identitas,
			'nama' => $nama,
			'nohp' => $nohp,
			//'email' => $email,
			'alamat' => $alamat

			);

			$this->m_rute->adduser($data);
	
		$this->load->view('front/v_seat',$data);
	}

}
