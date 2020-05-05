@extends('house.master')
@section('tieude','Admin')
@section('content')
<!-- Breadcrumb Wrapper start -->
@section('hiden2')
<div class="rle_banner_wrapper style_4">
	<div class="rle_header_wrapper style_4">
@endsection
<!-- Breadcrumb Wrapper start -->
<div class="rle_pagetitle_wrapper rle_toppadder40 rle_bottompadder40">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="page_title">
					<h2>Property grid Fullwidth</h2>
				</div>
				<ul class="breadcrumb">
					<li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> home</a></li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
					<li><a href="property_gird_fullwidth.html">Property grid</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Tab Form Section start -->
<div class="rle_searchform_wrapper2 rle_toppadder100 rle_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_searchform_tabs style_3">
					<div class="row">
						<div class="rle_searchform_box style_3">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<input type="serch" placeholder="Street, town & landmark">
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<select>
									<option>Location</option>
									<option value="1">Location 1</option>
									<option value="2">Location 2</option>
									<option value="3">Location 3</option>
								</select>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<select>
									<option>Property status</option>
									<option value="1">Status 1</option>
									<option value="2">Status 2</option>
									<option value="3">Status 3</option>
								</select>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
								<select>
									<option>All property types</option>
									<option value="1">Types 1</option>
									<option value="2">Types 2</option>
									<option value="3">Types 3</option>
								</select>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<select>
									<option>Bedroom</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<select>
									<option>Bathroom</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
							<select>
								<option>Parking</option>
								<option value="1">Parking 1</option>
								<option value="2">Parking 2</option>
								<option value="3">Parking 3</option>
							</select>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<label for="amount">Price</label>
								<div id="slider-range"></div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<label for="amount">Area</label>
								<div id="slider-area"></div>
							</div>
							<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
								<button class="rle_btn"><i class="fa fa-search" aria-hidden="true"></i> search</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Property Wrapper start -->
