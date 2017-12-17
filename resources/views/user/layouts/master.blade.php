<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ url('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="source/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="source/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="source/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/style.css">
	<link rel="stylesheet" href="source/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="source/assets/dest/css/huong-style.css">
</head>
<body>

	<div id="header">
	   @include('user.layouts.header')

	   @include('user.layouts.menu')
	</div> <!-- #header -->

	<div class="rev-slider">
	    @include('user.layouts.slider')
				<!--slider-->
	</div>

  <div class="container">
			<div id="store-messages">
		        <div class="message col-lg-3 col-sm-6 col-xs-12"><span class="icon"> <img src="img/doi-hang-icon.png" alt=""> </span> <span><strong>MIỄN PHÍ &amp; ĐỔI TRẢ 3 NGÀY</strong></span> </div>
		        <div class="message col-lg-3 col-sm-6 col-xs-12"><span class="icon"> <img src="img/ship-hang-icon.png" alt=""> </span><span><strong>MIỄN PHÍ GIAO HÀNG NỘI THÀNH</strong></span> </div>
		        <div class="message col-lg-3 col-sm-6 col-xs-12"><span class="icon"> <img src="img/thanh-toan-icon.png" alt=""> </span><span><strong>THANH TOÁN KHI NHẬN HÀNG</strong></span> </div>
		        <div class="message col-lg-3 col-sm-6 col-xs-12"><span class="icon"> <img src="img/support-icon.png" alt=""> </span><span><strong>GIÚP ĐỠ</strong> +01214543588</span> </div>
		  </div>
	</div>


	@yield('content')
 <!-- .container -->

	<!--footer-->
	  @include('user.layouts.footer')
 <!--footer-->


	<!-- include js files -->
	<script src="source/assets/dest/js/jquery.js"></script>
	<script src="source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="{{ url('/js/bootstrap.min.js')}}"></script>
	<script src="source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="source/assets/dest/vendors/animo/Animo.js"></script>
	<script src="source/assets/dest/vendors/dug/dug.js"></script>
	<script src="source/assets/dest/js/scripts.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="source/assets/dest/js/waypoints.min.js"></script>
	<script src="source/assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="source/assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
