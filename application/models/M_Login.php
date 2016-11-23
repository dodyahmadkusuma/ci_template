<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function periksa_login($param='')
	{
		$this->db->where('username', $param['user']);
		$this->db->where('password', $param['pass']);
		$data = $this->db->get('login');
		return $data->row();
	}
	public function get()
	{
		$data = $this->db->get('login');
		return $data->row();
	}	
}
/* End of file M_Login.php */
/* Location: ./application/models/M_Login.php */