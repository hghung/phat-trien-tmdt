<header id="header" class="w-100 bg_white nav-on-top"> 
    <!-- Top Header Start -->
    <div class="top_header_1 bg_secondary">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-5">
            <div class="top_left"> <a href="callto:+84 762 999 9994"><i class="fa fa-phone" aria-hidden="true"></i> Cần hỗ trợ ? +84 76 299 9994</a> </div>
          </div>
          <div class="col-md-6 col-sm-7">
            <div class="top_right dropdown_1 d-flex float-right">
              <form action="#" method="post">
                {{--  <select class="selectpicker" data-width="fit">
                  <option>VN</option>
                  <option>ENG</option>
                </select>  --}}
              </form>
              @if(!Auth::check())
                <ul class="registration">
                  <li><a href="{{ route('page.reg') }}" class="toogle_btn"><i class="fa fa-key"></i> &nbsp Đăng ký</a></li>
                  <li><a href="{{ route('page.login') }}" class="toogle_btn"><i class="fa fa-unlock-alt"></i> &nbsp Đăng nhập</a></li>
                </ul>
              @else
             

              <ul class="registration">
                <li>
                  <a href="{{ route('taikhoan.profile') }}" class="toogle_btn">
                    <i class="fa fa-user"></i> 
                      &nbsp Hi !  {{ Auth::user()->member->kh_ten }} {{ Auth::user()->member->kh_ho }}
                    
                  </a>
                </li>

                <li>
                  <a href="{{ route('page.logout') }}" class="toogle_btn">
                    <i class="fa fa-power-off"></i> 
                    Đăng xuất
                  </a>
                </li>
              </ul>

                  
                  
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Header End --> 
    
    <!-- Nav Header Start -->
    <div class="main_header_1">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light w-100"> 
              <a class="navbar-brand" href="{{ route('page.home') }}">
                <img class="nav-logo" src="{{asset('public/house/img\logo1.png')}}" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
              <div  @yield('css_btn') class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto" >
                  <li class="nav-item"> <a class="nav-link" href="{{ route('page.home') }}">Home</a> </li>

                  <li class="nav-item"> <a class="nav-link" href="#">Giới thiệu</a> </li>

                  <li class="nav-item dropdown"> 
                    <a class="nav-link dropdown-toggle" href="blog-grid-classic.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loại nhà</a>

                    <ul class="dropdown-menu">
                      @foreach($loainha as $loainha2)
                      <li>
                        <a class="dropdown-item" href="{{ route('timkiem.loainha',['id' => $loainha2->id]) }}">{{ $loainha2->ten_loai }}</a>
                      </li>
                      @endforeach 
                      
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="blog-grid-classic.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="blog_grid.html">Blog Grid</a></li>
                      <li><a class="dropdown-item" href="blog_list.html">Blog List</a></li>
                      <li><a class="dropdown-item" href="blog_detail.html">Blog Detail</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="contact.php">Liên hệ</a> </li>
                </ul>
                
                @if(Auth::check())
                <div class="submit_property ml-2"><a class="btn btn_primary_bg" href="submit_property.html">Đăng bài</a></div>
                @endif
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Nav Header End --> 
  </header>