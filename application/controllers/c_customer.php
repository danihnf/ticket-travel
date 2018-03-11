<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_customer extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model("m_user");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_login"));
		}

	}

	public function index(){

		$data['customer'] = $this->m_user->customer();
		$this->load->view('back/customer',$data);
	}

	public function konfirmasi($token){

		$status = $this->input->post('status');

		$data = array(

			'status' => $status
		);

		$this->m_user->konfirmasi($data,$token);

		redirect('c_customer');

	}

	public function hapus($token){

		$this->m_user->hapuscustomer($token);
		redirect('c_customer');
	}


}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */