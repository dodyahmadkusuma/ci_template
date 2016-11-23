<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends Auth_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_blog');
	}

	public function index()
	{
		$data['data_content'] = $this->M_blog->get();
		$this->load->view('pdo/index' ,$data);

	}

}

/* End of file Artikel.php */
/* Location: ./application/controllers/Artikel.php */