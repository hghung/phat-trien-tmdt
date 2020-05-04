@extends('house.master')
@section('tieude','Admin')
@section('content')

@section('hiden')
<div class="rle_banner_wrapper ">
    <div class="rle_header_wrapper">
@endsection
@section('hiden3')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="rle_banner_text">
				<h1>luxury properties <span>for sale</span></h1>
				<p>Exclusive luxury residential specialists</p>
			</div>
		</div>
	</div>
</div>
@endsection

<!-- Tab Form Section start -->
<div class="rle_searchform_wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_searchform_tabs">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#buy" aria-controls="buy" role="tab" data-toggle="tab">buy</a></li>
						<li role="presentation"><a href="#rent" aria-controls="rent" role="tab" data-toggle="tab">rent</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="buy">
							<div class="row">
								<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
									<div class="rle_searchform_box">
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
											<input type="serch" placeholder="Street, town & landmark">
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
											<select>
												<option>Location</option>
												<option value="1">Location 1</option>
												<option value="2">Location 2</option>
												<option value="3">Location 3</option>
											</select>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
											<select>
												<option>Property status</option>
												<option value="1">Status 1</option>
												<option value="2">Status 2</option>
												<option value="3">Status 3</option>
											</select>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
											<select>
												<option>All property types</option>
												<option value="1">Types 1</option>
												<option value="2">Types 2</option>
												<option value="3">Types 3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
											<select>
												<option>Bedroom</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
											<select>
												<option>Bathroom</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
											<select>
												<option>Min price</option>
												<option value="1">$1</option>
												<option value="2">$2</option>
												<option value="3">$3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
											<select>
												<option>Max price</option>
												<option value="1">$1</option>
												<option value="2">$2</option>
												<option value="3">$3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
											<select>
												<option>Min area</option>
												<option value="1">1 Sqr/ft</option>
												<option value="2">2 Sqr/ft</option>
												<option value="3">3 Sqr/ft</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
											<select>
												<option>Max area</option>
												<option value="1">1 Sqr/ft</option>
												<option value="2">2 Sqr/ft</option>
												<option value="3">3 Sqr/ft</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
									<div class="rle_searchform_btn">
										<img src="{{asset('public/house/img/search_icon.png')}}">
										<p>search</p>
									</div>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="rent">
							<div class="row">
								<div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
									<div class="rle_searchform_box">
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
											<input type="serch" placeholder="Street, town & landmark">
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
											<select>
												<option>Location</option>
												<option value="1">Location 1</option>
												<option value="2">Location 2</option>
												<option value="3">Location 3</option>
											</select>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
											<select>
												<option>Property status</option>
												<option value="1">Status 1</option>
												<option value="2">Status 2</option>
												<option value="3">Status 3</option>
											</select>
										</div>
										<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
											<select>
												<option>All property types</option>
												<option value="1">Types 1</option>
												<option value="2">Types 2</option>
												<option value="3">Types 3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
											<select>
												<option>Bedroom</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
											<select>
												<option>Bathroom</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
											<select>
												<option>Min price</option>
												<option value="1">$1</option>
												<option value="2">$2</option>
												<option value="3">$3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
											<select>
												<option>Max price</option>
												<option value="1">$1</option>
												<option value="2">$2</option>
												<option value="3">$3</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
											<select>
												<option>Min area</option>
												<option value="1">1 Sqr/ft</option>
												<option value="2">2 Sqr/ft</option>
												<option value="3">3 Sqr/ft</option>
											</select>
										</div>
										<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
											<select>
												<option>Max area</option>
												<option value="1">1 Sqr/ft</option>
												<option value="2">2 Sqr/ft</option>
												<option value="3">3 Sqr/ft</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
									<div class="rle_searchform_btn">
										<img src="{{asset('public/house/img/search_icon.png')}}">
										<p>search</p>
									</div>
								</div>
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
				<div class="rle_center_heading rle_bottompadder60">
					<h1>Top properties</h1>
					<p>Check out some of our listed properties</p>
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
				<div class="rle_btn_wrapper rle_toppadder40">
					<a href="{{ route('page.list') }}" class="rle_btn">View all properties</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Price Histry Wrapper start -->
