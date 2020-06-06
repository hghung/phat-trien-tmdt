@extends('house.master')
@section('tieude','Danh sách bảng tin')
@section('house_content')

<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Bảng tin 
                        <span style="color: #00aeef">{{ $bangtin->code_bangtin }}</span>
                    </h3>
					<ul class="page_location float-right">
						<li><a href="{{ route('page.home') }}">Home</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						
						<li><a href="{{ route('page.list') }}">Bảng tin</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
							
						</li>
						<li><span>Bảng tin
                            <span style="color: #00aeef">{{ $bangtin->code_bangtin }}</span>
                        </span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Single Property Start -->
<section class="full_row pt_80 bg_gray">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('public/single/css/font-awesome.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/single/css/fonts.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/single/css/swiper.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/single/css/style.css')}}">


	<div class="swiper-container slider_v2">
		<div class="swiper-wrapper">
			@foreach($bangtin->house->hinhanh as $hinhanh)
			<div style="width: 956px; height: 520px;" class="swiper-slide"><img src="{{ asset('public/upload/') }}/{{ $hinhanh->hinh_anh }}" alt=""></div>
			@endforeach

			
		</div>
		<div class="swiper-button-next swiper-button-white"></div>
		<div class="swiper-button-prev swiper-button-white"></div>
	</div>

	
	

	<!--  -->

	<div class="container">
		<!-- <div class="row">
			<div class="col-md-12">
				<div class="property_slider">
					<img src="{{ asset('public/house/img/single_property\1.png')}}" alt="">
				</div>
			</div>
		</div> -->

		


		<div class="row">
			<div class="col-lg-8">
				<div class="row">
					<div class="col-md-12">
						<div class="single_property_detail">
							<div class="head">
								<h4 class="title mt-5">{{ $bangtin->ten_bangtin }}</h4>
								<span class=""><i class="fas fa-map-marker-alt"></i> {{ $bangtin->house->dia_chi }} </span>
							</div>
							
							<p> {!! $bangtin->mo_ta !!}</p>

							<div class="more_information my-5 d-inline-block">
								<h4 class="inner-title mb-4">Thông tin</h4>
								<ul>
									<li>
										<span>Tình trạng :</span> 
										@if($bangtin->house->tinh_trang == 1)

											Mới
										
										@elseif($bangtin->house->tinh_trang == 2)

											Đã qua sử dụng

										@endif
									</li>
									<li>
										<span>Loại nhà :</span> {{ $bangtin->house->loainha->ten_loai }}
									</li>
									<li>
										Diện tích :</span> {{ $bangtin->house->dien_tich }} m²
									</li>


									@foreach($taisan as $key => $value )

									<li>
										<span>
											{{ $value['ten_ts'] }} 
											:
											{{ $value['so_luong'] }} cái
											
											
											
											
									
										</span> 
									</li>
									@endforeach
									
									


									
									
								</ul>
							</div>
							
							<div class="single_feature mb-5">
								<h4 class="inner-title mb-4">Tiện ích</h4>
								<ul class="icon_list_1">
									<li style="padding-left: 30px;"> Wifi </li>

									@foreach($tienich as $tienich2)
										<li style="padding-left: 30px;">{{ $tienich2->tienich2->tien_ich }}</li>
									@endforeach
									
								</ul>
							</div>
							{{--  Bản đồ--}}
							<div class="mb-5">
								<h4 class="inner-title mb-4">Vị trí</h4>
								<div id="map" style="height: 400px; width: 700px;"> </div>
							</div>


							{{-- Viết Đánh giá  --}}
							<div class="mb-5 star_rating">
								<h4 class="inner-title mb-4">Đánh giá</h4>
								<form action="#" method="post">
									<div class="row">
										<div class="col-md-12">
											<div class="mb-4 d-inline-block">
												<span>Move Mouse for Rating</span>
												<select id="example-reversed" name="rating" autocomplete="off">
													<option value="Strongly Disagree">Very Bad Review</option>
													<option value="Disagree">Bad Review</option>
													<option value="Neither Agree or Disagree" selected="selected">Good Review</option>
													<option value="Agree">Very Good Quality</option>
													<option value="Strongly Agree">Excellent Quality</option>
												</select>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<input class="form-control" type="text" value="{{ $bangtin->user->member->kh_ho }} {{ $bangtin->user->member->kh_ten }}" name="hoten" readonly="">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<input class="form-control" type="text" value="{{ $bangtin->user->member->kh_email }}" name="hoten" readonly="">
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<div class="form-group">
												<textarea rows="5" class="form-control resize_none" name="ratingcomments" placeholder="Nội dung đánh giá"></textarea>
											</div>
										</div>
										<div class="col-md-12 col-sm-12">
											<input id="send" class="btn btn_primary" value="Send" type="submit">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				{{--  Bài đánh giá  --}}
				
				<div class="col-md-12">
					<div class="people_rating">
						<h4 class="inner-title mb-5">Review and Comments</h4>
						<div class="comment_item">
							<img src="{{ asset('public/house/img/blog_detail\comment-1.png')}}" alt="">
							<div class="author_text">
								<div class="author_info">
									<h5 class="author_name">Rebecca D. Nagy </h5>
									<span>27 February, 2017 at 3.27 pm</span>
								</div>
								<div class="user-rating">
									<ul>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="deactive"></li>
									</ul>
								</div>
								<p>Fermentum mus porttitor tempor arcu posuere. Nibh consectetuer condimentum ultricies pulvinar eget pede litora interdum magna aenean ullamcorper nisi dis. Viverra. Vulputate. Quisque neque luctus quis rhoncus.</p>
								<a href="#" class="btn btn_primary">Replay</a>
							</div>
						</div>
						<div class="comment_item">
							<img src="{{ asset('public/house/img/blog_detail\comment-2.png')}}" alt="">
							<div class="author_text">
								<div class="author_info">
									<h5 class="author_name">Charles F. Bush </h5>
									<span>12 February, 2017 at 10.32 pm</span>
								</div>
								<div class="user-rating">
									<ul>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
									</ul>
								</div>
								<p>FUllamcorper parturient elit, mauris congue duis morbi lacus eget id pellentesque commodo porta bibendum ullamcorper mauris dui fusce dolor massa class ultricies.</p>
								<a href="#" class="btn btn_primary">Replay</a>
							</div>
						</div>
						<div class="comment_item replay">
							<img src="{{ asset('public/house/img/blog_detail\comment-3.png')}}" alt="">
							<div class="author_text">
								<div class="author_info">
									<h5 class="author_name">Patty Hurd </h5>
									<span>17 February, 2017 at 11.17 am</span>
								</div>
								<div class="user-rating">
									<ul>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="deactive"></li>
										<li class="deactive"></li>
									</ul>
								</div>
								<p>Pretium urna nonummy sodales, dictumst blandit, magna. Quis porttitor lobortis lectus fringilla nam at Sociis vel pharetra enim per praesent viverra consequat litora, pharetra turpis magna tincidunt curae; molestie non.</p>
								<a href="#" class="btn btn_primary">Replay</a>
							</div>
						</div>
						<div class="comment_item">
							<img src="{{ asset('public/house/img/blog_detail\comment-4.png')}}" alt="">
							<div class="author_text">
								<div class="author_info">
									<h5 class="author_name">Joseph Richard  </h5>
									<span>30 January, 2017 at 10.32 pm</span>
								</div>
								<div class="user-rating">
									<ul>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="active"></li>
										<li class="deactive"></li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
			<div class="col-lg-4">
				<div class="property_sidebar mt-5">
					<div class="property_listing sidebar-widget">
						
							
						<h4 class="widget-title mb-4 ">Tóm tắt bảng tin</h4>
							
						
						<ul>
							<li><span>Code :</span> {{ $bangtin->code_bangtin }}</li>
							<li><span>Khuyến mãi :</span> For Sale</li>

							<li><span>Loại nhà  :</span>  {{ $bangtin->house->loainha->ten_loai }}</li>

							<li><span>Giá :</span> {{ number_format($bangtin->gia_thue,0,',','.') }} đ / tháng</li>

                            <li><span>Diện tích :</span>  {{ $bangtin->house->dien_tich }} m²</li>
                            
							<li><span>Rating :</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i> (12)
							</li>
						</ul>
						<div class="rle_property_details_box">
							{{--    --}}
							<div class="user_info">
	
								@if($bangtin->user->member->kh_avatar)
	
								<img height="100px" width="100px" src="{{ asset('public/upload/avatar') }}/{{ $bangtin->user->member->kh_avatar }}">
									
								@elseif($bangtin->user->member->kh_gioitinh == 1)
	
									<img height="100px" width="100px" src="{{asset('public/house/man.png')}}" alt="">
										
								
								@elseif($bangtin->user->member->kh_gioitinh == 2)
	
									<img height="100px" width="100px" src="{{asset('public/house/woman.png')}}" alt="">
										
	
								@endif
	
										
								
								<h4>{{ $bangtin->user->member->kh_ho }} {{ $bangtin->user->member->kh_ten }}</h4>
								<p>
									@if($bangtin->user->vai_tro == 1)
	
										<span style="color: #ffc107">Admin</span>
										{{--  Admin  --}}
	
									@elseif($bangtin->user->vai_tro == 2)
	
										<span style="color: #90c923">Thành viên</span>
										{{--  Thành viên  --}}
										
									@endif
	
								</p>
								<ul>
									<li><a href="#" class="clr_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#" class="clr_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#" class="clr_linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							{{--  fail  --}}
							<div class="user_info_share style_2">
								<ul>
									<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> 0{{  number_format($bangtin->user->member->kh_phone,0,' ',' ') }}</a></li>
	
									<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> {{ $bangtin->user->member->kh_email }}</a></li>
	
									<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> {{ date("d-m-Y",strtotime($bangtin->user->created_at))  }} (Ngày tham gia)</a></li>
								</ul>
							</div>
	
							
	
							<form action="{{ Route('addcart',['id' => $bangtin->id]) }}" method="POST"  > {{ csrf_field() }}	
								<div class="user_info_form">
									<div> Ngày đến:</div>
									<input name="ngayden" class="form-controll" type="date" required>

									<div style="margin-bottom: 10px;">
										<div> Thời gian thuê </div>
										<select name="thoigiano" class="selectpicker form-control" style="width: 31% !important;">
											<option value="#">Chọn thời gian thuê</option>
											<option value="1">1 tháng</option>
											<option value="2" >2 tháng</option>
											<option value="3" >3 tháng</option>
											<option value="4" >4 tháng</option>
											<option value="5" >5 tháng</option>
											<option value="6" >6 tháng</option>
											<option value="7" >7 tháng</option>
											<option value="8" >8 tháng</option>
											<option value="9" >9 tháng</option>
											<option value="10" >10 tháng</option>
											<option value="11" >11 tháng</option>
											<option value="12" >12 tháng</option>
										</select>
									</div>
								
									@if(Auth::check())
									<button type="submit"  class="rle_btn" ><i class="fa fa-shopping-cart"></i> BOOK NOW </button>
									@else
									<a  href="{{Route('page.login')}}" class="btn btn-danger" > <i class="fa fa-unlock-alt"></i>&nbsp Đăng nhập </a> 
									@endif
								</div>
							</form>
						</div>

					</div>

					
				</div>

					{{--  Tìm kiếm  --}}
					<div class="property_form sidebar-widget">
						<form class="price-filter" action="#" method="post">
							<div class="row">
								<div class="col-lg-12">
									<h4 class="widget-title mb-4">Price</h4>
								</div>
								<div class="col-lg-12">
									<div class="price_range mb-5">
										<div class="area-filter price-filter">
											<span class="price-slider">
												<input class="area_filter" type="text" name="price" value="0;10000">
											</span>
										

										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<h4 class="widget-title mb-4">Area</h4>
								</div>
								<div class="col-lg-12">
									<div class="price_range mb-5">
										<div class="area-filter price-filter">
											<span class="price-slider">
												<input class="area_filter" type="text" name="price" value="0;10000">
											</span>
										

										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<h4 class="widget-title mb-4">Advance Search</h4>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="form-group">
										<select class="selectpicker form-control">
											<option>Any Status</option>
											<option>For Rent</option>
											<option>For Sale</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="form-group">
										<select class="selectpicker form-control">
											<option>Any Type</option>
											<option>House</option>
											<option>Office</option>
											<option>Appartment</option>
											<option>Condos</option>
											<option>Villa</option>
											<option>Small Family</option>
											<option>Single Room</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 col-md-6">
									<div class="form-group">
										<select class="selectpicker form-control" data-live-search="true">
											<option>Any States</option>
											<option>New York</option>
											<option>Sydney</option>
											<option>Washington</option>
											<option>Las Vegas</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12  col-md-6">
									<div class="form-group">
										<select class="selectpicker form-control" data-live-search="true">
											<option>All City</option>
											<option>New York</option>
											<option>Sydney</option>
											<option>Washington</option>
											<option>Las Vegas</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<select class="selectpicker form-control">
											<option>Beds</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>6</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="form-group">
										<select class="selectpicker form-control">
											<option>Baths</option>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<button name="search" class="btn btn_primary w-100" type="submit">Tìm kiếm </button>
								</div>
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

