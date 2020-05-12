@extends('house.master')
@section('tieude','Admin')
@section('content')
<!-- Breadcrumb Wrapper start -->
@section('hiden2')
<div class="rle_banner_wrapper style_4">
	<div class="rle_header_wrapper style_4">
@endsection

<!-- Property Single Wrapper start -->
<div class="swiper-container slider_v2">
	<div class="swiper-wrapper">
		<div class="swiper-slide"><img src="{{asset('public/house/img/h2_slide1.jpg')}}"  alt="" /></div>
		<div class="swiper-slide"><img src="{{asset('public/house/img/h2_slide2.jpg')}}"  alt="" /></div>
		<div class="swiper-slide"><img src="{{asset('public/house/img/h2_slide3.jpg')}}"  alt="" /></div>
	</div>
	<div class="swiper-button-next swiper-button-white"></div>
	<div class="swiper-button-prev swiper-button-white"></div>
</div>
<div class="rle_property_single_wrapper rle_toppadder100 rle_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="rle_property_single_heading">
					<h2>Westbourne Terrace <sup>For sale</sup></h2>
					<p>KT89B Hampton Court, England, United Kingdom</p>
				</div>
				<div class="rle_property_details_box">
					<h3>Property description</h3>
					<p>The home has 2 living zones, a spacious central kitchen complete with dishwasher and ample cupboard and bench space, huge outdoor entertaining area and rear access through the double garage with remote roller door. Other great features include Roller shutters, alarm system complete with camera’s, 2 x water tanks, both ducted heating and split system cooling and of course the huge backyard making room for a pool.</p>
					<p>From its (pluperfect) construction to its world-class features, this magnificent residential tower is surely a new address of good life. Well-equipped with all amenities, this superstructure epitomizes a life adorned with luxury without compromising in comfort, peace and happiness.</p>
				</div>
				<div class="rle_property_details_box">
					<h3>Features property</h3>
					<ul class="feature_prop">
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="1" checked />
								<label for="1">Swimming Pool</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="2" checked />
								<label for="2">Air Conditioning</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="3" checked />
								<label for="3">Fireplace</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="4" checked />
								<label for="4">Balcony</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="5" checked />
								<label for="5">Garage</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="6" checked />
								<label for="6">Electric Range</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="7" checked />
								<label for="7">Washer</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="8" checked />
								<label for="8">Sauna</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="9" checked />
								<label for="9">Dual Sinks</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="10" checked />
								<label for="10">Microwave</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="11" checked />
								<label for="11">Bedding</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="12" checked />
								<label for="12">Laundry</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="13" checked />
								<label for="13">Tv cable</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="14" checked />
								<label for="14">Refrigerator</label>
							</div>
						</li>
						<li>
							<div class="rle_checkbox">
								<input type="checkbox" id="15" checked />
								<label for="15">Wifi</label>
							</div>
						</li>
					</ul>
				</div>
				<div class="rle_property_details_box">
					<h3>Floor plan</h3>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#groud" aria-controls="groud" role="tab" data-toggle="tab">groud floor</a></li>
						<li role="presentation"><a href="#first" aria-controls="first" role="tab" data-toggle="tab">first floor</a></li>
						<li role="presentation"><a href="#second" aria-controls="second" role="tab" data-toggle="tab">second floor</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="groud">
							<p>Fusce eu scelerisque eros. Duis scelerisque, ante sed lacinia ullamcorper, erat lectus imperdiet ante, quis pharetra lectus dui in nisl.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget lorem quis ex faucibus tempor. Nullam eget interdum neque, sed sodales nulla. Mauris pharetra vestibulum velit at finibus</p>
							<ul>
								<li><span>1458</span> sqft</li>
								<li><span>02</span> bedrooms</li>
								<li><span>02</span> bathroom</li>
								<li><span>$2800</span> per month</li>
							</ul>
							<div class="floor_img">
								<img src="{{asset('public/house/img/prop_sin_floor.jpg')}}"  class="img-responsive">
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="first">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu scelerisque eros. Duis scelerisque, ante sed lacinia ullamcorper, erat lectus imperdiet ante, quis pharetra lectus dui in nisl. Quisque eget lorem quis ex faucibus tempor. Nullam eget interdum neque, sed sodales nulla. Mauris pharetra vestibulum velit at finibus</p>
							<ul>
								<li><span>1368</span> sqft</li>
								<li><span>02</span> bedrooms</li>
								<li><span>01</span> bathroom</li>
								<li><span>$2300</span> per month</li>
							</ul>
							<div class="floor_img">
								<img src="{{asset('public/house/img/prop_sin_floor.jpg')}}"  class="img-responsive">
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="second">
							<p>Nullam eget interdum neque, sed sodales nulla. Mauris pharetra vestibulum velit at finibus Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eu scelerisque eros. Duis scelerisque, ante sed lacinia ullamcorper, erat lectus imperdiet ante, quis pharetra lectus dui in nisl. Quisque eget lorem quis ex faucibus tempor. </p>
							<ul>
								<li><span>2510</span> sqft</li>
								<li><span>03</span> bedrooms</li>
								<li><span>03</span> bathroom</li>
								<li><span>$3000</span> per month</li>
							</ul>
							<div class="floor_img">
								<img src="{{asset('public/house/img/prop_sin_floor.jpg')}}" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
				<div class="rle_property_details_box">
					<h3>Point of interest</h3>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-building" aria-hidden="true"></i> School</a>
								</h4>
							</div>
							<div id="collapse1" class="panel-collapse collapse in">
								<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><i class="fa fa-coffee" aria-hidden="true"></i> Restaurant</a>
								</h4>
							</div>
							<div id="collapse2" class="panel-collapse collapse">
								<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><i class="fa fa-university" aria-hidden="true"></i> Bank</a>
								</h4>
							</div>
							<div id="collapse3" class="panel-collapse collapse">
								<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><i class="fa fa-train" aria-hidden="true"></i> Public Transportation</a>
								</h4>
							</div>
							<div id="collapse4" class="panel-collapse collapse">
								<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="rle_property_details_box">
					<h3>Page view</h3>
					<canvas id="canvas"></canvas>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="rle_property_details_box_2">
					<div class="share_props">
						<span>Share property</span>
						<ul>
							<li><a href="#" class="clr_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="clr_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="clr_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="clr_linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="rle_property_details_box">
					<div class="user_info">
						<img src="client1.png">
						<h4>Nicholas Jacobs</h4>
						<p>Expert agent</p>
						<ul>
							<li><a href="#" class="clr_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="clr_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="clr_linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="user_info_share style_2">
						<ul>
							<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> (+012) 568 2367  |  (+011) 245 7863</a></li>
							<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Jacobs@alphahousing.com</a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i> NicholasJacobos.Agent</a></li>
						</ul>
					</div>
					<div class="user_info_form">
						<form>
							<input type="text" placeholder="Name">
							<input type="email" placeholder="Email">
							<input type="text" placeholder="Mobile">
							<textarea rows="6" placeholder="Message"></textarea>
							<a href="#" class="rle_btn">get contact detail</a>
						</form>
					</div>
				</div>
				<div class="rle_property_details_box">
					<iframe src="fi000002.1!3m3!1m2!1s0x87f4398360b0ffe3-0xc8e0f38bc3920a41!2sminnesota+state+university,+mankato!5e0!3m2!1sen!2sin!4v1490446318407"  width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Property Wrapper start -->
