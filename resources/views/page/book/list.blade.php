@extends('page.layout')
@section('title','Sản phẩm')
@section('page_content')

	<div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li><a href="{{route('p.home')}}">Trang chủ 2</a></li>
                        <li class="current">
                            <a>`12312</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Wrapper Start -->
    <main id="content" class="main-content-wrapper">
        <div class="shop-area pt--10 pb--80 pt-sm--30 pb-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-2 mb-md--40">
                        <!-- Shop Toolbar Start -->
                        <div class="shop-toolbar">
                            <div class="shop-toolbar__grid-list">
                                <ul class="nav">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#list"><i class="fa fa-list"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-toolbar__shorter">
                                <label>Short By:</label>
                                <select class="short-select nice-select">
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3">Name, Z to A</option>
                                    <option value="4">Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </div>
                            <span class="shop-toolbar__product-count">Có <span style="color:blue">{{$book2}}</span> sản phẩm</span>
                        </div>
                        <!-- Shop Toolbar End -->

                        <!-- Shop Layout Start -->
                        <div class="main-shop-wrapper">
                            <div class="tab-content" id="myTabContent-2">
                                <div class="tab-pane show active" id="grid">
                                    <div class="product-grid-view three-column">
                                        <div class="row no-gutters">
                                            
                                            @foreach($book as $books)

                                            <div class="col-md-4 col-sm-6">
                                                <div class="product-box product-box-hover-down bg--white color-1">
                                                    <div class="product-box__img">
                                                        <img src="{{asset('public/upload/')}}/{{$books->book_image}}" alt="product" style="height: 250px; width: 278px; margin-top: 20px;">
                                                        
                                                        <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                    </div>


                                                    <div class="product-box__content">
                                                        <h3 class="product-box__title"><a href="{{route('b.detail',['id'=> $books->id])}}">{{$books->book_title}}</a></h3>

                                                        <div class="ratings">
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>

                                                        @if($books->book_sale == 0)
                                                            <div class="product-box__price">
                                                                <span class="sale-price">{{ number_format($books->book_price,0,',','.') }} đ</span>
                                                            </div>
                                                        @else
                                                            <div class="product-box__price">
                                                                <span class="regular-price">{{ number_format($books->book_sale,0,',','.') }}  đ</span>
                                                                <span class="sale-price">{{ number_format($books->book_price,0,',','.') }} đ</span>
                                                            </div>
                                                        @endif


                                                    </div>
                                                    <div class="product-box__action action-2">
                                                        
                                                        <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>

                                                        <a  href="{{Route('addcart',['id' => $books->id])}}" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Giỏ hàng"><i class="fa fa-shopping-bag"></i> Giỏ hàng</a>

                                                        <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach


                                            

                                        </div>

                                          </br>
                                        
                                                <nav> 

                                                   {!! $book->links() !!}

                                                </nav>
                                    </div>
                                </div>
                                <div class="tab-pane" id="list">
                                    <div class="product-list-view">

                                        
                                        {{-- show sản phẩm 2 --}}
                                        @foreach($book as $books)

                                        <div class="product-box product-box--list bg--white">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="product-box__img">
                                                        <img src="{{asset('public//upload/')}}/{{$books->book_image}}" alt="product" >
                                                        
                                                        <a href="" data-toggle="modal" data-target="#productModal" class="product-box__quick-view"><i class="fa fa-search"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="product-box__content">
                                                        <h3 class="product-box__title"><a href="single-product.html">{{$books->book_title}}</a></h3>


                                                        <div class="ratings">
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star rated"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        

                                                        @if($books->book_sale == 0)
                                                            <div class="product-box__price">
                                                                <span class="sale-price">{{ number_format($books->book_price,0,',','.') }} đ</span>
                                                            </div>
                                                        @else
                                                            <div class="product-box__price">
                                                                <span class="regular-price">{{ number_format($books->book_sale,0,',','.') }}  đ</span>
                                                                <span class="sale-price">{{ number_format($books->book_price,0,',','.') }} đ</span>
                                                            </div>
                                                        @endif

                                                        
                                                        <p class="product-box__desc">
                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus.
                                                        </p>
                                                        <div class="product-box__action action-4">
                                                            <a href="cart.html" class="add-to-cart" data-toggle="tooltip" data-placement="top" title="Add to cart"><i class="fa fa-shopping-bag"></i> Add to cart</a>
                                                            <a href="wishlist.html" class="add-to-wishlist" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><i class="fa fa-heart-o"></i></a>
                                                            <a href="compare.html" class="add-to-compare" data-toggle="tooltip" data-placement="top" title="Add to compare"><i class="fa fa-refresh"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach

                                            <nav> 
                                               {!! $book->links() !!}
                                            </nav>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Layout End -->
                    </div>
                    <div class="col-lg-3 order-lg-1">
                        <aside class="sidebar">
                            <!-- Product Categories Widget Start -->
                            <div class="sidebar-widget product-widget product-cat-widget">
                                <h3 class="widget-title">Product Categories</h3>
                                <div class="widget_conent">
                                    <ul class="product-categories">
                                        <li class="cat-item cat-parent">
                                            <a href="shop.html">Books</a>
                                            <span class="count">(10)</span>
                                            <ul class="children">
                                                <li class="cat-item">
                                                    <a href="shop.html">Bedroom</a>
                                                    <span class="count">(6)</span>
                                                </li>
                                                <li class="cat-item">
                                                    <a href="shop.html">Livingroom</a>
                                                    <span class="count">(5)</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item cat-parent">
                                            <a href="shop.html">Electronics</a>
                                            <span class="count">(14)</span>
                                            <ul class="children">
                                                <li class="cat-item">
                                                    <a href="shop.html">Laptops</a>
                                                    <span class="count">(6)</span>
                                                </li>
                                                <li class="cat-item">
                                                    <a href="shop.html">Desktops</a>
                                                    <span class="count">(5)</span>
                                                </li>
                                                <li class="cat-item">
                                                    <a href="shop.html">Mobile</a>
                                                    <span class="count">(5)</span>
                                                </li>
                                                <li class="cat-item">
                                                    <a href="shop.html">Fridge</a>
                                                    <span class="count">(5)</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item cat-parent">
                                            <a href="shop.html">Furniture</a>
                                            <span class="count">(16)</span>
                                            <ul class="children">
                                                <li class="cat-item">
                                                    <a href="shop.html">Bedroom</a>
                                                    <span class="count">(6)</span>
                                                </li>
                                                <li class="cat-item">
                                                    <a href="shop.html">Livingroom</a>
                                                    <span class="count">(5)</span>
                                                </li>
                                                <li class="cat-item">
                                                    <a href="shop.html">Men</a>
                                                    <span class="count">(5)</span>
                                                </li>
                                                <li class="cat-item">
                                                    <a href="shop.html">Women</a>
                                                    <span class="count">(5)</span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="cat-item">
                                            <a href="shop.html">Home</a>
                                            <span class="count">(12)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="shop.html">Magazines</a>
                                            <span class="count">(8)</span>
                                        </li>
                                        <li class="cat-item">
                                            <a href="shop.html">Sport</a>
                                            <span class="count">(5)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product Categories Widget End -->

                            <!-- Product color Widget Start -->
                            <div class="sidebar-widget product-widget product-color-widget">
                                <h3 class="widget-title">color</h3>
                                <div class="widget_conent">
                                    <ul class="product-color">
                                        <li><a href="shop.html">Black</a><span>(2)</span></li>
                                        <li><a href="shop.html">Blue</a><span>(4)</span></li>
                                        <li><a href="shop.html">Gold</a><span>(5)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Product color Widget End -->

                            <!-- Price Filter Widget Start -->
                            <div class="sidebar-widget product-widget product-price-widget">
                                <h3 class="widget-title">Filter By Price</h3>
                                <div class="widget_conent">
                                    <form action="#" method="post">
                                        <div id="slider-range" class="price-slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 16.6667%; width: 79.1667%;">
                                                
                                            </div>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 16.6667%;">
                                                
                                            </span>
                                            <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 95.8333%;">
                                                
                                            </span>
                                        </div>
                                        <div class="filter-price">
                                            <div class="filter-price__count">
                                                <div class="filter-price__input-group">
                                                    <span>Price: </span>
                                                    <input type="text" id="amount" class="amount-range" readonly="">
                                                </div>
                                                <button type="submit" class="sidebar-btn">
                                                    filter
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Price Filter Widget End -->

                            <!-- Price Compare Widget Start -->
                            <div class="sidebar-widget product-widget product-compare-widget">
                                <h3 class="widget-title">Compare</h3>
                                <div class="widget_conent">
                                    <ul>
                                        <li>
                                            <a href="sinngle-product.html">Condimentum furniture</a>
                                            <span class="compare-remove"><i class="fa fa-times"></i></span>
                                        </li>
                                        <li>
                                            <a href="sinngle-product.html">Auctor gravida enim</a>
                                            <span class="compare-remove"><i class="fa fa-times"></i></span>
                                        </li>
                                        <li>
                                            <a href="sinngle-product.html">Condimentum furniture</a>
                                            <span class="compare-remove"><i class="fa fa-times"></i></span>
                                        </li>
                                    </ul>
                                    <div class="compare-widget-bottom">
                                        <a href="#">Clear all</a>
                                        <a href="compare.html" class="sidebar-btn">Compare</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Price Compare Widget End -->

                            <!-- Product Banner Widget Start -->
                            <div class="sidebar-widget banner-widget">
                                <div class="promo-box full-width bg--white">
                                    <a href="#">
                                        <img src="{{asset('public/page/img/home1-product-banner-1.jpg')}}" alt="promo">
                                    </a>
                                </div>
                            </div>
                            <!-- Product Banner Widget End -->

                            <!-- Product Tags Widget Start -->
                            <div class="sidebar-widget product-tags-widget">
                                <h3 class="widget-title">Product Tags</h3>
                                <div class="widget_conent">
                                    <div class="tagcloud">
                                        <a href="blog.html" rel="1">chilled</a>
                                        <a href="blog.html" rel="2">dark</a>
                                        <a href="blog.html" rel="3">euro</a>
                                        <a href="blog.html" rel="2">fashion</a>
                                        <a href="blog.html" rel="1">food</a>
                                        <a href="blog.html" rel="4">hardware</a>
                                        <a href="blog.html" rel="3">hat</a>
                                        <a href="blog.html" rel="2">hipster</a>
                                        <a href="blog.html" rel="1">holidays</a>
                                        <a href="blog.html" rel="2">light</a>
                                        <a href="blog.html" rel="1">mac</a>
                                        <a href="blog.html" rel="3">place</a>
                                        <a href="blog.html" rel="2">t-shirt</a>
                                        <a href="blog.html" rel="1">travel</a>
                                        <a href="blog.html" rel="2">video-2</a>
                                        <a href="blog.html" rel="2">white</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Tags Widget End -->

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main Wrapper End -->
   <script src="{{asset('public/admin/toastr/jquery.min.js')}}"></script>

    <script src="{{asset('public/admin/toastr/toastr.min.js')}}" ></script>
           
   {!! Toastr::message() !!}
@endsection
