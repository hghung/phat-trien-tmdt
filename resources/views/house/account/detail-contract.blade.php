@section('tieude','Danh sách bảng tin')
{{--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">  --}}

<link rel="stylesheet" media="all" href="{{ asset('public/checkout/css\bundle.min.css') }}">


<br>
<section class="page col-md-12">
    
    <div class="page-header" style="background-image:url({{ asset('public/checkout/assets/images/header-1.jpg') }})">
        
        <div class="container">
            <h2 class="title">Chi tiết hợp đồng {{ $hopdong->ma_hopdong }}</h2>
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

    <div class="checkout ">
        
        <a href="{{ route('taikhoan.hopdong') }}" style="margin: 10px 0px 0px 10px; border-radius: 15px; " class="btn btn-primary" >Quay lại </a>

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
                                    @if($hopdong->id_thanhtoan == 1)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Phương thức thanh toán</strong><br>
                                                <span style="color:red">{{ $hopdong->thanhtoan->phuong_thuc }}</span>
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
                                                <strong>Loại nhà</strong><br>
                                                <span>{{ $hopdong->loainha }}</span>
                                            </div>
                                        </div>

                                        

                                    </div>
                                    @else
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Mã giao dịch</strong> <br>
                                                <span>{{ $hopdong->ma_giaodich }}8</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Phương thức thanh toán</strong><br>
                                                <span style="color:red">{{ $hopdong->thanhtoan->phuong_thuc }}</span>
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
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ========================  Cart wrapper ======================== -->
                <div class="cart-wrapper col-md-12">

                    <!--cart header -->

                    <div class="cart-block cart-block-header clearfix">
                        <div>
                            <span>Loại nhà</span>
                        </div>
                        <div class="text-right">
                            <span>Giá</span>
                        </div>
                    </div>

                    <!--cart items-->
                    <div class="clearfix" style="margin-bottom: 10px;">

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="room-overview.html">
                                    <img style="height: 363px; width: 634px;" src="{{asset('public/upload/')}}/{{$hopdong->bangtin2->house->hinh_anh}}" alt="">
                                </a>
                            </div>
                            <div class="title">
                                <div class="h2">
                                    <a href="room-overview.html">{{ $hopdong->bangtin2->ten_bangtin }}</a>
                                </div>
                                <p>
                                    <strong>Ngày đến</strong> <br> 
                                    <a href="#">( {{ date("d-m-Y",strtotime($hopdong->time_start ))  }} )
                                    </a>
                                    
                                </p>
                                <p>
                                    <strong>Thời gian thuê</strong> <br>
                                    <a href="#">( {{ $hopdong->thoi_gianthue }} tháng )
                                    </a>
                                </p>
                                <p>
                                    <strong>Địa chỉ</strong> <br> 
                                    {{ $hopdong->bangtin2->house->dia_chi    }}
                                </p>
                            </div>
                            <div class="price">
                                <span class="final h4" style="width:230px;">{{ number_format($hopdong->bangtin2->gia_thue,0,',','.') }} đ/tháng</span>
                                {{--  <span class="discount">$ 2.666</span>  --}}
                            </div>
                            <!--delete-this-item-->
                            
                                
                            

                            

                        </div>

                    </div>


                    <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Tiền thuê</strong>
                            </div>
                            <div>
                                <span>{{ number_format($hopdong->thoi_gianthue * $hopdong->bangtin2->gia_thue,0,',','.') }} đ</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Giảm
                                    <span style="color:blue"> 5% </span>

                                </strong>
                            </div>
                            <div>
                                <span>{{ number_format($hopdong->thoi_gianthue * $hopdong->bangtin2->gia_thue* 5 / 100 ,0,',','.') }} đ</span>
                            </div>
                        </div>

                        {{--  thuế  --}}
                        

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <div class="h2 title">Tồng tiền</div>
                            </div>
                            <div>
                                <div class="h2 title">{{ number_format($hopdong->tien ,0,',','.') }} đ</div>
                            </div>
                        </div>
                    </div>

                    <!--cart final price -->

                    <!-- ========================  Cart navigation ======================== -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                @if($hopdong->trang_thai == 1)
                                <a href="#" style="color:red" class="btn btn-danger">Hủy hợp đồng</a>
                                @else
                                    <a href="#"  class="btn btn-main">Liên hệ</a>
                                @endif
                                
                            </div>
                            <div>
                                    @if($hopdong->trang_thai == 1)
                                        <a href="#" style="color:goldenrod" class="btn btn-main">
                                        Đang xử lý</a>
                                    @elseif($hopdong->trang_thai == 2)
                                        <a href="#" style="color:palevioletred"class="btn btn-main">
                                        Đang xử lý</a>
                                    @elseif($hopdong->trang_thai == 3)
                                        <a href="#" style="color:palegreen" class="btn btn-main">
                                        Đang xử lý</a>
                                    @elseif($hopdong->trang_thai == 4)
                                        <a href="#"  class="btn btn-main">
                                        Đã hủy</a>
                                    @endif
                                    
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                
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