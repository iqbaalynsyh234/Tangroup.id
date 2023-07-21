<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_message');
        $this->load->library(array('recaptcha','form_validation'));
    }

	public function index()
	{
		$assets = array(
			'title'          => $this->lang->line('contact'),
			'lang'           => $this->session->userdata('site_lang'),
			'js'             => array(),
			'css'            => array(),
			'recaptcha_html' => $this->recaptcha->getWidget(),
			'script_captcha' => $this->recaptcha->getScriptTag()
			);

		$this->form_validation->set_rules('name', '<strong>Name</strong>', 'trim|required');
		$this->form_validation->set_rules('email', '<strong>Email</strong>', 'trim|required');
		$this->form_validation->set_rules('subject', '<strong>Subject</strong>', 'trim|required');
		$this->form_validation->set_rules('message', '<strong>Message</strong>', 'trim|required');
		$this->form_validation->set_rules('g-recaptcha-response', '<strong>Captcha</strong>', 'callback_getResponseCaptcha');
        //set message form validation
        $this->form_validation->set_message('required', '{field} is required.');
        $this->form_validation->set_message('callback_getResponseCaptcha', '{field} {g-recaptcha-response} is required.');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

		if($this->form_validation->run() == FALSE)
        {
           	$this->load->view('template/header', $assets);
			$this->load->view('contact_view');
			$this->load->view('template/footer');
        }else{
        	$insert_message = $this->model_message->sendmessage();
        	if($insert_message){
        		$this->session->set_flashdata('alert_message', '<strong>Pesan Terkirim!</strong> Terimakasih, kami akan segera membalas pesan anda.');
        		$this->session->set_flashdata('alert', 'success');
        	}else{
        		$this->session->set_flashdata('alert_message', '<strong>Pesan Gagal</strong> Maaf, pesan Anda gagal terkirim.');
        		$this->session->set_flashdata('alert', 'warning');
        	}
            redirect(base_url('contact'));
        }	
		
	}

	public function getResponseCaptcha($str)
    {
        $response = $this->recaptcha->verifyResponse($str);
        if ($response['success'])
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('getResponseCaptcha', '%s is required.' );
            return false;
        }
    }
}
