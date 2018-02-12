<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_rute extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_rute");
		$this->load->model("m_maskapai");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_login"));
		}
	}

	public function index(){
		
		$data['rute'] = $this->m_rute->data();
		$data['maskapai'] = $this->m_maskapai->showedit();
		
		$this->load->view('back/rute', $data);
	}

	public function inputrute(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$from = $this->input->post('asal');
		$to = $this->input->post('tujuan');
		$id_maskapai = $this->input->post('maskapai');
		$depart_at = $this->input->post('depart');
		$arrive_at = $this->input->post('arrive');
		$price = $this->input->post('harga');
			$tgl = date('Y-m-d H:i', strtotime($depart_at));
			$tgl2 = date('Y-m-d H:i', strtotime($arrive_at));
		$data = array(
			
			'rute_from' => $from,
			'rute_to' => $to,
			'id_maskapai' => $id_maskapai,
			'depart_at' => $tgl,
			'arrive_at' => $tgl2,
			'price' => $price

			);
		if($op=="tambah"){
			$this->m_rute->addrute($data);
		}
		else{
			$this->m_rute->update($id,$data);
		}
	
		redirect('c_rute');
	}

	public function hapus($id){

		$this->m_rute->hapus($id);
		redirect('c_rute');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_rute->edit($id);
		$data['maskapai'] = $this->m_maskapai->showedit();

		$this->load->view('back/edit_rute',$data);	
	}

}
?>