<div class="rle_pricehistry_wrapper rle_toppadder60 rle_bottompadder60">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
				<div class="rle_pricehistry_text">
					<p>Would you like a free price history graph <span>for your area?</span></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
				<div class="rle_pricehistry_btn">
					<a href="#" class="rle_btn">contact us</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- popular areas Wrapper start -->
<div class="rle_popularareas_wrapper rle_toppadder100 rle_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_center_heading rle_bottompadder60">
					<h1>Explore popular areas near you</h1>
					<p>Crisis investments low yield property is more profitable</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="rle_popularareas_img">
							<img src="{{asset('public/house/img/pa1.jpg')}}" alt="" title="">
							<div class="rle_popularareas_text">
								<h4>Los Angeles</h4>
								<p>121 properties</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="rle_popularareas_img">
							<img src="{{asset('public/house/img/pa2.jpg')}}" alt="" title="">
							<div class="rle_popularareas_text">
								<h4>Colorado Springs</h4>
								<p>121 properties</p>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="rle_popularareas_img">
							<img src="{{asset('public/house/img/pa3.jpg')}}" alt="" title="">
							<div class="rle_popularareas_text">
								<h4>San Antonio</h4>
								<p>121 properties</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="rle_popularareas_img">
							<img src="{{asset('public/house/img/pa4.jpg')}}" alt="" title="">
							<div class="rle_popularareas_text">
								<h4>New Orleans</h4>
								<p>121 properties</p>
							</div>
						</div>
						<div class="rle_popularareas_img">
							<img src="{{asset('public/house/img/pa5.jpg')}}" alt="" title="">
							<div class="rle_popularareas_text">
								<h4>Corpus Christi</h4>
								<p>121 properties</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="rle_popularareas_img">
							<img src="{{asset('public/house/img/pa6.jpg')}}" alt="" title="">
							<div class="rle_popularareas_text">
								<h4>Chula Vista</h4>
								<p>121 properties</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="rle_popularareas_img">
							<img src="{{asset('public/house/img/pa7.jpg')}}" alt="" title="">
							<div class="rle_popularareas_text">
								<h4>Fort Wayne</h4>
								<p>121 properties</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="rle_popularareas_img">
							<img src="{{asset('public/house/img/pa8.jpg')}}" alt="" title="">
							<div class="rle_popularareas_text">
								<h4>Murray Bridge</h4>
								<p>121 properties</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Latest news Wrapper start -->
<div class="rle_latesnews_wrapper rle_toppadder100 rle_bottompadder100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_center_heading rle_bottompadder60">
					<h1>Latest news</h1>
					<p>Real Estate has access to new release properties</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_news_slider">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="rle_news_slider_details">
								<img src="{{asset('public/house/img/nws1.jpg')}}" alt="" title="">
								<div class="rle_news_slider_details_text">
									<p>january 5, 2017</p>
									<h4>Best Property Management Software Buildium vs Appfolio</h4>
									<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="rle_news_slider_details">
								<img src="{{asset('public/house/img/nws1.jpg')}}" alt="" title="">
								<div class="rle_news_slider_details_text">
									<p>january 5, 2017</p>
									<h4>How to Ask For Real Estate Reviews Without Sounding</h4>
									<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="rle_news_slider_details">
								<img src="{{asset('public/house/img/nws1.jpg')}}" alt="" title="">
								<div class="rle_news_slider_details_text">
									<p>january 5, 2017</p>
									<h4>Best Real Estate CRM: Which Tool Is Right for Your Business?</h4>
									<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="rle_news_slider_details">
								<img src="{{asset('public/house/img/nws1.jpg')}}" alt="" title="">
								<div class="rle_news_slider_details_text">
									<p>january 5, 2017</p>
									<h4>Best Property Management Software Buildium vs Appfolio</h4>
									<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="rle_news_slider_details">
								<img src="{{asset('public/house/img/nws1.jpg')}}" alt="" title="">
								<div class="rle_news_slider_details_text">
									<p>january 5, 2017</p>
									<h4>How to Ask For Real Estate Reviews Without Sounding</h4>
									<a href="#">read more <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection