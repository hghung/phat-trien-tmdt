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
                    <li class="col-md-4 active">
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

      

        <div class="container">

            <div class="clearfix">

                <!-- ========================  Note block ======================== -->

                <div class="cart-wrapper">

                    <div class="note-block">

                        <div class="row">

                            <!-- === left content === -->

                            <div class="col-md-6">

                                <!-- === login-wrapper === -->

                                <div class="login-wrapper">

                                    <div class="white-block">


                                        <div class="login-block login-block-signup">

                                            <div class="h4">Thông tin <a href="{{ route('taikhoan.profile') }}" class="btn btn-success btn-xs btn-login pull-right">Cập nhật</a></div>

                                            <hr>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="{{ Auth::user()->member->kh_ten }}" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="{{ Auth::user()->member->kh_ho }}" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <input type="text" value="{{Auth::user()->member->kh_address}}, {{Auth::user()->member->ward->ward_prefix}} {{Auth::user()->member->ward->ward_name}}, {{Auth::user()->member->district->district_prefix}} {{Auth::user()->member->district->district_name}}, {{Auth::user()->member->province->province_name}}" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" value="{{ number_format(Auth::user()->member->kh_cmnd,0,',',' ') }}" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" value="{{ Auth::user()->member->kh_email }}" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="{{ date("d-m-Y",strtotime(Auth::user()->member->kh_birthday)) }}" class="form-control" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" value="0{{ number_format(Auth::user()->member->kh_phone,0,',',' ') }}" class="form-control" readonly>
                                                    </div>
                                                </div>

                                            </div>
                                        </div> <!--/signup-->
                                    </div>
                                </div> <!--/login-wrapper-->
                            </div> <!--/col-md-6-->
                            <!-- === right content === -->

                            {{--  start payment  --}}
                            <div class="col-md-6">

                                <div class="white-block">

                                    <div class="h4">Chọn phương thức thanh toán</div>

                                    <hr>

                                    <span class="checkbox">
                                        <input type="radio" id="paymentCart" name="paymentOption">
                                        <label for="paymentCart">
                                            <strong>Pay via credit cart</strong> <br>
                                            <small>(MasterCard, Maestro, Visa, Visa Electron, JCB and American Express)</small>
                                        </label>
                                    </span>

                                    <span class="checkbox">
                                        <input type="radio" id="paymentPayPal" name="paymentOption">
                                        <label for="paymentPayPal">
                                            <strong>VN-Pay</strong> <br>
                                            <small>Purchase with your fingertips. Look for us the next time you re paying from a mobile app, and checkout faster on thousands of mobile websites.</small>
                                        </label>
                                    </span>

                                    @php
                                        
                                        foreach($cart as $checkout)
                                        {
                                            $tongtien2 = $checkout->options->tongtien;
                                        }

                                    @endphp

                                    <div class="payment payment-paypal">
                                        <div class="table-responsive">
                                            <form action="{{ route('vnpay') }}" id="create_form" method="post"> {{ csrf_field() }}      
                            
                                                <div class="form-group">
                                                    <label for="language">Loại hàng hóa </label>
                                                    <select name="order_type" id="order_type" class="form-control">
                                                        <option value="topup">Nạp tiền điện thoại</option>
                                                        <option value="billpayment">Thanh toán hóa đơn</option>
                                                        <option value="fashion">Thời trang</option>
                                                        <option value="other">Khác - Xem thêm tại VNPAY</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="order_id">Mã hóa đơn</label>
                                                    <input class="form-control" id="order_id" name="order_id" type="text" value="<?php echo date("YmdHis") ?>"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="amount">Số tiền</label>
                                                    <input class="form-control" id="amount"
                                                           name="amount" type="number" value="{{ $tongtien2 }}"/>
                                                </div>
                                                <div class="form-group">
                                                    <label for="order_desc">Nội dung thanh toán</label>
                                                    <textarea class="form-control" cols="20" id="order_desc" name="order_desc" rows="2">Noi dung thanh toan</textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="bank_code">Ngân hàng</label>
                                                    <select name="bank_code" id="bank_code" class="form-control">
                                                        <option value="">Không chọn</option>
                                                        <option value="NCB"> Ngan hang NCB</option>
                                                        <option value="AGRIBANK"> Ngan hang Agribank</option>
                                                        <option value="SCB"> Ngan hang SCB</option>
                                                        <option value="SACOMBANK">Ngan hang SacomBank</option>
                                                        <option value="EXIMBANK"> Ngan hang EximBank</option>
                                                        <option value="MSBANK"> Ngan hang MSBANK</option>
                                                        <option value="NAMABANK"> Ngan hang NamABank</option>
                                                        <option value="VNMART"> Vi dien tu VnMart</option>
                                                        <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                                        <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                                        <option value="HDBANK">Ngan hang HDBank</option>
                                                        <option value="DONGABANK"> Ngan hang Dong A</option>
                                                        <option value="TPBANK"> Ngân hàng TPBank</option>
                                                        <option value="OJB"> Ngân hàng OceanBank</option>
                                                        <option value="BIDV"> Ngân hàng BIDV</option>
                                                        <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                                        <option value="VPBANK"> Ngan hang VPBank</option>
                                                        <option value="MBBANK"> Ngan hang MBBank</option>
                                                        <option value="ACB"> Ngan hang ACB</option>
                                                        <option value="OCB"> Ngan hang OCB</option>
                                                        <option value="IVB"> Ngan hang IVB</option>
                                                        <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="language">Ngôn ngữ</label>
                                                    <select name="language" id="language" class="form-control">
                                                        <option value="vn">Tiếng Việt</option>
                                                        <option value="en">English</option>
                                                    </select>
                                                </div>
                            
                                                <button type="submit" class="btn btn-primary" id="btnPopup">Thanh toán Popup</button>
                                                <button type="submit" class="btn btn-default">Thanh toán Redirect</button>
                            
                                            </form>
                                        </div>
                                    </div>

                                    <div class="payment payment-cart">

                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="payment-header">
                                                    <div>
                                                        <strong>Payment details</strong>
                                                    </div>
                                                    <div>
                                                        <i class="fa fa-cc-visa"></i>
                                                        <i class="fa fa-cc-mastercard"></i>
                                                        <i class="fa fa-cc-discover"></i>
                                                        <i class="fa fa-cc-amex"></i>
                                                        <i class="fa fa-cc-diners-club"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" value="" name="cardNumber" placeholder="Card Number">
                                                </div>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" value="" name="cardExpiry" placeholder="MM / YY">
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <div class="form-group">
                                                    <input class="form-control" type="tel" value="" name="cardCVC" placeholder="CVC">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <input class="btn btn-main btn-block" type="submit" value="Submit" name="cardNumber">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{--  End payment  --}}
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
                                <a href="#" class="btn btn-clean-dark">Quay lại</a>
                            </div>
                            <div>
                                <a href="{{ route('checkout-3') }}" class="btn btn-main">Tiếp theo <span class="icon icon-chevron-right"></span></a>
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

<link href="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.css" rel="stylesheet"/>
        <script src="https://sandbox.vnpayment.vn/paymentv2/lib/vnpay/vnpay.js"></script>
        <script type="text/javascript">
            $("#btnPopup").click(function () {
                var postData = $("#create_form").serialize();
                var submitUrl = $("#create_form").attr("action");
                $.ajax({
                    type: "POST",
                    url: submitUrl,
                    data: postData,
                    dataType: 'JSON',
                    success: function (x) {
                        if (x.code === '00') {
                            if (window.vnpay) {
                                vnpay.open({width: 768, height: 600, url: x.data});
                            } else {
                                location.href = x.data;
                            }
                            return false;
                        } else {
                            alert(x.Message);
                        }
                    }
                });
                return false;
            });
        </script>



