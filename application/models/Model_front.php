<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_front extends CI_Model {

	function get_content($table, $sort = '', $return = TRUE){

		$lang_id = active_lang();
		$data = array(
			'lang' => $lang_id,
			'flag' => 1
			);
		if(!empty($sort)){
			$data['seo_url'] = $sort;
		}

		$this->db->join('content_to_'.$table.' ct', 'ct.id_'.$table.' = t.id', 'left');
		$this->db->where($data);
		$query = $this->db->get($table.' t');

		if($return){
			return $query->result_array();
		}else{
			return $query->row_array();
		}

	}

	function get_slide($id){
		$data = array(
			'id_slide' => $id
			);
		$this->db->where($data);
		$query = $this->db->get('slide_brands');
		return $query->result_array();
	}
	
	
}
