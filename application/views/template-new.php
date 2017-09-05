
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>


	 <!-- Metas -->
        <meta charset="utf-8">
        <title>Curriculum Vitae</title>
        <meta name="description" content="">
      	<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Css -->
    <link href="<?= base_url(); ?>assets/vcard/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="<?= base_url(); ?>assets/vcard/css/owl-carousel/owl.carousel.css" rel="stylesheet"  media="all">
		<link href="<?= base_url(); ?>assets/vcard/css/owl-carousel/owl.theme.css" rel="stylesheet"  media="all">
		<link href="<?= base_url(); ?>assets/vcard/css/magnific-popup.css" type="text/css" rel="stylesheet" media="all" />
		<link href="<?= base_url(); ?>assets/vcard/css/font.css" rel="stylesheet" type="text/css"  media="all">
		<link href="<?= base_url(); ?>assets/vcard/css/fontello.css" rel="stylesheet" type="text/css"  media="all">
		<link href="<?= base_url(); ?>assets/vcard/css/base.css" rel="stylesheet" type="text/css" media="all"/>
		<link href="<?= base_url(); ?>assets/vcard/css/main.css" rel="stylesheet" type="text/css" media="all"/>



        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="css/ie9.css" />
		<![endif]-->
    </head>
    <section class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <img src="<?php echo base_url('assets/img/logo-teknik.png')?>"/>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <ul class="social-icons1">
              <li style="text-align:right"><a href="<?php echo site_url('/')?>" class="btn btn-danger" role="button">Back</a></li>

            </ul>
          </div>
        </div>
      </div>
    </section>
    <body>







<!--Wrapper-->
<div id="wrapper" class="margLTop  margLBottom">

	<!--Container-->
	<div class="container">




			<div class="row ">




		<!--Left content-->

		<div class="col-md-3 nopr left-content">

	<!--Header-->
	<header id="header">





					<!--Main header-->
					<div class="main-header">

					<!--Profile image-->
					<figure class="img-profile" align="center">
						<!--<img src="img/profile.jpg" alt=""/>-->
            <img src="<?= base_url() . $identitas->foto_path.$identitas->foto; ?>">
            <!--
						<figcaption class="name-profile">
							<span><?= $identitas->nama_lengkap ?></span>
						</figcaption>
          -->
					</figure>
					<!--End profile image-->



							<!--Main navigation-->
								<nav id="main-nav" align="center">

								<ul>
                  <li><a href="identitas" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-user"></i> <span>Identitas Diri</span></a></li>
                  <li><a href="pendidikan" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-graduation-cap"></i> <span>Riwayat Pendidikan</span></a></li>
                  <li><a href="pekerjaan" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-briefcase"></i> <span>Riwayat Pekerjaan</span></a></li>
                  <li><a href="penelitian" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-search"></i> <span>Penelitian</span></a></li>
                  <li><a href="pengabdian" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-leaf"></i> <span>Pengabdian Masyarakat</span></a></li>
                  <li><a href="publikasi" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-pencil"></i> <span>Publikasi Ilmiah</span></a></li>
                  <li><a href="bukuteks" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-book"></i> <span>Buku Teks</span></a></li>
                  <li><a href="penghargaan" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-bookmark"></i> <span>Penghargaan</span></a></li>
                  <li><a href="seminar" style="margin-top:5px;margin-bottom:5px" class="btn btn-primary btn-block"><i class="icon-share"></i> <span>Nara Sumber</span></a></li>
								</ul>

								</nav>
							<!--End main navigation-->




				</div>
				<!--End main header-->

				<div class="bottom-header bgWhite ofsTSmall ofsBSmall tCenter">
					<ul class="social">
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>


				</ul>

				<p>&copy; 2017 Fakultas Teknik UNDIP.</p>

				</div>




		</header>
		<!--End  header-->


		</div>
		<!--End left content-->



			<!--Right content-->
			<div class="col-md-9 right-content">



						<!--About Tab-->
					<section id="about" class="bgWhite ofsInBottom">

						<!--About -->
						<div class="about">

							<!--Main title-->


							<!--End main title-->




						<!--Content-->

            <?php $this->load->view($content); ?>

						<!--End content-->








          </div>
        </section>
		</div>
		<!--End right content-->


			</div>
			<!--End  row-->


		</div>
		<!--End  container-->




</div>
<!--End wrapper-->



<!--Javascript-->
<!--
<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="js/jquery-migrate-1.2.1.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="js/jquery.easytabs.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/modernizr.js" type="text/javascript"></script>
<script src="js/placeholders.min.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>


<script>

(function($) {
  "use strict";

$(document).ready(function(){

	$('#wrapper').easytabs({
	animate			: true,
	updateHash		: false,
	transitionIn	:'fadeIn',
	transitionOut	:'fadeOut',
	animationSpeed	:100,
	tabActiveClass	:'active',
	tabs            :' #main-nav.tabbed > ul > li ',
	transitionInEasing: 'linear',
  	transitionOutEasing: 'linear'

});


//---------------------------------- Google map location -----------------------------------------//


$('#wrapper').bind('easytabs:after', function() {




		var styles = [
				        {
				            stylers: [
				                { saturation: -100 }

				            ]
				        },{
				            featureType: 'road',
				            elementType: 'geometry',
				            stylers: [
				                { hue: "#74b7b0" },
				                { visibility: 'simplified' }
				            ]
				        },{
				            featureType: 'road',
				            elementType: 'labels',
				            stylers: [
				                { visibility: 'on' }
				            ]
				        }
				      ],

				       lat = -33.867487,
				       lng = 151.20699,





				      customMap = new google.maps.StyledMapType(styles,
				          {name: 'Styled Map'}),


				      mapOptions = {
				          zoom: 14,
						scrollwheel: false,
						disableDefaultUI: true,
				          center: new google.maps.LatLng( lat, lng ),
				          mapTypeControlOptions: {
				              mapTypeIds: [google.maps.MapTypeId.ROADMAP]
				          }
				      },
				      map = new google.maps.Map(document.getElementById('map'), mapOptions),
				      myLatlng = new google.maps.LatLng( lat, lng ),




				      marker = new google.maps.Marker({
				        position: myLatlng,
				        map: map,
						icon: {
						            url: 'img/marker.png',
						            scaledSize: new google.maps.Size(26, 42)
						        }
				      });





				      map.mapTypes.set('map_style', customMap);
				      map.setMapTypeId('map_style');




});









//---------------------------------- End google map location -----------------------------------------//


});

})(jQuery);

</script>


<!-- Google analytics -->


<!-- End google analytics -->


    </body>
</html>