<div class="rle_property_wrapper rle_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_center_heading rle_bottompadder60">
					<h1>Similar property</h1>
					<p>Real Estate In Australia has access to new release properties</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="rle_property_slider">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div class="rle_property_infobox">
								<div class="rle_property_infobox_img">
									<img src="{{asset('public/house/img/pro1.jpg')}}"  alt="" title="">
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
						<div class="item">
							<div class="rle_property_infobox">
								<div class="rle_property_infobox_img">
									<img src="{{asset('public/house/img/pro2.jpg')}}"  alt="" title="">
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
						<div class="item">
							<div class="rle_property_infobox">
								<div class="rle_property_infobox_img">
									<img src="{{asset('public/house/img/pro3.jpg')}}"  alt="" title="">
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
						<div class="item">
							<div class="rle_property_infobox">
								<div class="rle_property_infobox_img">
									<img src="{{asset('public/house/img/pro4.jpg')}}"  alt="" title="">
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
						<div class="item">
							<div class="rle_property_infobox">
								<div class="rle_property_infobox_img">
									<img src="{{asset('public/house/img/pro5.jpg')}}"  alt="" title="">
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
						<div class="item">
							<div class="rle_property_infobox">
								<div class="rle_property_infobox_img">
									<img src="{{asset('public/house/img/pro6.jpg')}}"  alt="" title="">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection