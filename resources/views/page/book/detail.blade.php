@extends('page.layout')
@section('title','Chi tiết sản phẩm')
@section('page_content')

	<!-- Breadcumb area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('p.home')}}">Trang chủ</a></li>
                        <li><a href="#">Sách</a></li>
                        <li class="current"><a>{{$book->book_title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb area End -->

    <!-- Main Content Wrapper Start -->
    <div class="main-content-wrapper">
        <div class="single-products-area section-padding section-sm-padding" style="padding-top: 10px;">
            <div class="container">
                <!-- Single Product Start -->
                <section class="single-product bg--white pt--80 pb--80 pt-sm--60 pb-sm--60">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Tab Content Start -->
                            <div class="tab-content product-thumb-large" id="myTabContent-3">

                                <div class="tab-pane fade show active" id="product-large-one">
                                    <div class="single-product__img easyzoom">
                                        <img src="{{asset('public/upload/')}}/{{$book->book_image}}" alt="product">
                                        <a class="popup-btn" href="{{asset('public/upload/')}}/{{$book->book_image}}"><i class="fa fa-search-plus"></i>Large Image</a>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Tab Content End -->
                            
                            <!-- Product Thumbnail Carousel Start -->
                            <div class="product-thumbnail">
                                <div class="thumb-menu product-thumb-menu" id="thumbmenu-horizontal">

                                    <div class="thumb-menu-item">
                                        <a href="#product-large-one" data-toggle="tab" class="nav-link active">
                                            <img src="{{asset('public/page/img/furniture-13-250x278.jpg')}}" alt="product thumb">
                                        </a>
                                    </div>
                                    

                                </div>
                            </div>
                            <!-- Product Thumbnail Carousel End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Single Product Content Start -->
                            <div class="single-product__content"> 
                                <div class="single-product__top">
                                    <h2 class="single-product__name">{{$book->book_title}}</h2>
                                    <div class="ratings-wrap">
                                        <div class="ratings">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span>(Có 2 khách hàng đánh giá)</span>
                                    </div>
									
									@if($book->book_sale == 0)

	                                    <div class="single-product__price">
	                                        <span class="sale-price">{{ number_format($book->book_price,0,',','.') }} đ</span>

	                                    </div>
									
									@else

	                                    <div class="single-product__price">
	                                        <span class="regular-price">{{ number_format($book->book_price,0,',','.') }} đ</span>
	                                        <span class="sale-price">{{ number_format($book->book_sale,0,',','.') }} đ</span>
	                                    </div>

                                    @endif                                        
                                </div>  

                                <div class="single-product__middle">
                                    <p class="single-product__short-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                    <p class="product-availability"><i class="fa fa-check-circle"></i>200 In Stock</p> 

                                    <div class="product-action-wrapper">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="qty1" value="1" min="1">
                                        </div>
                                        <a href="{{Route('addcart',['id' => $book->id])}}" class="btn add-to-cart btn-style-1 color-1">
                                            Giỏ hàng
                                        </a>
                                    </div>  
                                    <div class="single-product__btn">
                                        <a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><i class="fa fa-heart-o"></i> Add to Wishlist</a>
                                        <a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add to Compare"><i class="fa fa-refresh"></i> Add to Compare</a>
                                    </div>
                                </div> 

                                <div class="single-product__meta">
                                    <p>
                                        <strong>Categories:</strong> 
                                        <a href="shop.html">Accessories,</a>
                                        <a href="shop.html">Electronics</a>
                                    </p>
                                    <p>
                                        <strong>Tags:</strong> 
                                        <a href="shop.html">cloths,</a>
                                        <a href="shop.html">Fashion</a>
                                    </p>
                                </div>   
                                <div class="social-buttons">
                                    <a href="facebook.com" class="facebook social-button">
                                        <i class="fa fa-facebook"></i>
                                        <span>Like</span>
                                    </a>
                                    <a href="twitter.com" class="twitter social-button">
                                        <i class="fa fa-twitter"></i>
                                        <span>Tweet</span>
                                    </a>
                                    <a href="plus.google.com" class="gplus social-button">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>        
                                <div class="social-share">
                                    <strong>Share This Product</strong>
                                    <ul class="social">
                                        <li class="social__item"><a href="facebook.com" class="social__link"><i class="fa fa-facebook social__icon"></i></a></li>
                                        <li class="social__item"><a href="twitter.com" class="social__link"><i class="fa fa-twitter social__icon"></i></a></li>
                                        <li class="social__item"><a href="plus.google.com" class="social__link"><i class="fa fa-google-plus social__icon"></i></a></li>
                                        <li class="social__item"><a href="pinterest.com" class="social__link"><i class="fa fa-pinterest social__icon"></i></a></li>
                                        <li class="social__item"><a href="pinterest.com" class="social__link"><i class="fa fa-linkedin social__icon"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single Product Content End -->
                        </div>
                    </div>
                </section>
                <!-- Single Product End -->  

                <!-- Single Product Tab Start -->
                <section class="single-product-tab pt--60 pb--40 pt-sm--40 pb-sm--30">
                    <div class="row">
                        <div class="col-12">
                            <ul class="single-product-tab__head nav nav-tab" id="singleProductTab" role="tablist">
                                <li class="nav-item single-product-tab__item">
                                    <a class="nav-link single-product-tab__link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">Description</a>
                                </li>
                                <li class="nav-item single-product-tab__item">
                                    <a class="nav-link single-product-tab__link" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-details" aria-selected="true">Additional Information</a>
                                </li>

                                <li class="nav-item single-product-tab__item">
                                    <a class="nav-link single-product-tab__link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">review (2)</a>
                                </li>
                            </ul>
                            <div class="single-product-tab__content tab-content bg--white">
                                <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                    <p class="product-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero.</p>
                                    <p class="product-description">
                                        Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi.
                                    </p>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="nav-details" aria-labelledby="nav-details-tab">
                                    <div class="product-additional-info">
                                        <h3>Additional Information</h3>
                                        <div class="table-content table-responsive">
                                            <table class="shop_attributes">
                                                <tr>
                                                    <th>Color: </th>
                                                    <td><p>Black, Blue, Gold</p></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
                                    <div class="product-review-wrap">
                                        <h2 class="mb--20">2 REVIEWS FOR ALIQUAM LOBORTIS</h2>
                                        <div class="review mb--40">
                                            <div class="review__single">
                                                <div class="review__avatar">
                                                    <img src="{{asset('public/page/img/32kSjTmp_normal.jpeg')}}" alt="avatar">
                                                </div>
                                                <div class="review__content">
                                                    <p class="review__meta">
                                                        <span class="review__author">page</span>
                                                        <span class="review__dash">-</span>
                                                        <span class="review__date">October 12, 2014</span>
                                                    </p>
                                                    <p class="review__text">
                                                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                                                    </p>
                                                    <div class="ratings">
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review__single">
                                                <div class="review__avatar">
                                                    <img src="{{asset('public/page/img/32kSjTmp_normal.jpeg')}}" alt="avatar">
                                                </div>
                                                <div class="review__content">
                                                    <p class="review__meta">
                                                        <span class="review__author">page</span>
                                                        <span class="review__dash">-</span>
                                                        <span class="review__date">October 12, 2014</span>
                                                    </p>
                                                    <p class="review__text">
                                                        Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit
                                                    </p>
                                                    <div class="ratings">
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                        <i class="fa fa-star rated"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="mb--20">Add a Review</h2>
                                        <form class="form form--review">
                                            <div class="form__group clearfix mb--20">
                                                <label class="form__label d-block">Your Ratings</label>
                                                <div class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5"><label class="full" for="star5" title="Awesome - 5 stars"></label>
                                                    <input type="radio" id="star4half" name="rating" value="4 and a half"><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                                    <input type="radio" id="star4" name="rating" value="4"><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                                                    <input type="radio" id="star3half" name="rating" value="3 and a half"><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                                    <input type="radio" id="star3" name="rating" value="3"><label class="full" for="star3" title="Meh - 3 stars"></label>
                                                    <input type="radio" id="star2half" name="rating" value="2 and a half"><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                                    <input type="radio" id="star2" name="rating" value="2"><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                                                    <input type="radio" id="star1half" name="rating" value="1 and a half"><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                                    <input type="radio" id="star1" name="rating" value="1"><label class="full" for="star1" title="Sucks big time - 1 star"></label>
                                                    <input type="radio" id="starhalf" name="rating" value="half"><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                                                </div>
                                            </div>
                                            <div class="form__group clearfix mb--20">
                                                <label class="form__label d-block" for="review">Your Review</label>
                                                <textarea id="review" name="review" class="form__input form__input--textarea form__input--2"></textarea>
                                            </div>
                                            <div class="form__group clearfix mb--20">
                                                <label class="form__label d-block" for="review_name">Name *</label>
                                                <input id="review_name" name="review_name" class="form__input form__input--w285">
                                            </div>
                                            <div class="form__group clearfix mb--20">
                                                <label class="form__label d-block" for="review_email">Email *</label>
                                                <input id="review_email" name="review_email" class="form__input form__input--w285">
                                            </div>
                                            <div class="form__group clearfix">
                                                <button type="submit" class="form__submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single Product Tab End -->

                <!-- You may also like Product Start -->
                <section class="related-products-area section-padding section-sm-padding">
                    <div class="row">
                        <div class="col-12 mb--20">
                            <div class="section-title title-1">
                                <h2>You may also like…</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="related-product-carousel owl-carousel product-carousel-hover">
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/electronics-7-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/electronics-8-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/electronics-10-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/electronics-11-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/electronics-12-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/electronics-13-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/electronics-14-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/electronics-15-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/electronics-16-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/electronics-17-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/electronics-4-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/electronics-5-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- You may also like Product End -->

                <!-- Related Product Start -->
                <section class="related-products-area section-padding section-sm-padding">
                    <div class="row">
                        <div class="col-12 mb--20">
                            <div class="section-title title-1">
                                <h2>Related Products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="related-product-carousel owl-carousel product-carousel-hover">
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/furniture-7-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/furniture-8-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/furniture-9-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/furniture-10-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/furniture-11-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/electronics-12-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/furniture-13-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/furniture-14-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/furniture-4-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/furniture-5-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-product">
                                    <div class="product-box product-box-hover-down bg--white color-1">
                                        <div class="product-box__img">
                                            <img src="{{asset('public/page/img/furniture-6-250x278.jpg')}}" alt="product" class="primary-image">
                                            <img src="{{asset('public/page/img/furniture-20-250x278.jpg')}}" alt="product" class="secondary-image">
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
                                                <span class="regular-price">$100.00</span>
                                                <span class="sale-price">$80.00</span>
                                            </div>
                                        </div>
                                        <div class="product-box__action action-2">
                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> add to cart</a>
                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Related Product End -->
            </div>
        </div>
    </div>
    <!-- Main Content Wrapper End -->

   <script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
           
   {!! Toastr::message() !!}

@endsection