<div class="rle_property_wrapper rle_toppadder100 rle_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_shorting_wrapper">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-7 col-xs-12">
							<ul class="rle_short_by">
								<li>
								<span>Sort by</span>
								<select>
									<option>Price (Low - High)</option>
									<option value="1">$1</option>
									<option value="2">$2</option>
									<option value="3">$3</option>
								</select>
								</li>
								<li>
								<span>Properties</span>
								<select>
									<option value="1">20</option>
									<option value="2">15</option>
									<option value="3">10</option>
								</select>
								</li>
							</ul>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-5 col-xs-12">
							<ul class="rle_view_type">
								<span>View</span>
								<li><a href="{{ route('page.list2') }}"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
								<li><a href="{{ route('page.list') }}"><i class="fa fa-list-ul" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="rle_property_infobox">
					<div class="rle_property_infobox_img">
						<img src="{{asset('public/house/img/pro1.jpg')}}" alt="" title="">
						<span><sup>$</sup>650.000</span>
					</div>
					<div class="rle_property_infobox_details">
						<div class="rle_property_infobox_details_header">
							<ul>
								<li class="rle_red_clr">for sale</li>
								<li class="rle_black_clr">hot offer</li>
							</ul>
							<h3><a href="#">The Chalet Estate</a></h3>
							<p>KT89B Hampton Court, England, United Kingdom</p>
						</div>
						<div class="rle_property_infobox_details_footer">
							<p>Area : 3578 sqft </p>
							<ul>
								<li><i class="fa fa-bed" aria-hidden="true"></i> 03</li>
								<li><i class="fa fa-bath" aria-hidden="true"></i> 02</li>
								<li><i class="fa fa-taxi" aria-hidden="true"></i> yes</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="rle_property_infobox">
					<div class="rle_property_infobox_img">
						<img src="{{asset('public/house/img/pro2.jpg')}}" alt="" title="">
						<span><sup>$</sup>4800.00<sub>/mon</sub></span>
					</div>
					<div class="rle_property_infobox_details">
						<div class="rle_property_infobox_details_header">
							<ul>
								<li class="rle_green_clr">for rent</li>
							</ul>
							<h3><a href="#">Morden Apartment</a></h3>
							<p>KT89B Hampton Court, England, United Kingdom</p>
						</div>
						<div class="rle_property_infobox_details_footer">
							<p>Area : 3578 sqft </p>
							<ul>
								<li><i class="fa fa-bed" aria-hidden="true"></i> 03</li>
								<li><i class="fa fa-bath" aria-hidden="true"></i> 02</li>
								<li><i class="fa fa-taxi" aria-hidden="true"></i> yes</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="rle_property_infobox">
					<div class="rle_property_infobox_img">
						<img src="{{asset('public/house/img/pro3.jpg')}}" alt="" title="">
						<span><sup>$</sup>4800.00<sub>/mon</sub></span>
					</div>
					<div class="rle_property_infobox_details">
						<div class="rle_property_infobox_details_header">
							<ul>
								<li class="rle_green_clr">for rent</li>
								<li class="rle_black_clr">hot offer</li>
							</ul>
							<h3><a href="#">Luxurious Deplux</a></h3>
							<p>KT89B Hampton Court, England, United Kingdom</p>
						</div>
						<div class="rle_property_infobox_details_footer">
							<p>Area : 3578 sqft </p>
							<ul>
								<li><i class="fa fa-bed" aria-hidden="true"></i> 03</li>
								<li><i class="fa fa-bath" aria-hidden="true"></i> 02</li>
								<li><i class="fa fa-taxi" aria-hidden="true"></i> yes</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="rle_property_infobox">
					<div class="rle_property_infobox_img">
						<img src="{{asset('public/house/img/pro4.jpg')}}" alt="" title="">
						<span><sup>$</sup>650.00</span>
					</div>
					<div class="rle_property_infobox_details">
						<div class="rle_property_infobox_details_header">
							<ul>
								<li class="rle_red_clr">for sale</li>
							</ul>
							<h3><a href="#">Westbourne House</a></h3>
							<p>KT89B Hampton Court, England, United Kingdom</p>
						</div>
						<div class="rle_property_infobox_details_footer">
							<p>Area : 3578 sqft </p>
							<ul>
								<li><i class="fa fa-bed" aria-hidden="true"></i> 03</li>
								<li><i class="fa fa-bath" aria-hidden="true"></i> 02</li>
								<li><i class="fa fa-taxi" aria-hidden="true"></i> yes</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="rle_property_infobox">
					<div class="rle_property_infobox_img">
						<img src="{{asset('public/house/img/pro5.jpg')}}" alt="" title="">
						<span><sup>$</sup>650.00</span>
					</div>
					<div class="rle_property_infobox_details">
						<div class="rle_property_infobox_details_header">
							<ul>
								<li class="rle_red_clr">for sale</li>
							</ul>
							<h3><a href="#">Sturrock Place Gordon</a></h3>
							<p>KT89B Hampton Court, England, United Kingdom</p>
						</div>
						<div class="rle_property_infobox_details_footer">
							<p>Area : 3578 sqft </p>
							<ul>
								<li><i class="fa fa-bed" aria-hidden="true"></i> 03</li>
								<li><i class="fa fa-bath" aria-hidden="true"></i> 02</li>
								<li><i class="fa fa-taxi" aria-hidden="true"></i> yes</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<div class="rle_property_infobox">
					<div class="rle_property_infobox_img">
						<img src="{{asset('public/house/img/pro6.jpg')}}" alt="" title="">
						<span><sup>$</sup>4800.00<sub>/mon</sub></span>
					</div>
					<div class="rle_property_infobox_details">
						<div class="rle_property_infobox_details_header">
							<ul>
								<li class="rle_green_clr">for rent</li>
								<li class="rle_black_clr">hot offer</li>
							</ul>
							<h3><a href="#">Valmark Orchard</a></h3>
							<p>KT89B Hampton Court, England, United Kingdom</p>
						</div>
						<div class="rle_property_infobox_details_footer">
							<p>Area : 3578 sqft </p>
							<ul>
								<li><i class="fa fa-bed" aria-hidden="true"></i> 03</li>
								<li><i class="fa fa-bath" aria-hidden="true"></i> 02</li>
								<li><i class="fa fa-taxi" aria-hidden="true"></i> yes</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_pagination_wrapper">
					<nav>
						<ul class="pagination">
							<li><a href="#"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
							<li><a href="#">01</a></li>
							<li><a href="#">02</a></li>
							<li><a href="#">03</a></li>
							<li class="active"><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> <span class="sr-only">(current)</span></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection