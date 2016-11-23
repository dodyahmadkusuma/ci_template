<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_login');
	}
	public function index()
	{
		// UNTUK MENGECEK APAKAH USER SUDAH LOGIN APA BELUM
		$user = $this->session->userdata('user_session');
		// jika sudah login maka secara otomatis diredirect ke home
		if (count($user) > 0) {
			redirect('admin');
		}
		// jika belum login maka masuk ke view login
		$this->load->view('login');			
	}
	public function act_login()
	{
		$this->form_validation->set_rules('user', 'Username Harus Di Isi', 'required');
		$this->form_validation->set_rules('pass', 'Password Harus Di Isi', 'required');

		if ($this->form_validation->run() == TRUE)
	        {
	        	$param = $this->input->post();
				$data_login = $this->M_login->periksa_login($param);
				
				if (count($data_login) > 0) {
					$this->session->set_userdata( 'user_session', $data_login );
				}else{
					redirect('login');
				}
				redirect('admin');
		
	        }
	        else
	        {
	        	$msg = validation_errors();
        		$this->session->set_flashdata('alert_msg', $msg);
        		redirect('login');
	      	}
	 }

		
	public function aksi_logout()
	{
		// untuk menghapus semua session
		$this->session->sess_destroy();
		// kemudian redirect ke login
		redirect('login');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */