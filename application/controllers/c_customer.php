<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_customer extends CI_Controller {

	function __construct(){
		parent::__construct();		
		
		if($this->session->userdata('status') != "login"){
			redirect(base_url("c_login"));
		}

	}

	public function index(){
		$this->load->view('back/customer');
	}


}

/* End of file c_dashboard.php */
/* Location: ./application/controllers/c_dashboard.php */