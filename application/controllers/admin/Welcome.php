<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$assets = array(
			'title' => 'Dashboard',
			'js'    => array(),
			'css'   => array()
			);

		$this->load->view('admin/template/header', $assets);
		$this->load->view('admin/dashboard/view');
		$this->load->view('admin/template/footer');
	}
}
