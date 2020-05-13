@extends('house.master')
@section('tieude','Admin')
@section('house_content')
<!-- Slider HTML markup -->
<div class="full_row">
    <div id="slider" class="overflow_hidden" style="width:1200px; height:640px; margin:0 auto;margin-bottom: 0px;">
        
        <!-- Slide 1-->
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
            <img width="1920" height="800" src="{{asset('public/house/img\slider\1.png')}}" class="ls-bg" alt="">
            
            <div style="width:100%; height:100%; background:rgba(11, 15, 41, 0.49); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationout:300; parallaxlevel:0; position:fixed;"></div>
            
            <p style="font-size:18px; font-weight:500; top:280px; left:40px; font-family: 'Montserrat', sans-serif;" class="ls-l text_white" data-ls="offsetyin:100%; offsetyout:-250; delayin:100; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">$1200 / Monthly</p>
            
            <p style="top:300px; left:40px; text-align:initial; font-weight:600; font-style:normal; font-family:Montserrat; text-decoration:none; font-size:30px; line-height:76px; width:600px; white-space:normal;" class="ls-l text_white" data-ls="offsetyin:0; offsetxin:-110w; delayin:300; easingin:easeOutQuint; offsetyout:-250; fadein:false; clipin:0 0 0 100%; durationout:400; parallax:false;">Lovelece Road Greenfield</p>
                
            <p style="font-weight:400; text-align:left; width:500px; font-family:Montserrat; font-size:15px; line-height:30px; top:370px; left:40px; white-space:normal;" class="ls-l text_white" data-ls="offsetyin:0; offsetxin:-110w; delayin:800; easingin:easeOutQuint; offsetyout:-250; fadein:false; clipin:0 0 0 100%; durationout:300; parallax:false;"><i class="fas fa-map-marker-alt"></i> 4213 Duff Avenue South Burlington, VT 05403</p>
            
            <a style="" class="ls-l" href="#" target="_self" data-ls="offsetyin:40; delayin:1200; easingin:easeOutQuint; offsetyout:-300; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallax:false;">
                <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:30px; padding-left:30px; font-size:14px; line-height:30px; top:440px; left:40px; padding-top:10px; padding-bottom:10px; white-space:normal;" class="btn btn_primary">View Details</p>
            </a>
        </div>
        
        
        <!-- Slide 2-->
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.2;">
            <img width="1920" height="800" src="{{asset('public/house/img\slider\2.png')}}" class="ls-bg" alt="">
            
            <div style="width:100%; height:100%; background:rgba(11, 15, 41, 0.49); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationout:300; parallaxlevel:0; position:fixed;"></div>
            
            <p style="font-size:18px; font-weight:500; top:280px; left:40px; font-family: 'Montserrat', sans-serif;" class="ls-l text_white" data-ls="offsetyin:100%; offsetyout:-250; delayin:100; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">$125,000 / Fixed</p>
            
            <p style="top:300px; left:40px; text-align:initial; font-weight:600; font-style:normal; font-family:Montserrat; text-decoration:none; font-size:30px; line-height:76px; width:600px; white-space:normal;" class="ls-l text_white" data-ls="offsetyin:0; offsetxin:-110w; delayin:300; easingin:easeOutQuint; offsetyout:-250; fadein:false; clipin:0 0 0 100%; durationout:400; parallax:false;">Luxury Condos Infront Of River</p>
                
            <p style="font-weight:400; text-align:left; width:500px; font-family:Montserrat; font-size:15px; line-height:30px; top:370px; left:40px; white-space:normal;" class="ls-l text_white" data-ls="offsetyin:0; offsetxin:-110w; delayin:800; easingin:easeOutQuint; offsetyout:-250; fadein:false; clipin:0 0 0 100%; durationout:300; parallax:false;"><i class="fas fa-map-marker-alt"></i> 2305 Tree Frog Lane Overlandpk, MO 66210</p>
            
            <a style="" class="ls-l" href="#" target="_self" data-ls="offsetyin:40; delayin:1200; easingin:easeOutQuint; offsetyout:-300; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallax:false;">
                <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:30px; padding-left:30px; font-size:14px; line-height:30px; top:440px; left:40px; padding-top:10px; padding-bottom:10px; white-space:normal;" class="btn btn_primary">View Details</p>
            </a>
        </div>
        
        
        <!-- Slide 3-->
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.2;">
            <img width="1920" height="800" src="{{asset('public/house/img\slider\3.png')}}" class="ls-bg" alt="">
            
            <div style="width:100%; height:100%; background:rgba(11, 15, 41, 0.49); top:50%; left:50%;" class="ls-l" data-ls="easingin:easeOutQuint; durationout:300; parallaxlevel:0; position:fixed;"></div>
            
            <p style="font-size:18px; font-weight:500; top:280px; left:40px; font-family: 'Montserrat', sans-serif;" class="ls-l text_white" data-ls="offsetyin:100%; offsetyout:-250; delayin:100; clipin:0 0 100% 0; durationout:400; parallaxlevel:0;">$335,000 / Fixed</p>
            
            <p style="top:300px; left:40px; text-align:initial; font-weight:600; font-style:normal; font-family:Montserrat; text-decoration:none; font-size:30px; line-height:76px; width:600px; white-space:normal;" class="ls-l text_white" data-ls="offsetyin:0; offsetxin:-110w; delayin:300; easingin:easeOutQuint; offsetyout:-250; fadein:false; clipin:0 0 0 100%; durationout:400; parallax:false;">Telico Villas House And Condos</p>
                
            <p style="font-weight:400; text-align:left; width:500px; font-family:Montserrat; font-size:15px; line-height:30px; top:370px; left:40px; white-space:normal;" class="ls-l text_white" data-ls="offsetyin:0; offsetxin:-110w; delayin:800; easingin:easeOutQuint; offsetyout:-250; fadein:false; clipin:0 0 0 100%; durationout:300; parallax:false;"><i class="fas fa-map-marker-alt"></i> 1751 Finwood Road Freehold, NJ 07728</p>
            
            <a style="" class="ls-l" href="#" target="_self" data-ls="offsetyin:40; delayin:1200; easingin:easeOutQuint; offsetyout:-300; durationout:400; hover:true; hoverdurationin:300; hoveropacity:1; hoverbgcolor:#ffffff; hovercolor:#444444; parallax:false;">
                <p style="font-weight:500; text-align:center; cursor:pointer; padding-right:30px; padding-left:30px; font-size:14px; line-height:30px; top:440px; left:40px; padding-top:10px; padding-bottom:10px; white-space:normal;" class="btn btn_primary">View Details</p>
            </a>
        </div>
        
    </div>
</div>
<!-- Offer Part Start -->
<section class="full_row py_80 bg_white">
    <div class="container">
        <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="offer_item_2 text-center wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms">
            <div class="icon_large icon mb-2"><i class="flaticon-home-1"></i></div>
            <h5 class="title py-3"><a href="#">Property Booking</a></h5>
            <p>Nunc. Lectus eget. Iaculis dui velit velit turpis lacus nostra a aliquet integer</p>
            <a href="#" class="btn_link">Read More</a> </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="offer_item_2 text-center wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
            <div class="icon_large icon mb-2"><i class="flaticon-pencil-and-paper"></i></div>
            <h5 class="title py-3"><a href="#">Payment Guarantee</a></h5>
            <p>Nunc. Lectus eget. Iaculis dui velit velit turpis lacus nostra a aliquet integer</p>
            <a href="#" class="btn_link">Read More</a> </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="offer_item_2 text-center wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
            <div class="icon_large icon mb-2"><i class="flaticon-home"></i></div>
            <h5 class="title py-3"><a href="#">House Management</a></h5>
            <p>Nunc. Lectus eget. Iaculis dui velit velit turpis lacus nostra a aliquet integer</p>
            <a href="#" class="btn_link">Read More</a> </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="offer_item_2 text-center wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms">
            <div class="icon_large icon mb-2"><i class="flaticon-connections"></i></div>
            <h5 class="title py-3"><a href="#">Property Deal</a></h5>
            <p>Nunc. Lectus eget. Iaculis dui velit velit turpis lacus nostra a aliquet integer</p>
            <a href="#" class="btn_link">Read More</a> </div>
        </div>
        </div>
    </div>
</section>
<!-- Offer Part End --> 

