<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SPS | @yield('tieude')</title>
    <link rel="icon" href="{{asset('public/admin/logo1_1.ico')}}" type="image/x-icon">


    <!-- ============ css ============= -->
    <link href="{{asset('public/admin/css/css-family=Nunito-300,400,400i,600,700,800,900.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.css" />

    <link href="{{asset('public/admin/css/lite-purple.css')}}" rel="stylesheet" />
    <link href="{{asset('public/admin/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('public/admin/css/fontawesome-5.css')}}" />
    <link href="{{asset('public/admin/css/metisMenu.min.css')}}" rel="stylesheet" />




</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        @include('admin/header')

        <div class="main-content-wrap sidenav-open d-flex flex-column">
            
            @yield('content')

        </div>
    </div>

    <!-- ============ JS ============= -->
    <script src="{{asset('public/admin/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/admin/js/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('public/admin/js/tooltip.script.min.js')}}"></script>
    <script src="{{asset('public/admin/js/script.min.js')}}"></script>
    <script src="{{asset('public/admin/js/script_2.min.js')}}"></script>
    <script src="{{asset('public/admin/js/sidebar.large.script.min.js')}}"></script>
    <script src="{{asset('public/admin/js/feather.min.js')}}"></script>
    <script src="{{asset('public/admin/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('public/admin/js/layout-sidebar-vertical.min.js')}}"></script>
    




    
</body>

</html>