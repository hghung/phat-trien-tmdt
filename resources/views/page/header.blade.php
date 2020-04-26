
<div class="wrapper bg--zircon-light color-scheme-3">
<!-- Header Area Start Here -->
    <header class="header header-3">
       
        <div class="header-middle header-3--middle brand-bg-2 d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-lg-left text-center">
                        <!-- Logo Start -->
                        <a href="{{route('p.home')}}"  class="logo-box">
                            <img src="{{asset('public/page/img/logo-white.png')}}" alt="logo">
                        </a>
                        <!-- Logo End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Search Form Start -->
                        <form action="#" class="search-form search-form--2">
                            <div class="search-form__group search-form__group--select">
                                <select name="category" id="searchCategory" class="search-form__select">
                                    <option value="all">All Categories</option>
                                    <optgroup label="Books, Magazines">
                                        <option>Bedroom</option>
                                        <option>Kitchen</option>
                                        <option>Livingroom</option>
                                    </optgroup>
                                    <optgroup label="book">
                                        <option>Fridge</option>
                                        <option>Laptops, Desktops</option>
                                        <option>Mobiles, Tablets</option>
                                    </optgroup>
                                    <optgroup label="Furniture">
                                        <option>Accessories</option>
                                        <option>Men</option>
                                        <option>Women</option>
                                    </optgroup>
                                    <option value="3">Home, Garden</option>
                                    <option value="3">Kids, Baby</option>
                                    <option value="3">Sport</option>
                                </select>
                            </div>
                            <input type="text" class="search-form__input" placeholder="Tìm kiếm sách...">
                            <button class="search-form__submit color-3">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                        <!-- Search Form End -->
                    </div>
                    <div class="col-lg-3">
                        <div class="header-middle-nav">

                        @if(!Auth::check())

                            <div class="user-info header-middle-nav__item" >
                                <a href="{{route('p.login')}}"  style="color: #fff; font-size: 18px;">
                                    <i class="fa fa-unlock-alt" style="margin-right: 10px;"></i>Đăng nhập
                                </a>
                            </div>

                        @else

                            <div class="user-info header-middle-nav__item">
                                <div class="dropdown header-top__dropdown">
                                    <a class="dropdown-toggle" id="userID" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user"></i> Hi {{Auth::user()->info->info_name}}
                                    </a>                                {{-- {{Auth::user()->vaitro->ten_vai_tro}} --}}
                                    <div class="dropdown-menu" aria-labelledby="userID">
                                        <a class="dropdown-item" href="{{route('act.home')}}">
                                            <i class="text-primary fa fa-home"></i>
                                            Trang của tui
                                        </a>

                                        <a class="dropdown-item" href="{{route('ad.home')}}">
                                            <i class="text-primary fa fa-dashboard"></i>
                                            Trang quản trị
                                        </a>

                                     

                                        <a class="dropdown-item" href="{{route('p.logout')}}">
                                            <i class="text-primary fa fa-power-off"></i>
                                            Đăng xuất
                                        </a>

                                        

                                    </div>
                                </div>
                            </div>

                        @endif
                            <!-- Header Cart Start -->
                            <div class="mini-cart mini-cart--3">
                                <a class="mini-cart__dropdown-toggle" id="cartDropdown">
                                    <i class="fa fa-shopping-bag mini-cart__icon"></i>
                                    <sub class="mini-cart__count">{{Cart::count()}}</sub>
                                </a>
                                @if(Cart::count()>= 1)
                                    <div class="mini-cart__dropdown-menu">
                                        <div class="mini-cart__content">
                                            <div class="mini-cart__item">
                                                
                                                @foreach($data2 as $cart)

                                                <div class="mini-cart__item--single">
                                                    <div class="mini-cart__item--image">
                                                        <img src="{{asset('public/upload/')}}/{{$cart->options->img}}"  alt="product">
                                                    </div>
                                                    <div class="mini-cart__item--content">
                                                        <h4><a href="{{route('b.detail',['id' => $cart->id])}}" >{{$cart->name}}</a> </h4>
                                                        <p>Số lượng: {{$cart->qty}}</p>
                                                        <p>Giá: {{ number_format($cart->price*$cart->qty,0,',','.') }} đ</p>
                                                    </div>
                                                    <a href="{{Route('delcart',['id' => $cart->rowId])}}"><i class="fa fa-trash-o"></i></a>
                                                </div>

                                                
                                                @endforeach

                                                

                                            </div>
                                            <div class="mini-cart__total">
                                                <h4>
                                                    <span class="mini-cart__total--title">Tổng cộng</span>
                                                    <span class="mini-cart__total--ammount">{{$data3}} đ</span>
                                                </h4>
                                            </div>
                                            <div class="mini-cart__btn">
                                                <a href="{{route('cart')}}"  class="btn btn-small btn-icon btn-style-1 color-3">Giỏ hàng <i class="fa fa-angle-right"></i></a>
                                                <a href="{{route('checkout')}}"  class="btn btn-small btn-icon btn-style-1 color-3">Thanh toán <i class="fa fa-angle-right"></i></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <!-- Header Cart End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-3--bottom">
            <div class="container">
                <div class="row custom-row">
                    <div class="col-lg-3">
                        <!-- Category Nav Start -->
                        <div class="category-nav category-nav--3">
                            <h2  class="category-nav__title tertiary-bg" id="js-cat-nav-title"><i class="fa fa-bars"></i> <span>Categories</span></h2>
                            
                            @yield('hide')

                            <ul class="category-nav__menu hide-in-default" id="js-cat-nav">

                                    @foreach($category as $ctg)
                                    <li class="category-nav__menu__item has-children">
                                        <a href="#" ><i class="fa fa-coffee"></i> {{$ctg->category_name}}</a>
                                        <div class="category-nav__submenu">
                                            <div class="category-nav__submenu--inner">
                                                @foreach($ctg->subcategory as $ctg2)

                                                <ul>
                                                    <li><a href="{{Route('p.subcategory',['id' => $ctg2->id])}}" >{{$ctg2->subcategory_name}}</a></li>
                                                </ul>

                                                @endforeach

                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                            </ul>
                        </div> 
                        <!-- Category Nav End -->
                        <div class="category-mobile-menu"></div>
                    </div>
                    <div class="col-lg-9">
                        <nav class="main-navigation main-navigation-2">
                            <!-- Mainmenu Start -->
                            <ul class="mainmenu mainmenu--3">
                                <li class="mainmenu__item active ">
                                    <a href="{{route('p.home')}}"  class="mainmenu__link">Home</a>
                                </li>
                                <li class="mainmenu__item menu-item-has-children">
                                    <a href="shop.html" class="mainmenu__link">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="shop.html">Shop Gird</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html" >Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                <li><a href="shop-fullwidth-4-column.html" >Shop 4 Column</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop-list.html" >Shop List</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop-list-left-sidebar.html" >Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html" Shop List Right Sidebar</a></li>
                                                <li><a href="shop-list.html" >Shop List Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product.html">Single Product</a>
                                            <ul class="sub-menu">
                                                <li><a href="single-product.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product.html">Tab Style 1</a></li>
                                                <li><a href="single-product-tab-style-2.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-tab-style-2.html">Tab Style 2</a></li>
                                                <li><a href="single-product-tab-style-3.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-tab-style-3.html">Tab Style 3</a></li>
                                                <li><a href="single-product-gallery-left.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-gallery-left.html">Gallery Left</a></li>
                                                <li><a href="single-product-gallery-right.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-gallery-right.html">Gallery Right</a></li>
                                                <li><a href="single-product-slider-box.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-slider-box.html">Slider Box</a></li>
                                                <li><a href="single-product-slider-full-width.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-slider-full-width.html">Slider Full Width</a></li>
                                                <li><a href="single-product-sticky-left.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-sticky-left.html">Sticky Left</a></li>
                                                <li><a href="single-product-sticky-right.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-sticky-right.html">Sticky Right</a></li>
                                                <li><a href="single-product-group.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-group.html">Group Product</a></li>
                                                <li><a href="single-product-variable.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-variable.html">Variable Product</a></li>
                                                <li><a href="single-product-affiliate.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-product-affiliate.html">Affiliate Product</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="portfolio.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/portfolio.html" class="mainmenu__link">Portfolio</a>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="blog.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/blog.html" class="mainmenu__link">Blog</a>
                                </li>
                                <li class="mainmenu__item menu-item-has-children">
                                    <a href="#" class="mainmenu__link">Features</a>
                                    <ul class="megamenu three-column">
                                        <li>
                                            <a href="#">Pages</a>
                                            <ul>
                                                <li>
                                                    <a href="about-us.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/about-us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="about-us-2.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/about-us-2.html">About Us 2</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/contact.html">Contact</a>
                                                </li>
                                                <li>
                                                    <a href="contact-2.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/contact-2.html">Contact 2</a>
                                                </li>
                                                <li>
                                                    <a href="services.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/services.html">Services</a>
                                                </li>
                                                <li>
                                                    <a href="services-2.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/services-2.html">Services 2</a>
                                                </li>
                                                <li>
                                                    <a href="faq.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="404.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/login-register.html">Login & Registration</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>
                                            <ul>
                                                <li>
                                                    <a href="blog.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/blog.html">Blog Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/blog-right-sidebar.html">Blog Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-3-column.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/blog-3-column.html">Blog 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="blog-4-column.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/blog-4-column.html">Blog 4 Column</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-image.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-blog-image.html">Image Format</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-gallery.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-blog-gallery.html">Gallery Format</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-audio.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-blog-audio.html">Audio Format</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-video.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-blog-video.html">Video Format</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-right-sidebar.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/single-blog-right-sidebar.html">Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Shop</a>
                                            <ul>
                                                <li>
                                                    <a href="cart.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html" tppabs="https://demo.hasthemes.com/lazio-preview/lazio/my-account.html">My Account</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- Mainmenu End -->
                        </nav>
                        <!-- Main Mobile Menu Start -->
                        <div class="mobile-menu mobile-menu--3"></div>
                        <!-- Main Mobile Menu End -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header Start -->
        <div class="fixed-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Sticky Logo Start -->
                        <a class="sticky-logo" href="{{route('p.home')}}">
                            <img src="{{asset('public/page/img/logo-white.png')}}" alt="logo">
                        </a>
                        <!-- Sticky Logo End -->
                    </div>
                    <div class="col-lg-9">
                        <!-- Sticky Mainmenu Start -->
                        <nav class="sticky-navigation">
                            <ul class="mainmenu sticky-menu">
                                <li class="mainmenu__item active menu-item-has-children sticky-has-child">
                                    <a href="{{route('p.home')}}" class="mainmenu__link">Home</a>
                                    <ul class="sub-menu hidden-sub">
                                        <li>
                                            <a href="{{route('p.home')}}">Home 1</a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">Home 2</a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">Home 3</a>
                                        </li>
                                        <li>
                                            <a href="index-4.html">Home 4</a>
                                        </li>
                                        <li>
                                            <a href="index-5.html">Home 5</a>
                                        </li>
                                        <li>
                                            <a href="index-6.html">Home 6</a>
                                        </li>
                                        <li>
                                            <a href="index-7.html">Home 7</a>
                                        </li>
                                        <li>
                                            <a href="index-8.html">Home 8</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mainmenu__item menu-item-has-children sticky-has-child sticky-has-child">
                                    <a href="shop.html" class="mainmenu__link">Shop</a>
                                    <ul class="sub-menu hidden-sub">
                                        <li class="menu-item-has-children sticky-has-child">
                                            <a href="shop.html">Shop Gird</a>
                                            <ul class="sub-menu hidden-sub">
                                                <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                <li><a href="shop-fullwidth-4-column.html">Shop 4 Column</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children sticky-has-child">
                                            <a href="shop-list.html">Shop List</a>
                                            <ul class="sub-menu hidden-sub">
                                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                                <li><a href="shop-list.html">Shop List Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children sticky-has-child">
                                            <a href="single-product.html">Single Product</a>
                                            <ul class="sub-menu hidden-sub">
                                                <li><a href="single-product.html">Tab Style 1</a></li>
                                                <li><a href="single-product-tab-style-2.html">Tab Style 2</a></li>
                                                <li><a href="single-product-tab-style-3.html">Tab Style 3</a></li>
                                                <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                                <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                                <li><a href="single-product-slider-box.html">Slider Box</a></li>
                                                <li><a href="single-product-slider-full-width.html">Slider Full Width</a></li>
                                                <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                                <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                                <li><a href="single-product-group.html">Group Product</a></li>
                                                <li><a href="single-product-variable.html">Variable Product</a></li>
                                                <li><a href="single-product-affiliate.html">Affiliate Product</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="portfolio.html" class="mainmenu__link">Portfolio</a>
                                </li>
                                <li class="mainmenu__item">
                                    <a href="blog.html" class="mainmenu__link">Blog</a>
                                </li>
                                <li class="mainmenu__item menu-item-has-children sticky-has-child">
                                    <a href="#" class="mainmenu__link">Features</a>
                                    <ul class="megamenu three-column hidden-sub">
                                        <li>
                                            <a href="#" class="megamenu__heading">Pages</a>
                                            <ul class="hidden-sub">
                                                <li>
                                                    <a href="about-us.html">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="about-us-2.html">About Us 2</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Contact</a>
                                                </li>
                                                <li>
                                                    <a href="contact-2.html">Contact 2</a>
                                                </li>
                                                <li>
                                                    <a href="services.html">Services</a>
                                                </li>
                                                <li>
                                                    <a href="services-2.html">Services 2</a>
                                                </li>
                                                <li>
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li>
                                                    <a href="404.html">404</a>
                                                </li>
                                                <li>
                                                    <a href="login-register.html">Login & Registration</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="megamenu__heading">Blog</a>
                                            <ul class="hidden-sub">
                                                <li>
                                                    <a href="blog.html">Blog Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-3-column.html">Blog 3 Column</a>
                                                </li>
                                                <li>
                                                    <a href="blog-4-column.html">Blog 4 Column</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-image.html">Image Format</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-gallery.html">Gallery Format</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-audio.html">Audio Format</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-video.html">Video Format</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog-right-sidebar.html">Right Sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="megamenu__heading">Shop</a>
                                            <ul class="hidden-sub">
                                                <li>
                                                    <a href="cart.html">Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Checkout</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">Compare</a>
                                                </li>
                                                <li>
                                                    <a href="my-account.html">My Account</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <div class="sticky-mobile-menu">
                                <span class="sticky-menu-btn"></span>
                            </div>
                        </nav>
                        <!-- Sticky Mainmenu End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sticky Header End -->
    </header>
    <!-- Header Area End Here -->
    