<!-- Recent Property Start -->
<section class="full_row py_80 bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="d-table float-left mb_30">Recent <span class="text_primary">Properties</span></h3>
                <a href="{{ route('page.list') }}" class="property_link float-right">View All Properties</a> </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Rent</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-4.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">2 Hours Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">Lovelece Road Greenfield</a></h5>
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
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Sale</div>
                        <div class="upper_2 bg_primary text-white">Featured</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-5.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">2 Hours Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">Luxury Condos Infront of River</a></h5>
                        <span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 2305 Tree Frog Lane Overlandpk, MO 66210 </span>
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
                    <div class="bed_area d-table w-100">
                        <ul>
                            <li>$1,205,500</li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
                            </li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Rent</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-6.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">2 Hours Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">Park Road Appartment Rent</a></h5>
                        <span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 4133 Arbor Court Worland, WY 82401 </span>
                        <div class="quantity">
                            <ul>
                                <li><span>Area</span>2100 Sqft</li>
                                <li><span>Rooms</span>9</li>
                                <li><span>Beds</span>5</li>
                                <li><span>Baths</span>4</li>
                                <li><span>Garage</span>1</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bed_area d-table w-100">
                        <ul>
                            <li>$1300/mo</li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
                            </li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Rent</div>
                        <div class="upper_2 bg_primary text-white">Featured</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-7.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">10 Hours Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">Lovelece Road Greenfield</a></h5>
                        <span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 4213 Duff Avenue South Burlington, VT 05403 </span>
                        <div class="quantity">
                            <ul>
                                <li><span>Area</span>1600 Sqft</li>
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
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Sale</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-8.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">12 Hours Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">Luxury Condos Infront of River</a></h5>
                        <span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 2305 Tree Frog Lane Overlandpk, MO 66210 </span>
                        <div class="quantity">
                            <ul>
                                <li><span>Area</span>1600 Sqft</li>
                                <li><span>Rooms</span>7</li>
                                <li><span>Beds</span>5</li>
                                <li><span>Baths</span>4</li>
                                <li><span>Garage</span>1</li>
                            </ul>
                        </div>
                    </div>
                    <div class="bed_area d-table w-100">
                        <ul>
                            <li>$1,205,500</li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
                            </li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Sale</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-1.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">15 Hours Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">New Developed Condos</a></h5>
                        <span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 367 Sharon Lane South Bend, IN 4601 </span>
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
                            <li>$152,000</li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
                            </li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Sale</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-8.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">17 Hours Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">Renovate Small Condos</a></h5>
                        <span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 499 Tenmile Road Boston, MA 02110 </span>
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
                            <li>$152,000</li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a>
                            </li>
                            <li class="icon_medium"><a href="#"><i class="flaticon-connections"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Rent</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-2.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">20 Hours Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">Telico Villas House and Condos</a></h5>
                        <span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 1751 Finwood Road Freehold, NJ 07728 </span>
                        <div class="quantity">
                            <ul>
                                <li><span>Area</span>1200 Sqft</li>
                                <li><span>Rooms</span>7</li>
                                <li><span>Beds</span>3</li>
                                <li><span>Baths</span>3</li>
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
            <div class="col-lg-4 col-md-6">
                <div class="property_grid_1 property_item bg-white mb_30">
                    <div class="zoom_effect_1">
                        <div class="upper_1 bg_secondary text-white">Rent</div>
                        <div class="upper_2 bg_primary text-white">Featured</div>
                        <a href="single_property.html"><img src="{{asset('public/house/img\property_grid\property_grid-3.png')}}" alt="Image Not Found!"></a>
                        <div class="upper_3 text_secondary">1 Day Ago</div>
                    </div>
                    <div class="property_text p-3">
                        <h5 class="title"><a href="single_property.html">Telico Villas House and Condos</a></h5>
                        <span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> 1751 Finwood Road Freehold, NJ 07728 </span>
                        <div class="quantity">
                            <ul>
                                <li><span>Area</span>1200 Sqft</li>
                                <li><span>Rooms</span>5</li>
                                <li><span>Beds</span>3</li>
                                <li><span>Baths</span>3</li>
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
</section>
<!-- Recent Property End -->

<!-- Popular Category -->
<section id="popular-category" class="full_row py_80 bg_white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title_row text-center mb-5">
                <h3 class="title mb-4">Popular <span class="text_primary">Locations</span></h3>
                <div class="sub_title text_secondary">
                    <p>Pellentesque porttitor dolor natoque pretium. Scelerisque Quisque, vel curabitur lobortis potenti primis praesent volutpat mi nonummy faucibus tempor consequat vulputate.</p>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="category_grid mb_30 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="category_img ctg_1"><img src="{{asset('public/house/img\category_grid\miami.png')}}" alt=""></div>
                    <div class="upper_4">
                        <div class="vertical_center text-center">
                            <h3 class="title"><a href="#">Appartment</a></h3>
                            <span>34 Properties</span> 
                    </div>
                </div>
            </div>
        </div>
                <div class="col-lg-8 col-md-6">
                    <div class="category_grid mb_30 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="category_img ctg_1"><img src="{{asset('public/house/img\category_grid\newyork.png')}}" alt=""></div>
                        <div class="upper_4">
                            <div class="vertical_center text-center">
                            <h3 class="title"><a href="#">Condos</a></h3>
                            <span>20 Properties</span> 
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="category_grid mb_30 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="category_img ctg_1"><img src="{{asset('public/house/img\category_grid\losangeles.png')}}" alt=""></div>
                    <div class="upper_4">
                        <div class="vertical_center text-center">
                        <h3 class="title"><a href="#">Condos</a></h3>
                        <span>20 Properties</span> </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="category_grid mb_30 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                    <div class="category_img ctg_1"><img src="{{asset('public/house/img\category_grid\chicago.png')}}" alt=""></div>
                    <div class="upper_4">
                        <div class="vertical_center text-center">
                        <h3 class="title"><a href="#">Villa</a></h3>
                        <span>27 Properties</span> </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- Popular Category End -->  



