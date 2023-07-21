<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_message extends CI_Model {

	function sendmessage(){
		$data = array(
			'name'       => $this->input->post('name'),
			'email'      => $this->input->post('email'),
			'subject'    => $this->input->post('subject'),
			'message'    => $this->input->post('message'),
			'ip'         => $this->input->ip_address(),
			'user_agent' => user_agent()
			);
		return $this->db->insert('messages', $data);
	}
	
}
