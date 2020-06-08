@extends('house.master')
@section('tieude','Danh sách bảng tin')
@section('house_content')

<!-- Banner Section Start -->
<section class="full_row bg_img_5 py_80 overlay_1 page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_banner">
					<h3 class="title text_white d-table float-left">Danh sách bảng tin</h3>
					<ul class="page_location float-right">
						<li><a href="{{ route('page.home') }}">Home</a>
						</li>
						<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						</li>
						<li><span>Danh sách bảng tin</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Banner Section End -->



<!-- Find Part Satrt -->
<div class="full_row py_80 bg_white">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="property_search_form">
					<form action="#" method="post" class="property_filter_input">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<select class="selectpicker form-control">
										<option>Any Status</option>
										<option>For Rent</option>
										<option>For Sale</option>
									</select>
								</div>
							</div>
							<div class="col-md-9 col-sm-6">
								<div class="form-group">
									<input type="search" placeholder="Search by city, state or address" class="form-control search_property">
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<select class="selectpicker form-control">
										<option>Bedrooms</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>6</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<select class="selectpicker form-control">
										<option>Bathrooms</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
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
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" name="minprice" placeholder="Min Price (USD)">
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" name="maxprice" placeholder="Max Price (USD)">
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" name="minarea" placeholder="Min Area (sqft)">
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<input type="text" class="form-control" name="maxarea" placeholder="Max Area (sqft)">
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="form-group">
									<input type="submit" name="search" class="btn btn_primary" value="Search">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Find Part End -->

<!-- Property List Start -->
<section class="full_row py_80 bg_gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="property_sorting mb_30 d-inline-block w-100">
					<form class="property_filter" action="#" method="post">
						<select class="selectpicker form-control float-left" data-width="fit">
							<option>Any Type</option>
							<option>For Rent</option>
							<option>For Sale</option>
						</select>
						<ul class="float-right">
							<li>
								<span>Order:</span>
								<select class="selectpicker form-control" data-width="fit">
									<option>Default Order</option>
									<option>Featured</option>
									<option>Price Hight</option>
									<option>Price Low</option>
									<option>Latest Item</option>
									<option>Oldest Item</option>
								</select>
							</li>
							<li>
								<a href="property_grid.html"><i class="fa fa-th" aria-hidden="true"></i></a>
							</li>
							<li>
								<a class="active" href="property_list.html"><i class="fa fa-th-list" aria-hidden="true"></i></a>
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
		
		<!-- Property Grid Start -->
		<div class="row">
			@foreach($bangtin as $bangtin2)
			<div class="col-lg-4 col-md-6">
				<div class="property_grid_1 property_item bg-white mb_30">
					<div class="zoom_effect_1">
						<div class="upper_1 bg_secondary text-white">Sale</div>
						<div class="upper_2 bg_primary text-white">Featured</div>
						<a href="#">
                            <img width="348px" height="233px" src="{{ asset('public/upload/') }}/{{ $bangtin2->house->hinh_anh }}" alt="Image Not Found!">
						</a>
						

						<div class="upper_3 text_secondary">{{ $bangtin2->created_at->diffForHumans() }}</div>
					</div>
					
					
					<div class="property_text p-3">
						<h5 class="title">
                            <a href="{{ route('deatil.bangtin',['id' => $bangtin2->id]) }}">{{ $bangtin2->ten_bangtin }}</a>
                        </h5>
						<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> {{ $bangtin2->house->dia_chi }} </span>
						<div class="quantity">
							<ul>
								<li><span>Diện tích</span>{{ $bangtin2->house->dien_tich }} m²</li>
								<li><span>Rooms</span>7</li>
								<li><span>Beds</span>4</li>
								<li><span>Baths</span>3</li>
								<li><span>Garage</span>1</li>
							</ul>
						</div>
					</div>
					<div class="bed_area d-table w-100">
						<ul>
							<li>{{ number_format($bangtin2->gia_thue,0,',','.') }} đ/tháng</li>
							<li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
							</li>
							<li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
							</li>
						</ul>
					</div>
				</div>
            </div>
            @endforeach
			
		</div>
		<!-- Property Grid End -->
		
		<div class="row">
			<div class="col-md-12">
				<div class="pagination_style1">
					<nav aria-label="page navigation">
						<ul class="pagination">
                            {{-- Phân trang --}}
							{{-- <li>
                                {!! $bangtin->links() !!}
							</li> --}}
							
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Property List End -->

@endsection