<div class="banner-header" style="background-image: linear-gradient(#000000, transparent), url('<?php echo base_url('dist/assets/banner/TAN.jpg') ?>');">
<h1 class="bg-title"><span><?php echo $this->lang->line('brands') ?></span></h1>
</div>

<div class="members members-page">
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8 text-center mb-5">
		Tan Group's charm at establishing enticing outlets has resulted in the birth of intriguing places
like Big Brother, Nara, Glass House, The Brotherhood, The Neighbourhood, and Kenjiro. The
journey doesn't stop here, Tan Group will be launching more outlets in the upcoming months.
		</div>
	</div>
    <div class="row row-mar">

        <?php 
        foreach ($brands as $key => $value) {
        ?>
        <div class="col-md-4 col-pad">
        <div class="flip-card" style="margin-bottom: 15px;">
        <div class="mod-details-pop" style="cursor: pointer;" data-title="<?php echo $value['seo_url'] ?>">
          <div class="flip-card-inner">
            <div class="flip-card-front" style="background-image: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.3)), url('<?php echo base_url('dist/assets/members/').$value['image_3'] ?>');">
              <img src="<?php echo base_url('dist/assets/members/dom.png') ?>" alt="">
              <div class="fixcenter">
                  <h4><?php echo $value['name'] ?></h4>
              </div>
            </div>
            <div class="flip-card-back" style="background-image: linear-gradient(rgb(0, 0, 0), rgba(0, 0, 0, 0.3)), url('<?php echo base_url('dist/assets/members/').$value['image_3'] ?>');">
              <div class="fixcenter">
                  <img style="width:175px;" src="<?php echo base_url('dist/assets/members/').$value['image_2'] ?>" alt="">
              </div>
            </div>
          </div>
          </div>
        </div>
        </div>
        <?php } ?>

    </div>
</div>
</div>


<div id="member-details">
<div class="container">
	<bottom class="details-close">Close X</bottom>
	<div class="details-body">
	
	</div>
</div>
</div>


<script type="text/javascript">

$.noConflict;

function datacontent(seo){
	$.get("<?php echo base_url('brand/content') ?>", {'seo_url': seo}, function(data) {
    	$('body').addClass('noflow');
		$("#slider-pop").carousel();
		$('#member-details').addClass('active');
		$('#member-details').find('.details-body').html(data.content);

		window.history.pushState(null, "Title", base_url+'brands/'+seo);
		$(document).attr("title", data.nama+' :|: <?php echo web_settings('web_title') ?>');

    },'json');
}

$(function(){

<?php if($pop <> FALSE): ?>
var seo = "<?php echo $pop ?>";
datacontent(seo);
<?php endif; ?>

$('.mod-details-pop').on('click', function(){
	var title   = $(this).data('title');
	datacontent(title);
});

$('.details-close').on('click', function(e){
e.preventDefault();
	$('body').removeClass('noflow');
	$('#member-details').removeClass('active');
	window.history.pushState(null, "Title", base_url+'brands');
	$(document).attr("title", 'Brands :|: <?php echo web_settings('web_title') ?>');
});
});
</script>