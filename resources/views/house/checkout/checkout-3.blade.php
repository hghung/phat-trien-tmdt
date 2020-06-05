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
    @if(session('errors'))
        <div class="alert alert-danger">  {{session('errors')}}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">  {{session('success')}}</div>
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
                                                <span>John Doe</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>CMND / Căn cước</strong><br>
                                                <span>12345689</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Phone</strong><br>
                                                <span>+122 523 352</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Email</strong><br>
                                                <span>johndoe@company.com</span>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Địa chỉ</strong><br>
                                                <span>795 Folsom Ave, Suite 600</span>
                                            </div>
                                        </div>

                                       

                                    </div>

                                    <div class="h4">Thông tin hợp đồng</div>

                                    <hr>

                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <strong>Mã hợp đồng</strong> <br>
                                                <span>52522-63259226</span>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <strong>Mã bảng tin</strong> <br>
                                                <span>2265996</span>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <strong>Mã nhà</strong> <br>
                                                <span>2265996</span>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <strong>Thời gian thuê</strong> <br>
                                                <span>6 tháng</span>
                                            </div>
                                        </div>

                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <strong>Ngày đến</strong> <br>
                                                <span>06/30/2017</span>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <strong>Thời gian kết thúc</strong> <br>
                                                <span>07/30/2017</span>
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
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Họ & Tên</strong> <br>
                                                <span>John Doe</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>CMND / Căn cước</strong><br>
                                                <span>12345689</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Phone</strong><br>
                                                <span>+122 523 352</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Email</strong><br>
                                                <span>johndoe@company.com</span>
                                            </div>
                                        </div>

                                        

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <strong>Địa chỉ</strong><br>
                                                <span>795 Folsom Ave, Suite 600</span>
                                            </div>
                                        </div>

                                       

                                    </div>

                                    <div class="h4">Chi tiết thanh toán</div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Mã giao dịch</strong> <br>
                                                <span>12345678</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Thời gian giao dịch</strong> <br>
                                                <span>06/30/2017 at 00:59</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Số tiền</strong><br>
                                                <span>$ 1259,00</span>
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
                                                <span>Luxury appartment</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ========================  Cart wrapper ======================== -->

                <div class="cart-wrapper col-md-12">

                    

                    <div class="cart-block cart-block-header clearfix">
                        <div>
                            <span>Loại nhà</span>
                        </div>
                        <div class="text-right">
                            <span>Giá</span>
                        </div>
                    </div>

                    <!--cart items-->
                    @foreach($cart as $checkout)
                    <div class="clearfix" style="margin-bottom: 10px;">

                        <div class="cart-block cart-block-item clearfix">
                            <div class="image">
                                <a href="room-overview.html">
                                    <img style="height: 363px; width: 634px;" src="{{asset('public/upload/')}}/{{$checkout->options->img}}" alt="">
                                </a>
                            </div>
                            <div class="title">
                                <div class="h2">
                                    <a href="room-overview.html">{{ $checkout->name }}</a>
                                </div>
                                <p>
                                    <strong>Ngày đến</strong> <br> 
                                    <a href="#">( {{ date("d-m-Y",strtotime($checkout->options->ngayden ))  }} )
                                    </a>
                                    
                                </p>
                                <p>
                                    <strong>Thời gian thuê</strong> <br>
                                    <a href="#">( {{ $checkout->options->thoigiano    }} tháng )
                                    </a>
                                </p>
                                <p>
                                    <strong>Địa chỉ</strong> <br> 
                                    {{ $checkout->options->address    }}
                                </p>
                            </div>
                            <div class="price">
                                <span class="final h4" style="width:230px;">{{ number_format($checkout->price,0,',','.') }} đ/tháng</span>
                                {{--  <span class="discount">$ 2.666</span>  --}}
                            </div>
                            <!--delete-this-item-->
                            
                                <a href="{{Route('delcart',['id' => $checkout->rowId])}}" onclick="return confirm('Bạn có muốn xóa không ?')"><i class="icon icon-cross icon-delete"></i> </a>
                            

                            

                        </div>

                    </div>

                    @endforeach

                    <!--cart prices -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Tiền thuê</strong>
                            </div>
                            <div>
                                <span>{{ number_format($checkout->options->thoigiano * $checkout->price,0,',','.') }} đ</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>Giảm
                                    <span style="color:blue"> 5% </span>

                                </strong>
                            </div>
                            <div>
                                <span>{{ number_format( $checkout->options->discount ,0,',','.') }} đ</span>
                            </div>
                        </div>

                        {{--  thuế  --}}
                        

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <div class="h2 title">Tồng tiền</div>
                            </div>
                            <div>
                                <div class="h2 title">{{ number_format($checkout->options->tongtien ,0,',','.') }} đ</div>
                            </div>
                        </div>
                    </div>
                    <!-- ========================  Cart navigation ======================== -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                <a href="reservation-1.html" class="btn btn-clean-dark">Back</a>
                            </div>
                            <div>
                                <a onclick="window.print()" class="btn btn-main">Print <span class="icon icon-printer"></span></a>
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
</body>

</html>