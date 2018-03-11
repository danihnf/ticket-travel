<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_login"));
		}

	}

	public function index(){

		$this->load->view('back/v_admin');
	}

	public function user(){

		$data['user'] = $this->m_user->data();
		$this->load->view('back/user', $data);
	}

	public function inputuser(){

		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			
			'username' => $username,
			'password' => md5($password),

			);
		if($op=="tambah"){
			$this->m_user->adduser($data);
		}
		else{
			$this->m_user->update($id,$data);
		}
	
		redirect('c_dashboard/user');
	}

	public function hapus($id){

		$this->m_user->hapus($id);
		redirect('c_dashboard/user');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_user->edit($id);

		$this->load->view('back/edit_user',$data);	
	}

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */