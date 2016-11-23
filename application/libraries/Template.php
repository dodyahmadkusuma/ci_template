<?php 


class Template
{
	protected $_ci;

	function __construct(){
		$this->_ci = &get_instance();
	}
	function views($template= null , $data= null){
		if ($template != null) {
			$data['_body'] 			= $this->_ci->load->view($template, $data, TRUE);
			$data['_head'] 			= $this->_ci->load->view('template/head', $data, TRUE);
			$data['_sidebar'] 		= $this->_ci->load->view('template/sidebar', $data, TRUE);
			$data['_header'] 		= $this->_ci->load->view('template/header', $data, TRUE);
			$data['_footer'] 		= $this->_ci->load->view('template/footer', $data, TRUE);
			echo $data['_template'] = $this->_ci->load->view('template', $data, TRUE);
								}	
		}
	function dashboard($template= null , $data= null){
		if ($template != null) {
			$data['_body'] 			= $this->_ci->load->view($template, $data, TRUE);
			$data['_css'] 			= $this->_ci->load->view('dashboard/_css', $data, TRUE);
			$data['_header'] 		= $this->_ci->load->view('dashboard/_header', $data, TRUE);
			$data['_sidebar'] 		= $this->_ci->load->view('dashboard/_sidebar', $data, TRUE);
			$data['_footer'] 		= $this->_ci->load->view('dashboard/_footer', $data, TRUE);
			$data['_js'] 			= $this->_ci->load->view('dashboard/_js', $data, TRUE);
			echo $data['_template'] = $this->_ci->load->view('admin', $data, TRUE);
								}	

		}

}




 ?>