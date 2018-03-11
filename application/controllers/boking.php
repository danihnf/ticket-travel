<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Boking extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_rute");

	}

	public function index(){
		$this->load->view('front/v_booking');
	}

	public function cek(){

		$data['hasilrsv'] = $this->m_rute->cek();
		$this->load->view('front/v_cek',$data);
	}

	public function show($token){

		$data['tiket'] = $this->m_rute->penumpang($token);
		$this->load->view('front/v_tiket',$data);
	}

	public function carikode(){

		$kode = $this->input->get('kode');

		$data['hasilrsv'] = $this->m_rute->cekkode($kode);
		$this->load->view('front/v_reservasi',$data);
	}

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */