<?php echo $script_captcha ?>

<style type="text/css" media="screen">
	.form-group span.error{
		color: red;
    	font-size: 12px;
	}
</style>

<div class="banner-header" style="background-image: linear-gradient(#000000, transparent), url('<?php echo base_url('dist/assets/banner/map.png') ?>');">
<h1 class="bg-title"><span><?php echo $this->lang->line('contact') ?></span></h1>
</div>

<div class="contact-page">
<div class="container">
	<div class="row">
	<div class="col-md-4">
	<h2>Get in touch</h2>

	<div class="social-media">
		<ul>
			<li><a href="<?php echo web_settings('instagram'); ?>" target="_blank"><span><i class="fab fa-instagram"></i></span></a></li>
			<li><a href="<?php echo web_settings('facebook'); ?>" target="_blank"><span><i class="fab fa-facebook-f"></i></span></a></li>
			<li><a href="<?php echo web_settings('twitter'); ?>" target="_blank"><span><i class="fab fa-twitter"></i></span></a></li>
			<li><a href="<?php echo base_url(); ?>" target="_blank"><span><i class="fas fa-globe"></i></span></a></li>
		</ul>
	</div>

	<address>
		<?php echo web_settings('address_1').'<br>'.web_settings('city').'<br>'.web_settings('code_post'); ?>
	</address>

	</div>
	<div class="col-md-8">
	<blockquote>
	<?php echo $this->lang->line('desc_contact'); ?>
	</blockquote>
	<?php 
	if($this->session->flashdata('alert_message')) :
	echo '<div class="alert alert-'.$this->session->flashdata('alert').' alert-dismissible fade show" role="alert">
	  '.$this->session->flashdata('alert_message').'
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>';
	endif;
	?>

	<form action="<?php echo base_url('contact') ?>" method="post">
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
		    	<input type="text" name="name" class="form-control" placeholder="Name">
		    	<?php echo form_error('name'); ?>
		  	</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
		    	<input type="email" name="email" class="form-control" placeholder="Email">
		    	<?php echo form_error('email'); ?>
		  	</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
		    	<input type="text" name="subject" class="form-control" placeholder="Subject">
		    	<?php echo form_error('subject'); ?>
		  	</div>
		  	<div class="form-group">
		    	<textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
		    	<?php echo form_error('message'); ?>
		  	</div>

		  	<div class="form-group">
	        	<?php 
	        		echo $recaptcha_html; 
	        		if($this->session->flashdata('required_captcha')){
	        			echo '<span class="error">'.$this->session->flashdata('required_captcha').'</span>';
	        		}
	        	?>
	        	<?php echo form_error('g-recaptcha-response'); ?>
	        </div>

		  	<div class="form-group text-right">
		  	<button type="submit" class="btn btn-dark px-4">Submit</button>
		  	</div>
		</div>
	</div>
	
	  
	</form>

	</div>
	</div>
</div>
</div>