{{--  nhà liên quan  --}}
<section class="full_row py_80 bg_gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="d-table float-left mb_30">Những nhà cùng loại</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel owl_carousel_1">

					<div class="property_grid_1 property_item bg-white mb_30">
						<div class="zoom_effect_1">
							<div class="upper_1 bg_secondary text-white">Rent</div>
							<div class="upper_2 bg_primary text-white">Featured</div>
							<a href="#"><img src="{{ asset('public/house/img/property_grid\property_grid-3.png')}}" alt="Image Not Found!"></a>
							<div class="upper_3 text_secondary">10 Days Ago</div>
						</div>
						<div class="property_text p-3">
							<h5 class="title"><a href="#">Park Road Appartment Rent</a></h5>
							<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 3225 George Street Brooksville, FL 34610 </span>
							<div class="quantity">
								<ul>
									<li><span>Area</span>2100 Sqft</li>
									<li><span>Rooms</span>8</li>
									<li><span>Beds</span>4</li>
									<li><span>Baths</span>3</li>
									<li><span>Garage</span>1</li>
								</ul>
							</div>
						</div>
						<div class="bed_area d-table w-100">
							<ul>
								<li>$1600/mo</li>
								<li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
								</li>
								<li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
								</li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>


<script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

<script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
	   
{!! Toastr::message() !!}

	<script type="text/javascript" src="{{ asset('public/single/js/jquery.js')}}"></script> 
	<script type="text/javascript" src="{{ asset('public/single/js/jquery-ui.js')}}"></script> 
	<script type="text/javascript" src="{{ asset('public/single/js/owl.carousel.js')}}"></script> 
	<script type="text/javascript" src="{{ asset('public/single/js/swiper.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('public/single/js/custom.js')}}"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

	<script async defer 
		src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&&amp;libraries=places%2Cgeometry&amp;callback=initMap&amp;ver=1">
	</script>
		


	<script>
		var lat = {{ $bangtin->house->lat }};
		var lng = {{ $bangtin->house->lng }};

		function initMap() {
			var map = new google.maps.Map(document.getElementById('map'), {
				center: {   
					lat: lat, 
					lng: lng
					},
				zoom: 15
			});

			var marker = new google.maps.Marker({
				position:{
					lat: lat, 
					lng: lng
				},
				map : map,
				icon: '{{ asset('public/map.png') }}',
			});

			
		}
	</script>



@endsection