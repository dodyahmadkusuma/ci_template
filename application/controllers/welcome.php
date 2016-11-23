<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test($a,$b)
	{
		$nama 			= 'Dody Ahmad Kusuma Jaya';
		$data['namaku'] = $nama;
		$data['umurku'] = 22 ;

		$this->load->view('belajar',$data);
	}
	





}
