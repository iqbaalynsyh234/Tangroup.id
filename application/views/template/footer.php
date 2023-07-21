   </section>
   <footer>
     <div class="container">
     <div class="row align-items-center">
     		<div class="col-md-12 col-lg-6">
     		<ul class="nav justify-content-center justify-content-lg-start mb-lg-0 mb-2">
			  <li class="nav-item <?php if($title == ''){ echo 'active'; } ?>">
			    <a class="nav-link" href="#"><?php echo $this->lang->line('home') ?></a>
			  </li>
			  <li class="nav-item <?php if($title == $this->lang->line('about')){ echo 'active'; } ?>">
			    <a class="nav-link" href="#"><?php echo $this->lang->line('about') ?></a>
			  </li>
			  <li class="nav-item <?php if($title == $this->lang->line('brands')){ echo 'active'; } ?>">
			    <a class="nav-link" href="#"><?php echo $this->lang->line('brands') ?></a>
			  </li>
			  <?php /* ?>
			  <li class="nav-item <?php if($title == $this->lang->line('career')){ echo 'active'; } ?>">
			    <a class="nav-link" href="#"><?php echo $this->lang->line('career') ?></a>
			  </li>
			  <?php */ ?>
			  <li class="nav-item <?php if($title == $this->lang->line('contact')){ echo 'active'; } ?>">
			    <a class="nav-link" href="#"><?php echo $this->lang->line('contact') ?></a>
			  </li>
			  
			</ul>
     		</div>
     		<div class="col-md-12 col-lg-6 text-center text-lg-right">
     		&copy; All Right Discovered By <?php echo date('Y'); ?>. <a href="https://tangroup.id" id="footstep" target="_blank">Tan Group</a>
     		</div>
     </div>
     </div>
   </footer>


<script type="text/javascript">
$(function(){
$(".navbar-toggler").on('click', function(){
	<?php if($title == ''): ?>
	$(".navbar-brand").toggleClass('white');
	<?php endif; ?>
	$("#mobile-menu").toggleClass('show');
	$("body").toggleClass('noflow');
});
});
</script>

  </body>
</html>