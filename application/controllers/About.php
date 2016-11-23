<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {



	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}
	public function index()
	{
	
        $data['user']       = $this->M_login->get();
		$this->template->views('profile',$data);
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */