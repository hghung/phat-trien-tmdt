@extends('house.master')
@section('tieude','Danh sách bảng tin')
@section('house_content')

<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Chi tiết bảng tin 
                        <span style="color: #90c923">{{ $bangtin->code_bangtin }}</span>
                    </h3>
					<ul class="page_location float-right">
						<li><a href="index_1.html">Home</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Chi tiết bảng tin
                            <span style="color: #90c923">{{ $bangtin->code_bangtin }}</span>
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
	<!--  -->
	
	<div id="slider" class="overflow_hidden" style="width:1200px; height:640px; margin:0 auto;margin-bottom: 0px;">
        
        @foreach($bangtin->house->hinhanh as $hinhanh)
		<!-- Slide 1-->
		<div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
			<img width="911" height="496" src="{{ asset('public/upload/') }}/{{ $hinhanh->hinh_anh }}" class="ls-bg" alt="">
        </div>
        @endforeach
		
		
		

		
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
								<span class=""><i class="fas fa-map-marker-alt"></i> 402 Henry Ford Avenue Sand Springs, LA 74063 </span>
							</div>
							
							<p> {!! $bangtin->mo_ta !!}</p>

							<div class="more_information my-5 d-inline-block">
								<h4 class="inner-title mb-4">Nhiều thông tin</h4>
								<ul>
									<li><span>Age :</span> 10 Years</li>
									<li><span>Type :</span> Appartment</li>
									<li><span>Installment Facility :</span> Yes</li>
									<li><span>Insurance :</span> Yes</li>
									<li><span>3rd Party :</span> No</li>
									<li><span>Swiming Pool :</span> Yes</li>
									<li><span>Garden & Field :</span> 2400sqft</li>
									<li><span>Total Floor :</span> 3 Floor</li>
									<li><span>Security :</span> 3 Step Security</li>
									<li><span>Alivator :</span> 2 Large</li>
									<li><span>Dining Capacity :</span> 20 People</li>
									<li><span>Exit :</span> 3 Exit Gate</li>
									<li><span>Fire Place :</span> Yes</li>
									<li><span>Heating System :</span> Floor Heating</li>
								</ul>
							</div>
							
							<div class="single_feature mb-5">
								<h4 class="inner-title mb-4">Đặc trưng</h4>
								<ul class="icon_list_1">
									<li>Fitness Lab and Room</li>
									<li>Swiming Pools</li>
									<li>Parking Facility</li>
									<li>Green Park View</li>
									<li>Playground Include</li>
									<li>Garden</li>
									<li>Kitchen Furniture</li>
									<li>Fire Security</li>
									<li>High Class Door</li>
									<li>Store Room</li>
									<li>Marble Floor</li>
								</ul>
							</div>
							<div class="single_map mb-5">
								<h4 class="inner-title mb-4">Bản đồ</h4>
								<div id="map" class="map-canvas"> </div>
							</div>
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
												<input class="form-control" type="text" value="{{ Auth::user()->member->kh_ho }} {{ Auth::user()->member->kh_ten }}" name="hoten" readonly="">
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="form-group">
												<input class="form-control" type="text" value="{{ Auth::user()->member->kh_email }}" name="hoten" readonly="">
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
				<!-- Property Commsnts -->
				<div class="row">
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
									<p>Hac placerat. Morbi. Parturient. Nulla porta duis. Donec fames vel. Quam sem. Purus odio ultrices augue. Diam ridiculus cras luctus.</p>
									<a href="#" class="btn btn_primary">Replay</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End Property Comments -->
			</div>
			<div class="col-lg-4">
				<div class="property_sidebar mt-5">
					<div class="property_listing sidebar-widget">
						<h4 class="widget-title mb-4">Tóm tắt bảng tin</h4>
						<ul>
							<li><span>Code :</span> {{ $bangtin->code_bangtin }}</li>
							<li><span>Khuyến mãi :</span> For Sale</li>
							<li><span>Loại nhà  :</span> Condos</li>
							<li><span>Giá :</span> $375,000</li>
                            <li><span>Diện tích :</span> 6500 sqft</li>
                            
                            <li>
								<span>Phòng ngủ :</span>
								{{--  lấy ra có bảng trung gian hasMany xong tới belongsTo --}}
								@foreach($bangtin->house->taisan as $bangtin2)
									@if($bangtin2->taisan2->ten_ts == 'Phòng ngủ')
										{{ $bangtin2->so_luong }}
									@endif
								@endforeach
                            </li>
                            
                            <li><span>Phòng tắm :</span> 4</li>
                            
							<li><span>Car Garage :</span> Yes ( 5 Capacity )</li>
							<li><span>Swimming :</span> Yes ( 1 Large )</li>
							<li><span>Garden :</span> Yes</li>
							<li><span>Rating :</span>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i> (12)
							</li>
						</ul>
					</div>
					<div class="contact_agent sidebar-widget">
						<div class="author_img">
							<img src="{{ asset('public/house/img/testimonial\2.png')}}" alt="">
							<div class="agent_info">
								<h5 class="author_name">Rebecca D. Nagy</h5>
								<span>+( 81 ) 84 538 91231</span>
							</div>
						</div>
						<form action="#" method="post">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Your Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" name="email" placeholder="Your Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="message" placeholder="Message" rows="5"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<button type="submit" class="btn btn_primary" name="submit">Send</button>
								</div>
							</div>
						</form>
					</div>
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
									<button name="search" class="btn btn_primary w-100" type="submit">search property</button>
								</div>
							</div>
						</form>
					</div>
					<div class="featured_sidebar sidebar-widget">
						<h4 class="widget-title mb-4">Featured Property</h4>
						<div class="owl-carousel owl_carousel_5">
							<div class="property_grid_1 property_item">
								<div class="position-relative">
									<div class="upper_1 bg_secondary text-white">Sale</div>
									<a href="#"><img src="{{ asset('public/house/img/property_grid\property_grid-4.png')}}" alt="Image Not Found!"></a>
									<div class="quantity">
										<ul>
											<li><span>Area</span>1600 Sqft</li>
											<li><span>Rooms</span>7</li>
											<li><span>Beds</span>4</li>
											<li><span>Baths</span>3</li>
											<li><span>Garage</span>1</li>
										</ul>
									</div>
								</div>
								<div class="property_text p-3">
									<h5 class="title"><a href="#">New Developed Condos</a></h5>
									<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 4213 Duff Avenue South Burlington, VT 05403 </span>
								</div>
								<div class="bed_area d-table w-100">
									<ul>
										<li>$150,000</li>
										<li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
										</li>
										<li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="property_grid_1 property_item">
								<div class="position-relative">
									<div class="upper_1 bg_secondary text-white">Sale</div>
									<a href="#"><img src="{{ asset('public/house/img/property_grid\property_grid-5.png')}}" alt="Image Not Found!"></a>
									<div class="quantity">
										<ul>
											<li><span>Area</span>1600 Sqft</li>
											<li><span>Rooms</span>7</li>
											<li><span>Beds</span>4</li>
											<li><span>Baths</span>3</li>
											<li><span>Garage</span>1</li>
										</ul>
									</div>
								</div>
								<div class="property_text p-3">
									<h5 class="title"><a href="#">New Developed Condos</a></h5>
									<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 4213 Duff Avenue South Burlington, VT 05403 </span>
								</div>
								<div class="bed_area d-table w-100">
									<ul>
										<li>$150,000</li>
										<li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
										</li>
										<li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="property_grid_1 property_item">
								<div class="position-relative">
									<div class="upper_1 bg_secondary text-white">Sale</div>
									<a href="#"><img src="{{ asset('public/house/img/property_grid\property_grid-6.png')}}" alt="Image Not Found!"></a>
									<div class="quantity">
										<ul>
											<li><span>Area</span>1600 Sqft</li>
											<li><span>Rooms</span>7</li>
											<li><span>Beds</span>4</li>
											<li><span>Baths</span>3</li>
											<li><span>Garage</span>1</li>
										</ul>
									</div>
								</div>
								<div class="property_text p-3">
									<h5 class="title"><a href="#">New Developed Condos</a></h5>
									<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 4213 Duff Avenue South Burlington, VT 05403 </span>
								</div>
								<div class="bed_area d-table w-100">
									<ul>
										<li>$150,000</li>
										<li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
										</li>
										<li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
										</li>
									</ul>
								</div>
							</div>
							<div class="property_grid_1 property_item">
								<div class="position-relative">
									<div class="upper_1 bg_secondary text-white">Sale</div>
									<a href="#"><img src="{{ asset('public/house/img/property_grid\property_grid-7.png')}}" alt="Image Not Found!"></a>
									<div class="quantity">
										<ul>
											<li><span>Area</span>1600 Sqft</li>
											<li><span>Rooms</span>7</li>
											<li><span>Beds</span>4</li>
											<li><span>Baths</span>3</li>
											<li><span>Garage</span>1</li>
										</ul>
									</div>
								</div>
								<div class="property_text p-3">
									<h5 class="title"><a href="#">New Developed Condos</a></h5>
									<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 4213 Duff Avenue South Burlington, VT 05403 </span>
								</div>
								<div class="bed_area d-table w-100">
									<ul>
										<li>$150,000</li>
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
		</div>
	</div>
