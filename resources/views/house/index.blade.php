@extends('house.master')
@section('tieude','Trang chủ')
@section('house_content')
<!-- Slider HTML markup -->
<div class="full_row">
    <div  class="overflow_hidden" >
        <style>
            #map
            {
                width: 1600px;
                height: 510px;
            }
        </style>

        <div class="homepage-map">
            <div id="map"></div>
        </div>
        <!-- Search Form On Map -->
        <div id="find-location" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="map-search">
                        <div class="form-up-btn bg_secondary d-table" style="background-color: #90c923">Tìm kiếm <span><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                        </div>
                        <div class="property_search_form bg_white p-4">
                            <form action="{{ route('timkiem') }}" method="post" class="property_filter_input"> {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-2 col-sm-6">
                                        <select class=" form-control" name="city">
                                            @foreach($city as $cities)
                                                <option value="{{ $cities->id  }}">{{ $cities->province_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-6">
                                        <select class="selectpicker form-control" name="loainha">
                                            <option>Loại nhà</option>

                                            @foreach($type as $typies)
                                                <option value="{{ $typies->id }}">{{ $typies->ten_loai }}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                    <div class="col-lg-5 col-sm-8">
                                        <input class="form-control" name="tukhoa" type="text" placeholder="Nhập mã nhà, mã bảng tin, tên nhà, tên bảng tin, tỉnh thành,....">
                                    </div>
                                    <div class="col-lg-3 col-sm-4">
                                        <input type="submit" name="search" value="Tìm kiếm" class="btn btn_primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
<!-- Offer Part Start -->
<section class="full_row py_80 bg_white" style="padding-top: 20px !important;">
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
                <h3 class="d-table float-left mb_30">Bảng Tin <span class="text_primary">Nhiều lượt xem</span></h3>
                <a href="{{ route('page.list') }}" class="property_link float-right">Xem hết bảng tin</a> </div>
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
       
            <div class="row" id="img" data="{{  asset('public/upload/') }}/"  > 
            <div class="col-md-12">
                <div class="title_row text-center mb-5">
                <h3 class="title mb-4">Vị trí <span class="text_primary">phổ biến</span></h3>
                <div class="sub_title text_secondary">
                    <p>Vị trí phổ biên được mọi người quan tâm và được thuê nhiều nhất.</p>
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
                            <h3 class="title"><a href="#">Hồ chí minh</a></h3>
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
            <div class="col-lg-6 col-md-6" >
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
                <span class="text_white subject">Ngôi nhà</span> </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counting_item_1 text-center mb_md_30">
                <div class="h2 text_white downling_center"><span class="numscroller" data-min="1" data-max="960" data-delay="35" data-increment="10">0</span></div>
                <span class="text_white subject">Người dùng</span> </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counting_item_1 text-center mb_md_30">
                <div class="h2 text_white downling_center"><span class="numscroller" data-min="1" data-max="420" data-delay="35" data-increment="10">0</span></div>
                <span class="text_white subject">Yêu thích</span> </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counting_item_1 text-center mb_md_30">
                <div class="h2 text_white downling_center"><span class="numscroller" data-min="1" data-max="860" data-delay="35" data-increment="10">0</span></div>
                <span class="text_white subject">Bình luận</span> </div>
            </div>
        </div>
    </div>
</div>
<!--achivement Section End--> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script async defer 
    src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize">
    </script>

    
    <script defer>
        function initialize() {
            var mapOptions = {
                zoom: 8.5,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                      style:google.maps.ZoomControlStyle.DEFAULT
                },
                center: new google.maps.LatLng(10.0299337, 105.7706153),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false
              }

            var map = new google.maps.Map(document.getElementById('map'), mapOptions);

            //addMarker({banhbao: {lat: 10.0266048,lng: 105.7767294}});
            //addMarker({banhbao: {lat: 10.0453833,lng: 105.7796137}});
            var y = $('#img').attr('data');
           
            @php 
            foreach($bangtin as $nha)
            {
                $nha2 = $nha->house;
                $user = $nha->user->member->kh_ten;
                $link = route('deatil.bangtin',['id' => $nha->id]);
                $giathue = number_format($nha->gia_thue,0,',','.');
               echo'addMarker({banhbao: {lat: '.$nha2->lat.',lng: '.$nha2->lng.'},';
               echo "content: ' <div style=width:233px><div><img style=width:233px;height:151px; src=./public/upload/$nha2->hinh_anh ></div> <div style=margin-top:5px;margin-bottom:5px;>Tiêu đề: <a href=$link style=color:blue> $nha->ten_bangtin </a> - Người bán: <a href=# style=color:#90c923>$user</a></div><div style=margin-top:5px;margin-bottom:5px;>Giá: <span style=color:red>$giathue</span> đ/tháng</div><div>Địa chỉ: $nha2->dia_chi</div> </div> '});";
               //muốn viêt dc model trong day phải khai bảng ở ngoài trước không nó sẽ lỗi
               // style phải viet xác nhau mới nhận được
                // viet lòng php không cần mở dây nhây kep nó tự hiệu
                // muốn nhận đươc dấu nhây đơn '' tài phải echo dấu nhây kép ""
            }
         
            
            @endphp
            function addMarker(props)
            {
                var marker = new google.maps.Marker({
                    position: props.banhbao,
                    map:map,
                    icon: '{{ asset('public/map.png') }}'
                });
                if(props.content){
                    var infoWindow = new google.maps.InfoWindow({
                        content:props.content
                    });
                    marker.addListener('click',function(){
                        infoWindow.open(map, marker);
                    });
                }
            }
            
                
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        
    </script>

@endsection