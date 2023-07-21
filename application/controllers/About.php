<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_front');
	}

	public function index()
	{
		$assets = array(
			'title' => $this->lang->line('about'),
			'lang'  => $this->session->userdata('site_lang'),
			'js'    => array(),
			'css'   => array()
			);

		$assets['about'] = $this->model_front->get_content('about', '', FALSE);
		
		$this->load->view('template/header', $assets);
		$this->load->view('about_view');
		$this->load->view('template/footer');
	}
}
