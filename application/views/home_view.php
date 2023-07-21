<section id="content">
<div id="homeSlider" class="carousel slide carousel-fade" data-ride="carousel">
  
  <div class="carousel-inner">

    <div class="carousel-item active" style="background-image: url('<?php echo base_url('dist/assets/banner/1.jpg') ?>');">
    <div class="overlay"></div>
    <div class="slashverlay"></div>
    <div class="container h-parent">
      <div class="caption-slider h-parent">
          <div class="table-cell">
          <div class="wrap">
          <h3>TAN GROUP</h3>
          <p>Established in 2012, TAN Group is the conceptor and forerunner of several renowned hangout spots in South Jakarta. Through its continuous innovation and fresh concepts ...</p>
          <a href="<?php echo base_url('about') ?>" class="btn-read-more"><?php echo $this->lang->line('readmore') ?></a>
          </div>
          </div>
      </div>
    </div>
    </div>
    <?php for ($i=2; $i < 7; $i++) {  ?>
    <div class="carousel-item" style="background-image: url('<?php echo base_url('dist/assets/banner/').$i.'.jpg' ?>');">
    <div class="overlay"></div>
    <div class="slashverlay"></div>
    <div class="container h-parent">
      <div class="caption-slider h-parent">
          <div class="table-cell">
          <div class="wrap">
          <h3>TAN GROUP</h3>
          <p>Established in 2012, TAN Group is the conceptor and forerunner of several renowned hangout spots in South Jakarta. Through its continuous innovation and fresh concepts ...</p>
          <a href="<?php echo base_url('about') ?>" class="btn-read-more"><?php echo $this->lang->line('readmore') ?></a>
          </div>
          </div>
      </div>
    </div>
    </div>
    <?php } ?>
    <?php 
    /*/
    foreach ($brands as $key => $value) {
    ?>
    <div class="carousel-item" style="background-image: url('<?php echo base_url('dist/assets/banner/').$value['image'] ?>');">
    <div class="overlay"></div>
    <div class="slashverlay"></div>
    <div class="container h-parent">
      <div class="caption-slider h-parent">
          <div class="table-cell">
          <div class="wrap">
          <h3><?php echo $value['name'] ?></h3>
          <p><?php echo limitChar($value['content'], 120); ?></p>
          <a href="<?php echo base_url('brands/').$value['seo_url'] ?>" class="btn-read-more"><?php echo $this->lang->line('readmore') ?></a>
          </div>
          </div>
      </div>
    </div>
    </div>
    <?php } /*/?>

  </div>

  <div class="container" style="position: relative;">
  <ol class="carousel-indicators">
    <?php for ($i=0; $i < 6; $i++) { 
        $actc = ($i == 0) ? 'active' : '';
      echo '<li data-target="#homeSlider" data-slide-to="'.$i.'" class="'.$actc.'"></li>';
    } ?>
  </ol>
  </div>
</div>


<div class="welcome">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
    <h1 class="title text-center"><?php echo $this->lang->line('about_us') ?></h1>
    <p>Established in 2012, TAN Group is the conceptor and forerunner of several renowned
hangout spots in South Jakarta. Through its continuous innovation and fresh concepts,
our company aims to lead the hospitality field in Indonesia by consistently growing its
presence in the Food, Beverages & Lifestyle industry under PT. Tri Agung Nusantara
Manajemen</p>
    <div class="spoil" style="background-image: url('<?php echo base_url('dist/assets/banner/').$about['image'] ?>')">
    </div>
    <div class="text-center">
      <a href="<?php echo base_url('about') ?>" class="btn-read-more"><?php echo $this->lang->line('readmore') ?></a>
    </div>
    </div>
  </div>  
</div>
</div>

<div class="members">
<div class="container">
    <h2 class="title"><?php echo $this->lang->line('brands') ?></h2>
    <p>Tan Group Outlets123</p>
    <div class="row row-mar">
        <?php 
        foreach ($brands as $key => $value) {
        ?>
        <div class="col-md-4 col-pad">
        <div class="flip-card">
        <a href="<?php echo base_url('brands/').$value['seo_url'] ?>">
          <div class="flip-card-inner">
            <div class="flip-card-front" style="background-image: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.3)), url('<?php echo base_url('dist/assets/members/').$value['image_3'] ?>');">
              <img src="<?php echo base_url('dist/assets/members/dom.png') ?>" alt="">
              <div class="fixcenter">
                  <h4 class="text-uppercase"><?php echo $value['name'] ?></h4>
              </div>
            </div>
            <div class="flip-card-back" style="background-image: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.3)), url('<?php echo base_url('dist/assets/members/').$value['image_3'] ?>');">
              <div class="fixcenter">
                  <img style="width:175px;" src="<?php echo base_url('dist/assets/members/').$value['image_2'] ?>" alt="">
              </div>
            </div>
          </div>
          </a>
        </div>
        </div>
        <?php } ?>

    </div>
</div>
</div>


</section>
