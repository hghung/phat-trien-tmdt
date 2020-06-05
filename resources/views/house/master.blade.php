<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta Tag -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Uniland - Real Estate HTML5 Template">
<meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
<meta name="author" content="unicoder">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>@yield('tieude')</title>
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('public/house/img\favicon.ico')}}">

<!-- Required style of the theme -->

<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/bootstrap-4.1.3.min.css')}}">
<link rel="stylesheet" href="{{asset('public/house/css/bootstrap-select.min.css')}}">

<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/fontawesome-all-5.5.0.min.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/webfonts\flaticon\flaticon.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/style.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/layerslider.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/color.css')}}" id="color-change')}}">
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/jslider.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/responsive.css')}}">
<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/loader.css')}}">

<link rel="stylesheet" href="{{asset('public/house/skins/outline/skin.css')}}">

<!--===============================================================================================-->
<link rel="stylesheet" href="{{asset('public/house/css/settings.css')}}"> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css"> 

<!--=========================================Hiện thông báo============================================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

</head>
<body class="page-load">
<div class="preloader">
	<div class="loading-page">
		<div class="sk-circle">
		  <div class="sk-circle1 sk-child"></div>
		  <div class="sk-circle2 sk-child"></div>
		  <div class="sk-circle3 sk-child"></div>
		  <div class="sk-circle4 sk-child"></div>
		  <div class="sk-circle5 sk-child"></div>
		  <div class="sk-circle6 sk-child"></div>
		  <div class="sk-circle7 sk-child"></div>
		  <div class="sk-circle8 sk-child"></div>
		  <div class="sk-circle9 sk-child"></div>
		  <div class="sk-circle10 sk-child"></div>
		  <div class="sk-circle11 sk-child"></div>
		  <div class="sk-circle12 sk-child"></div>
		</div>
	</div>
</div>



<!-- Wrapper Start -->
<div id="page_wrapper" class="container-fluid">
	<div class="row">


		@include('house.header')
        
        @yield('house_content')

		@include('house.footer')
		
		@include('house.zalo')

        <!-- Find Part Satrt --> 
        <a href="#" id="scroll"><i class="fas fa-arrow-up"></i></a> 
        <!-- Find Part Satrt -->
	</div>
</div>
<!-- Wrapper End -->

<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/jquery-3.3.1.min.js')}}"></script> 
@yield('js_checkout')
<script src="{{asset('public/house/js/greensock.js')}}"></script>
<!-- LayerSlider script files -->
<script src="{{asset('public/house/js/layerslider.transitions.js')}}"></script>
<script src="{{asset('public/house/js/layerslider.kreaturamedia.jquery.js')}}"></script>
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/popper-1.14.3.min.js')}}"></script> 
<script src="{{asset('public/house/js/bootstrap-4.1.3.min.js')}}"></script> 
<script src="{{asset('public/house/js/bootstrap-select.min.js')}}"></script> 
<!--===============================================================================================--> 
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{asset('public/house/js/jquery.fancybox-media.js')}}"></script> 
<!--===============================================================================================--> 
<!-- Owl Carousel slide need--> 
<script src="{{asset('public/house/js/owl.js')}}"></script> 
<!--===============================================================================================--> 
<!-- Achievement Counting need--> 
<script src="{{asset('public/house/js/nsc.js')}}"></script> 
<!--===============================================================================================--> 
<!--tab gallery section--> 
<script src="{{asset('public/house/js/mixitup.js')}}"></script> 
<!--===============================================================================================-->
<script src="{{asset('public/house/js/wow.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('public/house/js/jquery.cookie.js')}}"></script>
<script src="{{asset('public/house/js/settings.js')}}"></script>
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/jshashtable-2.1_src.js')}}"></script> 
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/jquery.numberformatter-1.2.3.js')}}"></script> 
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/tmpl.js')}}"></script> 


<!--===============================================================================================--> 
<script src="{{asset('public/house/js/jquery.dependClass-0.1.js')}}"></script> 
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/draggable-0.1.js')}}"></script> 
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/jquery.slider.js')}}"></script> 
<!--===============================================================================================-->


<!--===============================================================================================--> 
<script src="{{asset('public/house/js/jquery.barrating.js')}}"></script> 
<!--===============================================================================================--> 
<script src="{{asset('public/house/js/custom.js')}}"></script> 

<!--===============================Hiện thông báo JS=============================================--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>


</body>
</html>