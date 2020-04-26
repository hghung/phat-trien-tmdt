@extends('page.layout')
@section('title','Thanh toán')
@section('page_content')
	<!-- Breadcumb area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li><a href="{{Route('p.home')}}">Home</a></li>
                        <li><a href="{{Route('cart')}}">Giỏ hàng</a></li>
                        <li class="current"><a>Thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb area End -->
{{-- <a href="{{Route('delcart',['id' => 'all'])}}" class="btn btn-4 btn-style-3" style="margin-left: 80%; padding-left: 15px; padding-right: 15px; background-color: #E15858">
                <i class="fa fa-trash-o"></i> 
                Xóa tất cả
            </a> --}}

    <!-- Main content wrapper start -->

    <div class="main-content-wrapper">
        <div class="checkout-area pt--10 pb--80 pt-sm--30 pb-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Checkout Area Start -->
                         <form action="{{Route('p.bill')}}" method="POST" class="form">{{csrf_field()}}

                            <div class="checkout-wrapper bg--white">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout-title">
                                            <a href="{{route('act.home')}}" style="float:right;">Cập nhật địa chỉ</a>
                                            <h2>Thông tin thanh toán</h2>
                                        </div>
                                        <div class="checkout-form">
                                                <div class="form-row">
                                                    <div class="form__group col-12">
                                                        <label for="billing_fname" class="form__label">Họ tên người nhận <span>*</span></label>
                                                        <input type="text" name="name" value="{{Auth::user()->delivery->delivery_name}}" class="form__input" readonly="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="form-row">
                                                    <div class="form__group col-12">
                                                        <label for="billing_lname" class="form__label">Số điện thoại <span>*</span></label>
                                                        <input type="text" name="phone"  value="0{{Auth::user()->delivery->delivery_telephone}}" class="form__input" readonly="">
                                                    </div>
                                                </div>
                                                <br>


                                                <div class="form-row">
                                                    <div class="form__group col-12">
                                                        <label for="orderNotes" class="form__label">Địa chỉ</label>
                                                        <input type="text" name="address"  value="{{Auth::user()->delivery->delivery_address}}, {{Auth::user()->delivery->ward->ward_prefix}} {{Auth::user()->delivery->ward->ward_name}}, {{Auth::user()->delivery->district->district_prefix}} {{Auth::user()->delivery->district->district_name}}, {{Auth::user()->delivery->province->province_name}}" class="form__input" readonly="">
                                                    </div>
                                                </div>
                                                <br>
                                                
                                                <div class="form-row">
                                                    <div class="form__group col-12">
                                                        <label for="orderNotes" class="form__label">Ghi chú</label>
                                                        <textarea class="form__input form__input--textarea" name="note" placeholder="Ghi chú về đơn hàng"></textarea>
                                                    </div>
                                                </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-md--30">
                                        <div class="order-details">
                                            <h3 class="heading-tertiary">Đơn hàng của bạn</h3>
                                            <div class="order-table table-content table-responsive mb--30">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Sản phẩm</th>
                                                            <th>Tổng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                            			@foreach($cart as $book)
    	                                                    <tr>
    	                                                        <td>{{$book->name}} <strong>x{{$book->qty}}</strong></td>
    	                                                        <td>{{ number_format($book->price*$book->qty,0,',','.') }} đ</td>
    	                                                    </tr>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Tổng giỏ hàng</th>
                                                            <td>{{$total}} đ</td>
                                                        </tr>
                                                        <tr class="shipping">
                                                            <th>Shipping</th>
                                                            <td>Free ship</td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Tổng đơn hàng</th>
                                                            <td><span class="order-total-ammount">{{$total}} đ</span></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="checkout-payment">
                                                <form action="#" class="payment-form">
                                                    <div class="payment-group">
                                                        <div class="payment-radio">
                                                            <input type="radio" value="1" name="payment" >
                                                            <label class="payment-label" for="cheque">Thanh toán khi nhận hàng</label>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="payment-group">
                                                        <div class="payment-radio">
                                                            <input type="radio" value="2" name="payment">
                                                            <label class="payment-label" for="paypal">
                                                                Paypal 
                                                                <img src="{{asset('public/page/img/AM_mc_vs_ms_ae_UK.png')}}" alt="payment">
                                                            </label>
                                                        </div>
                                                        <div class="payment-info paypal hide-in-default" data-method="paypal">
                                                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                        </div>
                                                    </div>
                                                    <div class="payment-group">
                                                        <button type="submit" class="btn btn-6 btn-style-2">Place Order</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Checkout Area End -->
                        </form>
                    </div>
                </div>
            </div>     
        </div>
    </div>

    <!-- Main content wrapper end -->
@endsection