@section('tieude','Danh sách bảng tin')

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
                    <li class="col-md-4 active">
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

        <a href="{{ route('page.home') }}" style="margin: 10px 0px 0px 10px" class="btn btn-primary">Quay lai </a>

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
                                    <strong>Arrival date</strong> <br> <a href="#">(September 22, 2017)</a>
                                </p>
                                <p>
                                    <strong>Guests</strong> <br>  2 Adults, 1 Child
                                </p>
                                <p>
                                    <strong>Nights</strong> <br> 7
                                </p>
                            </div>
                            <div class="price">
                                <span class="final h3">$ 1.998</span>
                                <span class="discount">$ 2.666</span>
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
                                <strong>Discount 15%</strong>
                            </div>
                            <div>
                                <span>$ 159,00</span>
                            </div>
                        </div>

                        <div class="cart-block cart-block-footer clearfix">
                            <div>
                                <strong>TAX</strong>
                            </div>
                            <div>
                                <span>$ 59,00</span>
                            </div>
                        </div>
                    </div>

                    <!--cart final price -->

                    <div class="clearfix">
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
                    </div>

                    <!-- ========================  Cart navigation ======================== -->

                    <div class="clearfix">
                        <div class="cart-block cart-block-footer cart-block-footer-price clearfix">
                            <div>
                                <a href="#" class="btn btn-clean-dark">Change</a>
                            </div>
                            <div>
                                <a href="reservation-2.html" class="btn btn-main">Reservation <span class="icon icon-chevron-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div> <!--/container-->
    </div> <!--/checkout-->

</section>


<script src="{{ asset('public/checkout/js/bundle.min.js') }}"></script>


