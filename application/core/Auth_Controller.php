<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->user = $this->session->userdata('user_session');
		if (count($this->user) == 0) {
		redirect('login');
        }
	}

}

/* End of file MY_auth.php */
/* Location: ./application/core/MY_auth.php */