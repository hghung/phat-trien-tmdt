<!DOCTYPE html>

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('public/page/img/favicon.ico')}}"  type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('public/page/img/icon.png')}}" >
    <title>BOOKSTORE || @yield('title') </title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/page/css/bootstrap.min.css')}}" >

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('public/page/css/font-awesome.min.css')}}">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="{{asset('public/page/css/plugins.css')}}" >

    <!-- style css -->
    <link rel="stylesheet" href="{{asset('public/page/css/main.css')}}" >

    <!-- modernizr JS
    ============================================ -->
    <script src="{{asset('public/page/js/modernizr-2.8.3.min.js')}}" ></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    
    
    

</head>

<body>




@include('page.header')

@yield('page_content')

@include('page.footer')

  


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->

    <script src="{{asset('public/page/js/jquery.min.js')}}"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> --}}

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="{{asset('public/page/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('public/page/js/plugins.js')}}"></script>

    <!-- Ajax Mail JS -->
    <script src="{{asset('public/page/js/ajax-mail.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('public/page/js/main.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"></script>

    
    
</body>

</html>