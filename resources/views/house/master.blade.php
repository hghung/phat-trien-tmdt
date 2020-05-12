<!DOCTYPE html>
<!-- 
Template Name: Real Estate
Version: 1.0.0
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Real Estate Responsive HTML Template</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description" content="Real Estate">
	<meta name="keywords" content="Real Estate, Property template, Real Estate template, rent, sale, buy">
	<meta name="author" content="">
	<meta name="MobileOptimized" content="320">
	<!--srart theme style -->
	<link rel="stylesheet" type="text/css" href="{{asset('public/house/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/house/css/font-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/house/css/fonts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/house/css/owl.carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/house/css/owl.theme.default.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/house/css/jquery-ui.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/house/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/house/css/swiper.min.css')}}" >

	<!-- favicon links -->
	<link rel="shortcut icon" type="image/png" href="{{asset('public/house/img/favico.ico')}}">
</head>
<body>
@include('house.header')

@yield('content')
@include('house.footer')

<!--main js file start--> 
<script type="text/javascript" src="{{asset('public/house/js/jquery.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/house/js/jquery-ui.js')}}"></script> 

<script type="text/javascript" src="{{asset('public/house/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/house/js/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('public/house/js/custom.js')}}"></script> 

<script type="text/javascript" src="{{asset('public/house/js/Chart.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('public/house/js/swiper.min.js')}}" ></script>
<script type="text/javascript" src="{{asset('public/house/js/canva.js')}}" ></script> 

<!--main js file end-->
</body>
</html>