@extends('house.master')
@section('tieude','Cập nhật thông tin')
@section('house_content')
<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Thông tin cá nhân</h3>
					<ul class="page_location float-right">
						<li><a href="{{ route('taikhoan.dashboard') }}">Tài khoản</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Thông tin cá nhân</span>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->

<!-- Profile Setting Start -->
<section class="full_row py_80 bg_gray">
	<div class="container">
		<div class="row">
			@include('house.account.category')
			<div class="col-lg-9">
				<div class="mt_md_50">
					<div class="row">
						{{--    --}}
							<div class="col-md-8">
								<form class="profile_area" method="POST"  action="{{Route('taikhoan.update.profile',['id' => Auth::user()->id])}}" enctype="multipart/form-data"> {{ csrf_field() }}
									<div class="personal_infor">
										<h4 class="inner_title mb-4">Thông tin tài khoản</h4>
										<div class="form-group">
											<label for="agent_id">Member ID</label>
											<input id="agent_id" type="text" name="agentid" class="form-control" value="{{ Auth::user()->member->kh_ma }}" readonly="">
										</div>
										{{--  ho ten  --}}
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label >Họ :</label>
													<input type="text" name="ho" class="form-control" value="{{ Auth::user()->member->kh_ho }}" >
												</div>
												<div class="col-sm-6">
													<label >Tên :</label>
													<input type="text" name="ten" class="form-control" value="{{ Auth::user()->member->kh_ten}}" >
												</div>
											</div>
										</div>
										{{--  gioi tinh  --}}
										<div class="form-group">
											<label >Giới tính :</label>
											<div class="row">
												<div class="col-sm-6">
													<input  name="gioitinh" id="male" class="with-gap" value="1" 
													@if( Auth::user()->member->kh_gioitinh == 1)
													{{"checked"}}
													@endif
													type="radio">
													<label for="male">Nam</label>
												</div>
												<div class="col-sm-6">
													<input  name="gioitinh" id="Female" class="with-gap" value="2"
													@if( Auth::user()->member->kh_gioitinh == 2)
													{{"checked"}}
													@endif
													type="radio">
													<label for="Female">Nữ</label>
												</div>
											</div>
										</div>
										{{--  email  --}}

										<div class="form-group">
											<label >Căn cước/Chứng minh :</label>
											<input name="cmnd" type="text" class="form-control" value="{{ Auth::user()->member->kh_cmnd}}">
										</div>


										<div class="form-group">
											<label >Email Address :</label>
											<input name="email" type="text" class="form-control" value="{{ Auth::user()->member->kh_email}}">
										</div>
										{{--  So dien thoai  --}}
										<div class="form-group">
											<label >Phone :</label>
											<input name="phone" type="text" class="form-control" value="{{ Auth::user()->member->kh_phone}}">
										</div>
										{{--    --}}
										<h4 class="inner-title mb-4">Thông tin địa chỉ</h4>
										<div class="form-group">
											<label for="address">Address</label>
											<input name="diachi" id="address" type="text" name="address" class="form-control" value="{{ Auth::user()->member->kh_address }}">
										</div>

										<div class="form-group">
											<label>Tỉnh/Thành :</label>
											<select class="selectpicker form-control" data-live-search="true" id="tinhthanh" name="tinhthanh">
												@foreach($province as $pr)
													<option 
														@if(Auth::user()->member->kh_province == $pr->id)
														{{"selected"}}
														@endif

														value="{{$pr->id}}">{{$pr->province_name}}
													</option>
												@endforeach 
																
											</select>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-sm-6">
													<label >Quận/Huyện :</label>
													<select class="selectpicker form-control" data-live-search="true" id="quanhuyen" name="quanhuyen">
														@foreach($district as $dt)
															<option 
																@if(Auth::user()->member->kh_district == $dt->id)
																{{"selected"}}
																@endif
																value="{{$dt->id}}">{{$dt->district_name}}
															</option>
														@endforeach 
													</select>
												</div>
												<div class="col-sm-6">
													<label> Phường/Xã :</label>
													<select class="selectpicker form-control" data-live-search="true" id="phuongxa" name="phuongxa">
														@foreach($ward as $wa)
															<option 
																@if(Auth::user()->member->kh_ward == $wa->id)
																{{"selected"}}
																@endif
																value="{{$wa->id}}">{{$wa->ward_name}}
															</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="date">Date of Birth :</label>
											<input type="date" class="form-control" name="birthday" value="{{Auth::user()->member->kh_birthday }}">
										</div>
									</div>
									<button class="btn btn_primary_bg" type="submit">Save Changes</button>
							</div>
							<div class="col-md-4">
								<div class="prifile_picture">
									<div class="avata_form">
										<img height="243px" width="255px" src="{{asset('public/upload /avatar/')}}/{{ Auth::user()->member->kh_avatar }}" alt="">
										<input type="file" name="avatar" id="avata-upload">
										<label for="avata-upload"><i class="flaticon-tool-1"></i></label>
									</div>
									<ul>
										<li><span>Tên:</span> {{ Auth::user()->member->kh_ho}} {{ Auth::user()->member->kh_ten}}</li>
										<li><span>Phone:</span> {{ Auth::user()->member->kh_phone}}</li>
										<li><span>Email:</span> {{ Auth::user()->member->kh_email}}</li>
										<li>
											<span>Vai trò: </span> 
											@if(Auth::user()->vai_tro == 1)
												<span style="color:yellow"> Admin </span>
											@elseif(Auth::user()->vai_tro == 2)
												<span style="color:blue"> Member</span>
											@endif
										</li>
									</ul>
								</div>
							</div>
							{{--    --}}
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Profile Setting End -->

<!-- Main Content wrapper end -->

<script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
   
{!! Toastr::message() !!}


{{-- <script src="{{asset('public/admin/toastr/jquery.min.js')}}" ></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		// alert('chạy được'); 
		//kiểm tra xem coi nó chạy không
		$("#tinhthanh").change(function(){
			var id_province = $(this).val();
			// alert(id_province);
			// kiểm tra xem có chạy được nhận id option của loaibaiban không
			$.get("/tai-khoan/quan-huyen/"+id_province,function(data){
				// alert(data);
				$("#quanhuyen").html(data);
				$('#quanhuyen').selectpicker('refresh');
				// phải câu lênh selectpicker('refresh') để ko bị lỗi boostrap-selecet
			});
		});

		$("#quanhuyen").change(function(){
			var id_ward = $(this).val();
			
			// kiểm tra xem có chạy được nhận id option của loaibaiban không
			$.get("/tai-khoan/phuong-xa/"+id_ward,function(data){
				// alert(data);
				$("#phuongxa").html(data);
				$('#phuongxa').selectpicker('refresh');
				// phải câu lênh selectpicker('refresh') để ko bị lỗi boostrap-selecet
			});
		});
	});
</script>


@endsection