@section('tieude','Danh sách bảng tin')
{{--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  --}}

<link rel="stylesheet" media="all" href="{{ asset('public/checkout/css\bundle.min.css') }}">


<br>
<section class="page col-md-12">

    <div class="page-header" style="background-image:url({{ asset('public/checkout/assets/images/header-1.jpg') }})">
        <div class="container">
            <h2 class="title">Checkout</h2>
            <p>Proceed to booking step 2</p>
        </div>
    </div>

    <!-- ===  Checkout steps === -->

    <div class="step-wrapper ">
        <div class="container">
            <div class="stepper">
                <ul class="row">
                    <li class="col-md-4 active" >
                        <a href="#"><span data-text="Chọn nhà "></span></a>
                    </li>
                    <li class="col-md-4 active">
                        <a href="#"><span data-text="Thông tin & Thanh toán"></span></a>
                    </li>
                    <li class="col-md-4 active">
                        <a href="#"><span data-text="Hoàn tất"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ===  Checkout === -->
    @if(session('contract'))
        <div class="alert alert-success">  {{session('contract')}}</div>
    @endif
    <div class="checkout ">
        
        <div class="container">

            <div class="clearfix">

                <!-- ========================  Note block ======================== -->

                <div class="cart-wrapper">

                    <div class="note-block">

                        <div class="row">
                            <!-- === left content === -->

                            <div class="col-md-6">

                                <div class="white-block">

                                    <div class="h4">Thông tin khách hàng</div>

                                    <hr>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Họ & Tên</strong> <br>
                                                <span>{{ $hopdong->user1_hoten }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>CMND / Căn cước</strong><br>
                                                <span>{{ number_format($hopdong->user1_cmnd,0,',',' ') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Phone</strong><br>
                                                <span>0{{ number_format($hopdong->user1_phone,0,',',' ') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Email</strong><br>
                                                <span>{{ $hopdong->user1_email }}</span>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Địa chỉ</strong><br>
                                                <span>{{ $hopdong->user1_diachi }}</span>
                                            </div>
                                        </div>

                                       

                                    </div>

                                    <div class="h4">Thông tin hợp đồng</div>

                                    <hr>

                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <strong>Mã hợp đồng</strong> <br>
                                                <span>
                                                    <a href="#">{{ $hopdong->ma_hopdong }}
                                                    </a>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <strong>Mã bảng tin</strong> <br>
                                                <span>
                                                    <a href="#">{{ $hopdong->ma_bangtin }}
                                                    </a>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <strong>Mã nhà</strong> <br>
                                                <span>
                                                    <a href="#">{{ $hopdong->ma_nha  }}
                                                    </a>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <strong>Thời gian thuê</strong> <br>
                                                <span>{{ $hopdong->thoi_gianthue  }} tháng</span>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <strong>Ngày bắt đầu</strong> <br>
                                                <span>{{ date("d-m-Y",strtotime($hopdong->time_start )) }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <strong>Thời gian kết thúc</strong> <br>
                                                <span>{{ date("d-m-Y",strtotime($hopdong->time_end )) }}</span>
                                            </div>
                                        </div>

                                    </div>

                                </div> 

                            </div>
                            

                            <!-- === right content === -->
                            <div class="col-md-6">
                                <div class="white-block">

                                    <div class="h4">Thông tin chủ nhà</div>
                                    <hr>
                                    {{-- thông tin chủ nhà --}}

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Họ & Tên</strong> <br>
                                                <span>{{ $hopdong->user2_hoten }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>CMND / Căn cước</strong><br>
                                                <span>{{ number_format($hopdong->user1_cmnd,0,',',' ') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Phone</strong><br>
                                                <span>0{{ number_format($hopdong->user2_phone,0,',',' ') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Email</strong><br>
                                                <span>{{ $hopdong->user2_email }}</span>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Địa chỉ</strong><br>
                                                <span>{{ $hopdong->user2_diachi }}</span>
                                            </div>
                                        </div>

                                       

                                    </div>
                                    
                                    <div class="h4">Chi tiết thanh toán</div>

                                    <hr>
                                    {{-- thông tin thanh toán --}}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Mã giao dịch</strong> <br>
                                                <span>{{ $hopdong->ma_giaodich }}8</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Thời gian giao dịch</strong> <br>
                                                <span>{{ date("d-m-Y  H:i:s A",strtotime($hopdong->time_giao_dich ))  }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Số tiền</strong><br>
                                                <span>{{ number_format($hopdong->tien,0,',','.') }} VNĐ</span>
                                            </div>
                                        </div>



                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Cart details</strong><br>
                                                <span>**** **** **** 5446</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Loại nhà</strong><br>
                                                <span>{{ $hopdong->loainha }}</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ========================  Cart wrapper ======================== -->

                
            </div>

            </div> <!--/container-->
        </div> <!--/checkout-->

</section>




    <!--JS files-->
    <script src="js\bundle.min.js"></script>
    <script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
       
    {!! Toastr::message() !!}

</html>