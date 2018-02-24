<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_maskapai extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_maskapai");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_login"));
		}
	}

	public function index(){
		
		$this->load->database();
		$jumlah_data = $this->m_maskapai->jumlah_data();
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/c_maskapai/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 3;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['maskapai'] = $this->m_maskapai->data($config['per_page'],$from);
		
		$this->load->view('back/maskapai', $data);
	}

	public function inputmaskapai(){
		
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 3072;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$gambar = $this->upload->do_upload('gambar');
		$deskripsi = $this->input->post('deskripsi');
		$seat = $this->input->post('seat');
		$gbr = $this->upload->data();
		$data = array(
			
			'kode' => $kode,
			'nama' => $nama,
			'gambar' => $gbr['filefoto'],
			'deskripsi' => $deskripsi,
			'seat' => $seat

			);
		if($op=="tambah"){
			$this->m_maskapai->addmaskapai($data);
		}
		else{
			$this->m_maskapai->update($id,$data);
		}
	
		redirect('c_maskapai');
	}

	public function hapus($id){

		$this->m_maskapai->hapus($id);
		redirect('c_maskapai');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_maskapai->edit($id);

		$this->load->view('back/edit_maskapai',$data);	
	}

}
?>
