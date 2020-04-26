@extends('page.layout')
@section('title','Tài khoản')
@section('page_content')

    <!-- Breadcumb area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li><a href="{{Route('p.home')}}">Trang chủ</a></li>
                        <li><a href="{{Route('act.home')}}">Tài khoản</a></li>
                        <li class="current"><a>Chi tiết đơn hàng {{$bill->bill_code}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb area End -->

    <!-- Main Content wrapper start -->

    <section class="main-content-wrapper">
        <div class="account-wrapper pt--10 pb--80 pt-sm--30 pb-sm--60">
            <div class="container">
                <div class="user-dashboard-tab">
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <div class="user-dashboard-tab__content tab-content">
                                <div class="tab-pane fade show active" id="dashboard">
                                    

                                    <div class="row" >
                                        <p class="btn btn-4 btn-style-3" style="color: #fff; font-size: 16px; background-color: #17a2b8">
                                            <span style="color : #ffc107; ">
                                                {{$bill->bill_code}}
                                            </span>
                                            có 
                                            <span style="color : #ffc107; ">
                                                {{$bill->detailbill->count()}} 
                                            </span> sản phẩm 
                                        </p>
                                

                                        <button class="btn btn-4 btn-style-3" style="font-size: 15px; margin-left: 5%; background-color: #17a2b8">
                                            Tổng đơn hàng: 
                                            <span style="color: #ffc107">
                                                {{ number_format($bill->bill_total,0,',','.') }} đ
                                            </span>
                                        </button>

                                                       
                                        @if($bill->id_status == 3)
                                    
                                            <button class="btn btn-4 btn-style-3" style="margin-left: 5%; padding: 10px 10px 10px 10px; background-color: #6c757d    ">
                                                {{$bill->status->status_name}} 
                                                
                                            </button>




                                        @elseif($bill->id_status == 4)
                                        
                                            <button class="btn btn-4 btn-style-3" style="margin-left: 5%; padding: 10px 10px 10px 10px; background-color: #f66d9b    ">
                                                {{$bill->status->status_name}} 
                                                
                                            </button>

                                        
                                        @elseif($bill->id_status == 5)
                                        
                                            <button class="btn btn-4 btn-style-3" style="margin-left: 5%; padding: 10px 10px 10px 10px; background-color: #ffc107    ">
                                                {{$bill->status->status_name}} 
                                                
                                            </button>
                                        
                                        @elseif($bill->id_status == 6)
                                        
                                            <button class="btn btn-4 btn-style-3" style="margin-left: 5%; padding: 10px 10px 10px 10px; background-color: #5CB65F">
                                                {{$bill->status->status_name}} 
                                                
                                            </button>
                                        
                                        @elseif($bill->id_status == 7)
                                        
                                            <button class="btn btn-4 btn-style-3" style="margin-left: 5%; padding: 10px 10px 10px 10px; background-color: #17a2b8">
                                                {{$bill->status->status_name}} 
                                                
                                            </button>

                                        @elseif($bill->id_status == 8)
                                        
                                            <button class="btn btn-4 btn-style-3" style="margin-left: 5%; padding: 10px 10px 10px 10px; background-color: #E15858">
                                                {{$bill->status->status_name}} 
                                                
                                            </button>

                                        
                                        @endif


                                    </div>


                                </div>
                                <br>
                                <p>Người nhận hàng : {{$bill->bill_name}}</p>
                                <p>Số điện thoại : 0{{$bill->bill_phone}}</p> 
                                <p>Đia chỉ giao hàng : {{$bill->bill_address}}</p>

                                <br>

								{{-- Đơn hàng --}}
                                <div >
                                    <div class="account-table table-content table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr align="center">
                                                    <th>STT</th>
                                                    <th>Hình</th>
                                                    <th>Têm sản phẩm</th>
                                                    <th>Số lương</th>
                                                    <th>Giá</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @php
                                                    $stt = 1;
                                                @endphp

                                                @foreach($bill->detailbill as $bill2)
                                                <tr align="center">
                                                    <td>{{$stt++}}</td>

                                                    <td>
                                                        <img src="{{asset('public/upload/')}}/{{$bill2->detailbill2->book_image}}" style="height: 80px; width: 80px; " alt="product" >
                                                    </td>

                                                    <td class="wide-column">
                                                        {{$bill2->detailbill2->book_title }}
                                                    </td>

                                                    <td class="wide-column">
                                                        {{$bill2->qty }}
                                                    </td>

                                                    <td class="wide-column">
                                                        {{ number_format($bill2->detailbill2->book_price*$bill2->qty,0,',','.') }} đ
                                                    </td>


                                                </tr>
                                                @endforeach
                                               
                                                
                                            </tbody>
                                        </table>
                                        <br>
                                        
                                        @if($bill->id_status == 3)
                                            <button class="btn btn-4 btn-style-3" style="font-size: 15px; margin-left: 82%; background-color: #E15858">
                                            <a href="{{route('status8',['id' => $bill->id])}}" style="color: #fff">Hủy đơn hàng</a> 
                                            
                                        </button>
                                        @else
                                            <button class="btn btn-4 btn-style-3" style="font-size: 15px; margin-left: 82%; background-color: #6c757d">
                                            <a href="#" style="color: #fff">Hủy đơn hàng</a> 
                                            
                                        </button>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>    
        </div>
    </section>

    <!-- Main Content wrapper end -->

        <script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
           
   {!! Toastr::message() !!}



@endsection