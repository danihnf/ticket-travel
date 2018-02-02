<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	public function index(){
		$this->load->view('back/v_login');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'username' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("c_dashboard"));

		}else{
			echo "<script>alert('Username atau Password salah! Silahkan cek kembali');history.go(-1);</script>";	
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('c_login'));
	}

}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */