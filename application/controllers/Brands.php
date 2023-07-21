<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_front');
	}

	public function index($brands = '')
	{
		$assets = array(
			'title' => $this->lang->line('brands'),
			'lang'  => $this->session->userdata('site_lang'),
			'js'    => array(),
			'css'   => array()
			);

		$assets['brands']  = $this->model_front->get_content('brands');
		if(!empty($brands)){
			$assets['pop'] = $brands;
		}else{
			$assets['pop'] = FALSE;
		}

		$this->load->view('template/header', $assets);
		$this->load->view('brands_view');
		$this->load->view('template/footer');
	}

	function content(){
		$seo     = $this->input->get('seo_url');
		$content = $assets['about'] = $this->model_front->get_content('brands', $seo, FALSE);
		$data['nama'] = ucwords(strtolower($content['name']));
		if($content){
			$data['content'] = '<div id="slider-pop" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner ss">';
				  $slider = $this->model_front->get_slide($content['id']);
				  foreach ($slider as $key => $img) {
				  	if($key == 0){
				  		$active = 'active';
				  	}else{
				  		$active = '';
				  	}
				  	$data['content'] .= '<div class="carousel-item '.$active.'">
									      <img src="'.base_url('dist/assets/banner/').$img['slide'].'" class="d-block w-100">
									    </div>';
				  }
				  $data['content'] .= '</div>
				  <a class="carousel-control-prev" href="#slider-pop" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#slider-pop" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
				<div class="text-center">
				<h3 class="title-pop">'.$content['name'].'</h3>
				<p class="content">'.$content['content'].'</p>
				<hr>
				<a href="'.$content['link_web'].'" target="_blank"><i class="fas fa-globe"></i> 
				<span class="uri">'.$content['link_web'].'</span>
				</a>
				</div>';
			echo json_encode($data);
		}
	}
}
