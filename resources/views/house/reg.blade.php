@extends('house.master')
@section('tieude','Danh sách bảng tin')
@section('house_content')
    <section class="full_row bg_img_5 py_80 overlay_1 page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_banner">
                        <h3 class="title text_white d-table float-left">Đăng ký</h3>
                        <ul class="page_location float-right">
                            <li><a href="{{ route('page.home') }}">Home</a>
                            </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i>
                            </li>
                            <li><span>Registration</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="full_row py_100 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class=" bg_white sign_in_up" role="document">
                        <div class="header bg_primary">
                            <h4 class="inner-title text_white">Đăng ký tài khoản</h4>
                        </div>
                        <div class="body">

                            <form class="registation" action="{{ route('page.reg.post') }}" method="POST"  enctype="multipart/form-data"> {{ csrf_field() }}
                                
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="lastname" placeholder="Họ">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="Tên">
                                    </div>
                                </div>

                                <div class="form-group input_radio" style="margin-left: 10px;">
                                    <input type="radio" id="radio_1" name="gioi_tinh" value="1" checked="">
                                    <label for="radio_1">Nam</label>
                                    <input type="radio" id="radio_2" name="gioi_tinh" value="2">
                                    <label for="radio_2">Nữ</label>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="cmnd" placeholder="CMND / Căn cước">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Số điện thoại">
                                    </div>
                                </div>

                                

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>

                                

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="confirmpassword" placeholder="Nhập lại Password">
                                </div>
                                <button type="submit" name="registration" class="btn btn_primary_bg">Đăng ký</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
    </section>
@endsection
