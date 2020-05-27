@extends('house.master')
@section('tieude','Đăng nhập')
@section('house_content')

<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Đăng nhập</h3>
					<ul class="page_location float-right">
						<li><a href="{{ route('page.home') }}">Home</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Đăng nhập</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->

<!-- Sign In Account Start -->
<section class="full_row py_100 bg_gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class=" bg_white sign_in_up" role="document">
					<div class="header bg_primary">
						<h4 class="inner-title text_white">Đăng Nhập Tài Khoản</h4>
					</div>
					<div class="body">
						<form class="form"  method="POST"  action="{{Route('page.login.post')}}" enctype="multipart/form-data" > {{ csrf_field() }}
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password">
							</div>
							<div class="form-group">
								<button type="submit" name="signin" class="btn btn_primary_bg">Sign In</button>
							</div>
						</form>
					<div class="password_recovery">Quên mật khẩu? <a href="#">Click Here</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
</section>

<script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
	   
{!! Toastr::message() !!}

@endsection