<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_user");
	
	}

	public function index()
	{
		$this->load->view('front/index');
	}

	public function adduser(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			
			'nama' => $nama,
			'username' => $username,
			'hp' => $hp,
			'email' => $email,
			'password' => md5($password),

			);
		
			$this->m_user->adduser($data);
	
		redirect('landing');
	}



}
