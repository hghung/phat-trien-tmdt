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
                        <a href="reservation-1.html"><span data-text="Chọn nhà "></span></a>
                    </li>
                    <li class="col-md-4">
                        <a href="reservation-2.html"><span data-text="Thông tin"></span></a>
                    </li>
                    <li class="col-md-4">
                        <a href="reservation-3.html"><span data-text="Thanh toán"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ===  Checkout === -->
    
    <div class="checkout ">

        <a href="{{ route('page.home') }}" style="margin: 10px 0px 0px 10px;  border-radius: 15px;" class="btn btn-primary">Quay lai </a>

        <div class="container">

            <div class="clearfix">

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

                    <!--cart final price -->

                    {{--  <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                <span class="checkbox">
                                    <input type="checkbox" id="couponCodeID">
                                    <label for="couponCodeID">Promo code</label>
                                    <input type="text" class="form-control form-coupon" value="" placeholder="Enter your coupon code">
                                </span>
                            </div>
                            <div>
                                <div class="h2 title">$ 1259,00</div>
                            </div>
                        </div>
                    </div>  --}}

                    <!-- ========================  Cart navigation ======================== -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                <a href="#" class="btn btn-clean-dark">Change</a>
                            </div>
                            <div>
                                <a href="{{ route('checkout-2') }}" class="btn btn-main">
                                    Tiếp theo 
                                    <span class="icon icon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!--/container-->
    </div> <!--/checkout-->

</section>


<script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
	   
{!! Toastr::message() !!}

<script src="{{ asset('public/checkout/js/bundle.min.js') }}"></script>


