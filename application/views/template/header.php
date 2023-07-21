<?php 

$sparator = ($title == '') ? $title : ' :|: ';
$titleweb = $title . $sparator . web_settings('web_title'); 

if($lang == 'english')
{ 
  $en = 'active'; $uri_en = '#'; 
}
else
{
  $en = ''; $uri_en = base_url('en'); 
}

if($lang == 'indonesia')
{ 
  $id = 'active'; $uri_id = '#'; 
}
else
{
  $id = ''; $uri_id = base_url('id'); 
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#000000">
	<meta name="msapplication-TileColor" content="#000000">

    <title><?php echo $titleweb ?> </title>

    <meta name="description" content="<?php echo web_settings('web_descriptions'); ?>">
    <meta name="keywords" content="<?php echo web_settings('web_keywords'); ?>">

    <link rel="shortcut icon" href="<?php echo site_url('dist/assets/favicon/favicon.png') ?>">

    <link rel="stylesheet" href="<?php echo site_url('dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('dist/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('dist/css/style.css') ?>">
    <?php 
    foreach($css as $style){
      echo '<link rel="stylesheet" href="'.site_url('dist/css').'/'.$style.'.css">';
    }
    ?>

    <script type="text/javascript">
      var base_url = '<?php echo site_url() ?>';
    </script>
    <script src="<?php echo site_url('dist/js/jquery-3.3.1.min.js') ?>"></script>
    <script src="<?php echo site_url('dist/js/popper.min.js') ?>"></script>
    <script src="<?php echo site_url('dist/js/bootstrap.min.js') ?>"></script>
    <?php 
    foreach($js as $jquery){
      echo '<script src="'.site_url('dist/js').'/'.$jquery.'.js"></script>';
    }
    ?>
  </head>
  <body>

  <div id="mobile-menu">
  <div class="container">
    <ul>
      <li class="<?php if($title == ''){ echo 'active'; } ?>">
        <a href="<?php echo base_url() ?>"><?php echo $this->lang->line('home') ?></a>
      </li>
      <li class="<?php if($title == $this->lang->line('about')){ echo 'active'; } ?>">
        <a href="<?php echo base_url('about') ?>"><?php echo $this->lang->line('about') ?></a>
      </li>
      <li class="<?php if($title == $this->lang->line('brands')){ echo 'active'; } ?>">
        <a href="<?php echo base_url('brands') ?>"><?php echo $this->lang->line('brands') ?></a>
      </li>
      <li class="<?php if($title == $this->lang->line('contact')){ echo 'active'; } ?>">
        <a href="<?php echo base_url('contact') ?>"><?php echo $this->lang->line('contact') ?></a>
      </li>
    </ul>
  </div>
  </div>


   <header>
    <div class="nav-top">
      <div class="container">

          <a class="<?php echo $en ?>" href="<?php echo $uri_en ?>">EN</a> | <a class="<?php echo $id ?>" href="<?php echo $uri_id ?>">ID</a>

      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">

      <a class="navbar-brand <?php echo ($title == '') ? $title : 'white'; ?>" href="<?php echo base_url() ?>">
        <img src="<?php echo site_url('dist/assets/icon/tan-logo.png') ?>" alt="Tan Group">
      </a>
      <button class="navbar-toggler" type="button">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse d-none d-lg-block" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if($title == ''){ echo 'active'; } ?>">
            <a class="nav-link" href="<?php echo base_url() ?>"><?php echo $this->lang->line('home') ?></a>
          </li>
          <li class="nav-item <?php if($title == $this->lang->line('about')){ echo 'active'; } ?>">
            <a class="nav-link" href="<?php echo base_url('about') ?>"><?php echo $this->lang->line('about') ?></a>
          </li>
          <li class="nav-item <?php if($title == $this->lang->line('brands')){ echo 'active'; } ?>">
            <a class="nav-link" href="<?php echo base_url('brands') ?>"><?php echo $this->lang->line('brands') ?></a>
          </li>
          <?php /* ?>
          <li class="nav-item <?php if($title == $this->lang->line('career')){ echo 'active'; } ?>">
            <a class="nav-link" href="<?php echo base_url('career') ?>"><?php echo $this->lang->line('career') ?></a>
          </li>
          <?php */ ?>
          <li class="nav-item <?php if($title == $this->lang->line('contact')){ echo 'active'; } ?>">
            <a class="nav-link" href="<?php echo base_url('contact') ?>"><?php echo $this->lang->line('contact') ?></a>
          </li>
        </ul>
      </div>
    </div>
    </nav>
   </header>
   
   <section id="content">