</section>

<!-- Featured Section Start -->
<section class="full_row py_80 bg_gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="d-table float-left mb_30">Related Properties</h4>
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
					<div class="property_grid_1 property_item bg-white mb_30">
						<div class="zoom_effect_1">
							<div class="upper_1 bg_secondary text-white">Sale</div>
							<div class="upper_2 bg_primary text-white">Featured</div>
							<a href="#"><img src="{{ asset('public/house/img/property_grid\property_grid-1.png')}}" alt="Image Not Found!"></a>
							<div class="upper_3 text_secondary">1 Month Ago</div>
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
					<div class="property_grid_1 property_item bg-white mb_30">
						<div class="zoom_effect_1">
							<div class="upper_1 bg_secondary text-white">Rent</div>
							<div class="upper_2 bg_primary text-white">Featured</div>
							<a href="#"><img src="{{ asset('public/house/img/property_grid\property_grid-2.png')}}" alt="Image Not Found!"></a>
							<div class="upper_3 text_secondary">5 Days Ago</div>
						</div>
						<div class="property_text p-3">
							<h5 class="title"><a href="#">Park Road Appartment Rent</a></h5>
							<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 3494 Lyon Avenue Middleboro, MA 02346 </span>
							<div class="quantity">
								<ul>
									<li><span>Area</span>1100 Sqft</li>
									<li><span>Rooms</span>5</li>
									<li><span>Beds</span>2</li>
									<li><span>Baths</span>2</li>
									<li><span>Garage</span>1</li>
								</ul>
							</div>
						</div>
						<div class="bed_area d-table w-100">
							<ul>
								<li>$1,410,000</li>
								<li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
								</li>
								<li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="property_grid_1 property_item bg-white mb_30">
						<div class="zoom_effect_1">
							<div class="upper_1 bg_secondary text-white">Rent</div>
							<a href="#"><img src="{{ asset('public/house/img/property_grid\property_grid-4.png')}}" alt="Image Not Found!"></a>
							<div class="upper_3 text_secondary">2 Hours Ago</div>
						</div>
						<div class="property_text p-3">
							<h5 class="title"><a href="#">Lovelece Road Greenfield</a></h5>
							<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 4213 Duff Avenue South Burlington, VT 05403 </span>
							<div class="quantity">
								<ul>
									<li><span>Area</span>1200 Sqft</li>
									<li><span>Rooms</span>7</li>
									<li><span>Beds</span>5</li>
									<li><span>Baths</span>4</li>
									<li><span>Garage</span>1</li>
								</ul>
							</div>
						</div>
						<div class="bed_area d-table w-100">
							<ul>
								<li>$850/mo</li>
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
<!-- Featured Section End --> 

@endsection