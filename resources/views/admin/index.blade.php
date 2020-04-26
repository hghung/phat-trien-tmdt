@extends('admin.layout')
@section('title','Dashboard')
@section('admin_content')
    
            {{-- ///////////////////////////////// Admin ////////////////////////////// --}}

    @if(Auth::user()->level == 1)

        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12">
                            <h1>Dashboard</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                    {{-- <li class="breadcrumb-item active" aria-current="page">Finance Performance</li> --}}
                                </ol>
                            </nav>
                        </div>            
                        <div class="col-md-6 col-sm-12 text-right hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="body">
                                <div>Tổng tiền</div>
                                <div class="py-4 m-0 text-center h1 text-success">{{ number_format($tongtien,0,',','.') }} đ</div>
                                <div class="d-flex">
                                    <small class="text-muted">Tháng trước</small>
                                    <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4.00%</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div>Tổng tiền tháng này</div>
                                <div class="py-4 m-0 text-center h1 text-info">$12,258</div>
                                <div class="d-flex">
                                    <small class="text-muted">Tháng trước</small>
                                    <div class="ml-auto">0.67%</div>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="body">
                                <div>Gross Profit Margin</div>
                                <div class="mt-4 text-center">
                                    <input type="text" class="knob" value="34" data-width="147" data-height="147" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#9367B4">
                                </div>
                                <h3 class="mb-0 mt-3 font300">24,301 <span class="text-green font-15">+3.7%</span></h3>
                                <small>Lorem Ipsum is simply dummy text <br> <a href="#">Read more</a> </small>
                                <div class="mt-4 text-center">
                                    <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6">

                                <div class="card">
                                    <div class="body" style="padding-bottom: 65px;">
                                        <div class="card-value float-right text-blue">+15%</div>
                                        <h4 class="mb-1">$5,021.00</h4>
                                        <div class="text-muted">Số dư</div>
                                    </div>
                                   
                                </div>

                                <div class="card">
                                    <div class="body top_counter">
                                        <div class="icon bg-success text-white"><i class="icon-book-open"></i> </div>
                                        <div class="content">
                                            <span>Sách bán ra</span>
                                            <h5 class="number mb-0">{{$book}} cuốn</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="body top_counter">
                                        <div class="icon bg-warning text-white"><i class="icon-user"></i> </div>
                                        <div class="content">
                                            <span>Member</span>
                                            <h5 class="number mb-0">{{$user}} người</h5>
                                        </div>
                                    </div>                        
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="body">
                                        <div class="media">
                                            <img class="rounded mr-3" src="{{asset('public/admin/img/avatar7.jpg')}}"  alt="">
                                            <div class="media-body">
                                                <h5 class="m-0">{{Auth::user()->info->info_name}} {{Auth::user()->info->info_lastname}}</h5>
                                                @if(Auth::user()->level == 1)

                                                    <p  style="color: #ffc107;">
                                                        <i class="fa fa-linux" style="padding-right: 10px;"></i> 
                                                        {{Auth::user()->vaitro->role_name}}
                                                    </p>

                                                @else

                                                    <p  style="color: #5CB65F;">
                                                        <i class="icon-badge" style="padding-right: 10px;"></i> 
                                                         {{Auth::user()->vaitro->role_name}}
                                                    </p>

                                                @endif

                                            </div>
                                        </div>
                                        <small class="text-muted">Account Number:- </small>
                                        <p>2154 - 1245 - 2185 - 5858</p>
                                        <small class="text-muted">Number:- </small>
                                        <p>+ 264-625-7262</p>
                                        <small class="text-muted">Account:- </small>
                                        <p>HDFC Bank</p>
                                        <small class="text-muted">Address:- </small>
                                        <p>Magnolia St. Orlando, FL 32806</p>                                    
                                        <small class="text-muted">Account Type:- </small>
                                        <p class="mb-0">Current</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Sản phẩm đang bán</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-custom spacing5">
                                    <thead>
                                        <tr>
                                            <th width="10%;">Mã đơn hàng</th>
                                            <th>Tổng tiền</th>
                                            <th>Trạng thái</th>
                                            <th>Người mua</th>
                                            <th>Người bán</th>
                                            <th>Ngày đặt hàng</th>
                                            <th>Ngày hoàn thành</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bill as $dsbill)

                                        <tr>
                                            <td>{{$dsbill->bill_code}}</td>
                                            <td>{{ number_format($dsbill->bill_total,0,',','.') }} đ</td>

                                            <td>
                                                @if($dsbill->id_status == 8)

                                                    <span style="color: #dc3545">
                                                        {{$dsbill->status->status_name}}
                                                    </span>

                                                @elseif($dsbill->id_status == 7)

                                                    <span style="color: #28a745;">
                                                        {{$dsbill->status->status_name}}
                                                    </span>

                                                @elseif($dsbill->id_status == 6)

                                                    <span style="color: #17a2b8;">
                                                        {{$dsbill->status->status_name}}
                                                    </span>

                                                @elseif($dsbill->id_status == 5)

                                                    <span style="color: #007bff;">
                                                        {{$dsbill->status->status_name}}
                                                    </span>

                                                @elseif($dsbill->id_status == 4)

                                                    <span style="color: #fd7e14;">
                                                        {{$dsbill->status->status_name}}
                                                    </span>

                                                @else

                                                    <span >{{$dsbill->status->status_name}}</span>
                                                    
                                                @endif
                                            </td>

                                            <td>
                                                <a href="#" style="color: #fafafa">
                                                    {{$dsbill->userbill->link}}
                                                </a> 
                                            </td>

                                            <td>
                                                @foreach($dsbill->detailbill as $nguoiban )
                                                    <a href="#" style="color: #ffc107">
                                                        {{$nguoiban->detailbill2->user->link}}
                                                    </a> 

                                                    <br>
                                                @endforeach
                                            </td>


                                            <td>{{$dsbill->created_at}}</td>
                                            <td>{{$dsbill->updated_at}}</td>
                                            
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

            {{-- ///////////////////////////////// Khách hàng ////////////////////////////// --}}
    @else

        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12">
                            <h1>Dashboard</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                                    {{-- <li class="breadcrumb-item active" aria-current="page">Finance Performance</li> --}}
                                </ol>
                            </nav>
                        </div>            
                        <div class="col-md-6 col-sm-12 text-right hidden-xs">
                            <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="body">
                                <div>Tổng tiền</div>
                                <div class="py-4 m-0 text-center h1 text-success">$9,452</div>
                                <div class="d-flex">
                                    <small class="text-muted">Tháng trước</small>
                                    <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4.00%</div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div>Tổng số sách bán ra</div>
                                <div class="py-4 m-0 text-center h1 text-info">$12,258</div>
                                <div class="d-flex">
                                    <small class="text-muted">Tháng trước</small>
                                    <div class="ml-auto">0.67%</div>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="body">
                                <div>Gross Profit Margin</div>
                                <div class="mt-4 text-center">
                                    <input type="text" class="knob" value="34" data-width="147" data-height="147" data-thickness="0.07" data-bgColor="#383b40" data-fgColor="#9367B4">
                                </div>
                                <h3 class="mb-0 mt-3 font300">24,301 <span class="text-green font-15">+3.7%</span></h3>
                                <small>Lorem Ipsum is simply dummy text <br> <a href="#">Read more</a> </small>
                                <div class="mt-4 text-center">
                                    <span class="chart_3">2,5,8,3,6,9,4,5,6,3</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="body">
                                        <div class="card-value float-right text-blue">+15%</div>
                                        <h4 class="mb-1">$5,021.00</h4>
                                        <div class="text-muted">Số dư</div>
                                    </div>
                                    <div class="card-chart-bg">
                                        <span id="linecustom">6,7,5,9,7,8,4,7,6,9,11,16,10,8,9,12</span>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="body top_counter">
                                        <div class="icon bg-success text-white"><i class="fa fa-area-chart"></i> </div>
                                        <div class="content">
                                            <span>Tăng trưởng</span>
                                            <h5 class="number mb-0">62%</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="body top_counter">
                                        <div class="icon bg-warning text-white"><i class="fa fa-building"></i> </div>
                                        <div class="content">
                                            <span>Member</span>
                                            <h5 class="number mb-0">53,251</h5>
                                        </div>
                                    </div>                        
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="card">
                                    <div class="body">
                                        <div class="media">
                                            <img class="rounded mr-3" src="{{asset('public/admin/img/avatar7.jpg')}}"  alt="">
                                            <div class="media-body">
                                                <h5 class="m-0">{{Auth::user()->info->info_name}} {{Auth::user()->info->info_lastname}}</h5>
                                                @if(Auth::user()->level == 1)

                                                    <p  style="color: #ffc107;">
                                                        <i class="fa fa-linux" style="padding-right: 10px;"></i> 
                                                        {{Auth::user()->vaitro->role_name}}
                                                    </p>

                                                @else

                                                    <p  style="color: #5CB65F;">
                                                        <i class="icon-badge" style="padding-right: 10px;"></i> 
                                                         {{Auth::user()->vaitro->role_name}}
                                                    </p>

                                                @endif

                                            </div>
                                        </div>
                                        <small class="text-muted">Account Number:- </small>
                                        <p>2154 - 1245 - 2185 - 5858</p>
                                        <small class="text-muted">Number:- </small>
                                        <p>+ 264-625-7262</p>
                                        <small class="text-muted">Account:- </small>
                                        <p>HDFC Bank</p>
                                        <small class="text-muted">Address:- </small>
                                        <p>Magnolia St. Orlando, FL 32806</p>                                    
                                        <small class="text-muted">Account Type:- </small>
                                        <p class="mb-0">Current</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>Sản phẩm đang bán</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-custom spacing5">
                                    <thead>
                                        <tr>
                                            <th>&nbsp;</th>
                                            <th>Actual Cost</th>
                                            <th>Forecast Cost</th>
                                            <th>Revenue</th>
                                            <th class="w100">% Margin</th>
                                            <th>Actual</th>
                                            <th class="w100">Forecast</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Building</td>
                                            <td>11,243</td>
                                            <td>399,21</td>
                                            <td>40,234</td>
                                            <td><span class="text-green">8.1%</span></td>
                                            <td>2,93,098</td>
                                            <td>1,02,243</td>
                                        </tr>
                                        <tr>
                                            <td>Digital</td>
                                            <td>1,22,877</td>
                                            <td>5,00,215</td>
                                            <td>40,159</td>
                                            <td><span class="text-red">6.4%</span></td>
                                            <td>2,93,091</td>
                                            <td>9,32,456</td>
                                        </tr>
                                        <tr>
                                            <td>Health</td>
                                            <td>32,375</td>
                                            <td>99,852</td>
                                            <td>20,194</td>
                                            <td><span class="text-green">12.9%</span></td>
                                            <td>18,654</td>
                                            <td>29,201</td>
                                        </tr>
                                        <tr>
                                            <td>Power</td>
                                            <td>76,877</td>
                                            <td>98,565</td>
                                            <td>123,022</td>
                                            <td><span class="text-red">17.0%</span></td>
                                            <td>10,800</td>
                                            <td>22,232</td>
                                        </tr>
                                        <tr>
                                            <td>Transport</td>
                                            <td>2,232</td>
                                            <td>3,099</td>
                                            <td>400</td>
                                            <td><span class="text-green">1.2%</span></td>
                                            <td>13,255</td>
                                            <td>14,765</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td>3,33,985</td>
                                            <td>4,68,444</td>
                                            <td>99,400</td>
                                            <td><span class="text-green">34.2%</span></td>
                                            <td>28,643,091</td>
                                            <td>42,31,765</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    @endif

    <script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
        
           
   {!! Toastr::message() !!}

@endsection