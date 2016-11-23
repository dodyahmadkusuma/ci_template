<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	
	function __construct()
	{
			parent::__construct();
	}

	public function index()
	{
		$this->template->views('Contact');		
	}
	public function proses()
	{
		$tmp_name = $_FILES['gambar']['tmp_name'];
		// $destination =  FCPATH . '/asset/images/gambar.jpg';
		$config['upload_path'] 		= FCPATH . '/asset/images/gambar.jpg';
		$config['allowed_types'] 	= 'jpeg|png';
		$config['max_size'] 		= 200000;


		$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}else{
				$data = array('upload_data' => $this->upload->data());
				print_r($data);
			}





		echo "<pre>";
		print_r($_FILES);

		// if ($_FILES['gambar']['size'] >= 200000 && $_FILES['gambar']['type'] != 'image/jpeg') {
		// 	$a= "MAAF FILE ANDA LEBIH DARI 2MB ATAU FILE ANDA BUKAN JPG";
		// 	echo $a;
		// }else{
		// 	move_uploaded_file($tmp_name, $destination);
		// 	echo "FILE ANDA BERHASIL DI UPLOAD " . $_FILES['gambar']['tmp_name'];
		// }


	}

}

/* End of file history.php */
/* Location: ./application/controllers/history.php */