<!--achivement Section Start-->
<div class="full_row py_80 bg_img_1 overlay_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counting_item_1 text-center mb_md_30">
                <div class="h2 text_white downling_center"><span class="numscroller" data-min="1" data-max="1020" data-delay="35" data-increment="10">0</span></div>
                <span class="text_white subject">Project Done</span> </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counting_item_1 text-center mb_md_30">
                <div class="h2 text_white downling_center"><span class="numscroller" data-min="1" data-max="960" data-delay="35" data-increment="10">0</span></div>
                <span class="text_white subject">Satisfied Clients</span> </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counting_item_1 text-center mb_md_30">
                <div class="h2 text_white downling_center"><span class="numscroller" data-min="1" data-max="420" data-delay="35" data-increment="10">0</span></div>
                <span class="text_white subject">Awards Win</span> </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counting_item_1 text-center mb_md_30">
                <div class="h2 text_white downling_center"><span class="numscroller" data-min="1" data-max="860" data-delay="35" data-increment="10">0</span></div>
                <span class="text_white subject">Years Experience</span> </div>
            </div>
        </div>
    </div>
</div>
<!--achivement Section End--> 

<!-- Client Feedback Style2 Section Start -->
<section class="full_row py_80 bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title_row text-center mb-5">
                <h3 class="title mb-4">Clients <span class="text_primary">Feedback</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl_carousel_4">
                    <div class="feedback_item_2">
                        <p>Posuere mus curabitur parturient scelerisque suspendisse elementum facilisis dignissim non purus torquent turpis interdum hendrerit ultrices pretium risus elementum. Magnis sit. Auctor quam. Mollis. Biben fames lacus. Fringilla aliquet mattis lacinia quam a montes maecenas part urn varius. Sollicitudin pede sapien taciti dui senectus sit diam curabitur.</p>
                        <div class="testimonial_avata_1 mt-5"> <img src="{{asset('public/house/img\testimonial\1.png')}}" alt="Image Not Found!">
                        <h5 class="name">Johan Swift</h5>
                        <span>CEO Unicoder</span> </div>
                    </div>
                    <div class="feedback_item_2">
                        <p>Posuere mus curabitur parturient scelerisque suspendisse elementum facilisis dignissim non purus torquent turpis interdum hendrerit ultrices pretium risus elementum. Magnis sit. Auctor quam. Mollis. Biben fames lacus. Fringilla aliquet mattis lacinia quam a montes maecenas part urn varius. Sollicitudin pede sapien taciti dui senectus sit diam curabitur.</p>
                        <div class="testimonial_avata_1 mt-5"> <img src="{{asset('public/house/img\testimonial\2.png')}}" alt="Image Not Found!">
                        <h5 class="name">Johan Swift</h5>
                        <span>CEO Unicoder</span> </div>
                    </div>
                    <div class="feedback_item_2">
                        <p>Posuere mus curabitur parturient scelerisque suspendisse elementum facilisis dignissim non purus torquent turpis interdum hendrerit ultrices pretium risus elementum. Magnis sit. Auctor quam. Mollis. Biben fames lacus. Fringilla aliquet mattis lacinia quam a montes maecenas part urn varius. Sollicitudin pede sapien taciti dui senectus sit diam curabitur.</p>
                        <div class="testimonial_avata_1 mt-5"> <img src="{{asset('public/house/img\testimonial\1.png')}}" alt="Image Not Found!">
                        <h5 class="name">Johan Swift</h5>
                        <span>CEO Unicoder</span> </div>
                    </div>
                    <div class="feedback_item_2">
                        <p>Posuere mus curabitur parturient scelerisque suspendisse elementum facilisis dignissim non purus torquent turpis interdum hendrerit ultrices pretium risus elementum. Magnis sit. Auctor quam. Mollis. Biben fames lacus. Fringilla aliquet mattis lacinia quam a montes maecenas part urn varius. Sollicitudin pede sapien taciti dui senectus sit diam curabitur.</p>
                        <div class="testimonial_avata_1 mt-5"> <img src="{{asset('public/house/img\testimonial\2.png')}}" alt="Image Not Found!">
                        <h5 class="name">Johan Swift</h5>
                        <span>CEO Unicoder</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Feedback Section End --> 

@endsection