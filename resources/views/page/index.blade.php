@extends('page.layout')
@section('title','Trang chủ')
@section('page_content')

@section('hide')
    <ul class="category-nav__menu " id="js-cat-nav">

        @foreach($category2 as $ctg2)
        
        <li class="category-nav__menu__item has-children">
            <a href="#" ><i class="fa fa-coffee"></i> {{$ctg2->category_name}}</a>
            <div class="category-nav__submenu">
                <div class="category-nav__submenu--inner">
                    {{-- danh muc con --}}
                    @foreach($ctg2->subcategory as $ctg3)

                    <ul>
                        <li>
                            <a href="{{Route('p.subcategory',['id' => $ctg3->id])}}" >{{$ctg3->subcategory_name}}</a>
                        </li>

                    </ul>

                    @endforeach

                </div>
            </div>
        </li>

        @endforeach


        
        
    </ul>
@endsection

        <!-- Main Wrapper Start -->
        <main id="content" class="main-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Hero Area Start -->
                        <div class="row custom-row pb--40 pb-sm--30">
                            <div class="col-lg-9 offset-lg-3">
                                <div class="slider-wrapper owl-carousel right-side-dot" id="homepage-slider-2">

                                    <div class="single-slider single-slider--3 content-v-center" style="background-image: url({{asset('public/page/img/home8-slider1.jpg')}});">
                                        <div class="slider-content">
                                            <h2 class="color--white" data-animation="fadeInLeft" data-duration=".3s" data-delay=".2s">Spring Super </h2>
                                            <h2 class="color--white" data-animation="fadeInLeft" data-duration=".3s" data-delay=".2s">Book Sale </h2>
                                            <p class="color--white mb--20" data-animation="fadeInLeft" data-duration=".3s" data-delay=".4s">Save on natural <br> Cooking & Welnes  </p>
                                            <div class="product-price mb-mdlg--20 mb-sm--10">
                                                <p class="regular-price" data-animation="fadeInLeft" data-duration=".3s" data-delay=".8s">$725.29</p>
                                                <p class="sale-price" data-animation="fadeInRight" data-duration=".3s" data-delay=".8s">$500.59</p>
                                            </div>
                                            <div class="slider-btn-group" data-animation="fadeInBottom" data-duration=".3s" data-delay=".6s">
                                                <a href="shop.html" class="btn btn-style-2 btn-slider btn-slider-3 color--white color-3">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-slider single-slider--3 content-v-center" style="background-image: url({{asset('public/page/img/home7-slider1.jpg')}});">
                                        <div class="slider-content">
                                            <h1 class="color--white" data-animation="fadeInLeft" data-duration=".3s" data-delay=".3s">FLAT 40% OFF </h1>
                                            <p class="color--white mb--20" data-animation="fadeInLeft" data-duration=".3s" data-delay=".4s">On All Business, Investment <br> &amp; MANAGEMENT BOOKS </p>
                                            <div class="slider-btn-group" data-animation="fadeInBottom" data-duration=".3s" data-delay=".6s">
                                                <a href="shop.html" class="btn btn-style-2 btn-slider btn-slider-3 color--white color-3">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Hero Area End -->

                        <!-- Promo area Start -->
                        <div class="row section-padding section-sm-padding">
                            <div class="col-md-6">
                                <div class="promo-box mb-sm--20">
                                    <a href="#"><img src="{{asset('public/page/img/home8-banner1-1.jpg')}}" alt="promo"></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="promo-box">
                                    <a href=""><img src="{{asset('public/page/img/home8-banner1-2.jpg')}}" alt="promo"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Promo area End -->

                        <div class="row section-padding section-sm-padding">
                            <div class="col-lg-4 col-xl-3">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Corporate area start -->
                                        <div class="corporate corporate-vertical bg--white mb--40">
                                            <div class="corporate__single">
                                                <div class="corporate__icon">
                                                    <i class="fa fa-refresh"></i>
                                                </div>
                                                <div class="corporate__content">
                                                    <h3 class="corporate__title">Free Return</h3>
                                                    <p class="corporate__text">30 days money back!</p>
                                                </div>
                                            </div>
                                            <div class="corporate__single">
                                                <div class="corporate__icon">
                                                    <i class="fa fa-paper-plane-o"></i>
                                                </div>
                                                <div class="corporate__content">
                                                    <h3 class="corporate__title">FREE SHIPPING</h3>
                                                    <p class="corporate__text">Free shipping on all order</p>
                                                </div>
                                            </div>
                                            <div class="corporate__single">
                                                <div class="corporate__icon">
                                                    <i class="fa fa-credit-card-alt"></i>
                                                </div>
                                                <div class="corporate__content">
                                                    <h3 class="corporate__title">Secure Payment</h3>
                                                    <p class="corporate__text">100% secure payment</p>
                                                </div>
                                            </div>
                                            <div class="corporate__single">
                                                <div class="corporate__icon">
                                                    <i class="fa fa-support"></i>
                                                </div>
                                                <div class="corporate__content">
                                                    <h3 class="corporate__title">SUPPORT 24/7</h3>
                                                    <p class="corporate__text">We support online 24hrs</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Corporate area end -->                                        
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <!-- Best Seller Product Carousel Start-->
                                        <div class="best-products-area mb-smlg--40">
                                            <div class="section-title title-1 brand-color mb--20">
                                                <h2>Best Seller</h2>
                                            </div>
                                            <div class="best-products-carousel owl-carousel js-best-product-carousel">
                                                <div class="best-products-group">
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-2-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-3-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Integer eget augue</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$100.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-4-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-5-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-6-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-7-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-8-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-7-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-10-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-11-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="best-products-group">
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-13-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-14-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Integer eget augue</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$100.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-15-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-16-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-17-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-18-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/furniture-6-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/furniture-7-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/furniture-13-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/furniture-14-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="best-products-group">
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/furniture-17-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/furniture-16-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-16-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-19-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-5-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-6-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-1-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-2-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box horizontal horizontal--small bg--white color-2">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/electronics-3-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/electronics-4-250x278.jpg')}}" alt="product" class="secondary-image">
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$50.00</span>
                                                                <span class="sale-price">$40.00</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Best Seller Product Carousel End-->                                 
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <!-- Promo area Start -->
                                        <div class="promo-box full-width mt-md--40 mb-md--40">
                                            <a href="#">
                                                <img src="{{asset('public/page/img/home3-sidebar.jpg')}}" alt="promo">
                                            </a>
                                        </div>
                                        <!-- Promo area End -->  
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-xl-9">
                                <!-- New Products area Start -->
                                <div class="new-products-area pb--40 pb-sm--340">
                                    <div class="row mb--20">
                                        <div class="col-12">
                                            <div class="section-title title-1 brand-color">
                                                <h2>New Prouducts</h2>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="new-products-carousel bg--white owl-carousel js-new-products-carousel-2">
                                                <div class="new-products-group">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-2-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-3-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Integer eget augue</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="sale-price">$100.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-4-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-5-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="regular-price">$50.00</span>
                                                                    <span class="sale-price">$40.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-products-group">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-6-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-7-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Viverra sollicitudin</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="sale-price">$90.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-9-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-10-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Egestas dapibus</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="sale-price">$80.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-products-group">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-10-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-11-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Odio tortor consequat</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="sale-price">$70.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-12-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-13-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Neque porttitor</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="sale-price">$70.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-products-group">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-15-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-14-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Volutpat ut</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="regular-price">$70.00</span>
                                                                    <span class="sale-price">$50.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-16-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-17-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Neque porttitor</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="sale-price">$70.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="new-products-group">
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-18-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-16-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Volutpat ut</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="regular-price">$80.00</span>
                                                                    <span class="sale-price">$55.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-box-wrapper">
                                                        <div class="product-box horizontal horizontal--3 bg--white color-3">
                                                            <div class="product-box__img">
                                                                <img src="{{asset('public/page/img/book-15-250x278.jpg')}}" alt="product" class="primary-image">
                                                                <img src="{{asset('public/page/img/book-16-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            </div>
                                                            <div class="product-box__content">
                                                                <h3 class="product-box__title"><a href="single-product.html">Neque porttitor</a></h3>
                                                                <div class="ratings">
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star rated"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product-box__price">
                                                                    <span class="sale-price">$70.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="product-box__action action-1">
                                                                <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- New Products area End -->

                                <!-- Promo area Start -->
                                <div class="promo-area section-padding section-sm-padding">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="promo-box">
                                                <a href="#"><img src="{{asset('public/page/img/home8-banner2.jpg')}}" alt="promo"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Promo area End -->

                                <!-- Category products area Start -->
                                <div class="category-porducts-area section-padding section-sm-padding">
                                    <div class="row align-items-center mb--20">
                                        <div class="col-xl-3 col-md-4">
                                            <div class="section-title title-1 brand-color text-md-left text-center mb-sm--20">
                                                <h2>Video Games</h2>
                                            </div>
                                        </div>
                                        <div class="col-xl-9 col-md-8 text-md-right text-center">
                                            <ul class="category-list list-1 color-3">
                                                <li><a href="shop.html">Playstation</a></li>
                                                <li><a href="shop.html">Xbox</a></li>
                                                <li><a href="shop.html">Sony Psp</a></li>
                                                <li><a href="shop.html">WII u</a></li>
                                                <li><a href="shop.html">See More</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="category-porducts-wrapper bg--white">
                                                <div class="category-product-carousel owl-carousel js-category-product-carousel-2">
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-13-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-14-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$80.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-16-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-17-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$90.00</span>
                                                                <span class="sale-price">$80.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-3-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-4-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$70.00</span>
                                                                <span class="sale-price">$50.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-5-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-6-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$50.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-20-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-9-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$60.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-10-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-11-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$90.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-12-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-13-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regualr-price">$100.00</span>
                                                                <span class="sale-price">$70.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="promo-box">
                                                    <a href="#"><img src="{{asset('public/page/img/home8-banner3.jpg')}}" alt="promo"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Category products area End -->

                                <!-- Category products area Start -->
                                <div class="category-porducts-area section-padding section-sm-padding">
                                    <div class="row align-items-center mb--20">
                                        <div class="col-lg-3 col-md-4">
                                            <div class="section-title title-1 brand-color text-md-left text-center mb-sm--20">
                                                <h2>Headphones</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-8 text-md-right text-center">
                                            <ul class="category-list list-1 color-3">
                                                <li><a href="shop.html">In-Ear &amp; Earbud</a></li>
                                                <li><a href="shop.html">On-Ear</a></li>
                                                <li><a href="shop.html">Over-Ear</a></li>
                                                <li><a href="shop.html">Sports</a></li>
                                                <li><a href="shop.html">See More</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="category-porducts-wrapper bg--white">
                                                <div class="category-product-carousel owl-carousel js-category-product-carousel-2">
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-14-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-13-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$80.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-17-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-16-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$90.00</span>
                                                                <span class="sale-price">$80.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-6-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-7-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regular-price">$70.00</span>
                                                                <span class="sale-price">$50.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-17-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-9-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$50.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-10-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-11-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$60.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-1-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-2-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="sale-price">$90.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-box product-box-hover-up hover-up-2 color-3">
                                                        <div class="product-box__img">
                                                            <img src="{{asset('public/page/img/book-3-250x278.jpg')}}" alt="product" class="primary-image">
                                                            <img src="{{asset('public/page/img/book-4-250x278.jpg')}}" alt="product" class="secondary-image">
                                                            <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                        </div>
                                                        <div class="product-box__content">
                                                            <h3 class="product-box__title"><a href="single-product.html">Pellentesque position</a></h3>
                                                            <div class="ratings">
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star rated"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product-box__price">
                                                                <span class="regualr-price">$100.00</span>
                                                                <span class="sale-price">$70.00</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-box__action action-3">
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="promo-box">
                                                    <a href="#"><img src="{{asset('public/page/img/home8-banner4.jpg')}}" alt="promo"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Category products area End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Wrapper End -->

        
@endsection