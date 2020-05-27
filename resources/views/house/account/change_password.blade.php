@extends('house.master')
@section('tieude','Cập nhật mật khẩu')
@section('house_content')
<!-- Banner Section Start -->
<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Cập nhật mật khẩu</h3>
					<ul class="page_location float-right">
						<li><a href="{{ route('taikhoan.dashboard') }}">Tài khoản</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Cập nhật mật khẩu</span>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->

<!-- Profile Setting Start -->
<section class="py_80 bg_gray full_row">
	<div class="container">
		<div class="row">
			@include('house.account.category')
			<div class="col-lg-9">
				<div class="row">
					<div class="col-md-8">
						<h4 class="inner-title mb-4 mt_md_50">Thay đổi mật khẩu của bạn</h4>
						<form class="submit_form change_password" method="POST"  action="{{Route('taikhoan.update.password',['id' => Auth::user()->id])}}" enctype="multipart/form-data"> {{ csrf_field() }}
							<div class="form-group">
								<input type="password" class="form-control" name="oldpassword" placeholder="Mật khẩu hiện tại">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Mật khẩu mới">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu mới">
							</div>
							<div class="form-group">
								<input id="send" class="btn btn_primary" value="Save Change" type="submit">
							</div>
							<div class="alert alert-warning">Mật khẩu it nhất phải 8 kí tự và bao gồm số</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Profile Setting End -->

<script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
	   
{!! Toastr::message() !!}
@endsection