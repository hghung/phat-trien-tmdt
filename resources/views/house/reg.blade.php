
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPS || Đăng ký</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('public/house/img/favico.ico')}}">


    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{asset('public/admin/css/lite-purple.css')}}" rel="stylesheet" />
</head>

<style>
    .banhbao
    {
        background-color: transparent;
        color: #fff;
        opacity: 0.75;
        font-size: 17px !important;
        
    }
    .banhbao2
    {
        color: #007bff;
    }
</style>


<div class="auth-layout-wrap" style="background-image: url({{asset('public/admin/img/bacground-reg1.jpg')}})">
    <div class="row" style="margin-right:90%;">
        <img style=" width:50%; height:50%" src="{{asset('public/admin/img/logo.png')}}">
        <h4>Đăng ký</h4>
    </div>
    <div class="auth-content" >
        {{-- <h1>Đăng ký</h1> --}}
        <form   method="POST"  action="{{Route('page.reg.post')}}" enctype="multipart/form-data"> {{ csrf_field() }}

            <div class="card o-hidden" style="background-color: transparent; width:200%; margin-left: -50%;" >
                <div class="row">
                    <div class="col-md-4 text-left" style="margin: 10% 0 0 5%">
                        <div class="form-group">
                            <label for="email" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Username</label>
                            <input class="banhbao form-control form-control-rounded" name="username"  type="text">
                        </div>

                        <div class="form-group">
                            <label for="password" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;" >Password</label>
                            <input class="banhbao form-control form-control-rounded" name="password" type="password">
                        </div>

                        <div class="form-group">
                            <label for="repassword" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Retype password</label>
                            <input class="banhbao form-control form-control-rounded" name="confirmpassword" type="password">
                        </div>
                    </div>

                    <div class="col-md-7">
                            <div class="p-4">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="username" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Tên </label>
                                        <input class="banhbao form-control form-control-rounded" name="name" type="text">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="username" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Họ</label>
                                        <input class="banhbao form-control form-control-rounded" name="lastname" type="text">
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="username" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Giới tính</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="radio" name="gioi_tinh" id="male" value="1">
                                            <label class="banhbao" style="color: #fff;" for="male">Nam</label>
                                        </div>                                
                                        <div class="col-md-3 ">
                                            <input type="radio" name="gioi_tinh" id="Female" value="2" checked="">
                                            <label class="banhbao"  style="color: #fff;" for="Female">Nữ</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Ngày tháng năm sinh</label>
                                    <input class="banhbao form-control form-control-rounded" name="birthday" type="date">
                                </div>

                                <div class="form-group">
                                    <label for="email" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Email address</label>
                                    <input class="banhbao form-control form-control-rounded" name="email" type="email">
                                </div>

                                <div class="form-group">
                                    <label for="email" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Căn cước/Chứng minh nhân dân</label>
                                    <input class="banhbao form-control form-control-rounded" name="cmnd" type="text">
                                </div>

                                <div class="form-group">
                                    <label for="email" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Số điện thoại</label>
                                    <input class="banhbao form-control form-control-rounded" name="phone"  type="text">
                                </div>

                                <div class="form-group">
                                    <label for="email" style="color: #007bff;  font-family:'Source Sans Pro', sans-serif; font-size: 15px;">Đỉa chỉ</label>
                                    <input class="banhbao form-control form-control-rounded" name="diachi" type="text">
                                </div>

                                
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-rounded mt-3">Sign Up</button>


                    
                </div>
            </div>
        
        </form>

        
    </div>

    
</div>