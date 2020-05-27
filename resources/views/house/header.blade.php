<header id="header" class="w-100 bg_white nav-on-top"> 
    <!-- Top Header Start -->
    <div class="top_header_1 bg_secondary">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-5">
            <div class="top_left"> <a href="callto:+14357824312"><i class="fa fa-phone" aria-hidden="true"></i> Cần hỗ trợ ? +84 76 299 9994</a> </div>
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
                  <li><a href="{{ route('page.reg') }}" class="toogle_btn">Đăng ký</a></li>
                  <li><a href="{{ route('page.login') }}" class="toogle_btn">Đăng nhập</a></li>
                </ul>
              @else
              <ul class="navbar-nav ml-auto">
               
                <li class="nav-item dropdown"> 
                  <a class="nav-link dropdown-toggle" href="{{ route('taikhoan.profile') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i> 
                    Hi !  {{ Auth::user()->member->kh_ten }} {{ Auth::user()->member->kh_ho }}
                  </a>
                  {{--  đăng xuất  --}}
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('taikhoan.profile') }}" style="color:black">
                      <i class="fa fa-power-off"></i> 
                      Thông tin tài khoản</a>
                    </li>
                    {{--  dang xuat  --}}
                    <li><a class="dropdown-item" href="{{ route('page.logout') }}" style="color:black">
                      <i class="fa fa-power-off"></i> 
                      Đăng xuất</a>
                    </li>
                  </ul>
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
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item"> <a class="nav-link" href="{{ route('page.home') }}">Home</a> </li>

                  <li class="nav-item"> <a class="nav-link" href="#">Giới thiệu</a> </li>

                  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="blog-grid-classic.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Agents</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="agents.html">Agents</a></li>
                      <li><a class="dropdown-item" href="agent_profile_grid.html">Agent Profile Grid</a></li>
                      <li><a class="dropdown-item" href="agent_profile_list.html">Agent Profile List</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown mega_menu_dropdown">
                      <a class="nav-link dropdown-toggle" href="blog-grid-classic.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                      <ul class="dropdown-menu mega_menu">
                          <li>
                              <ul class="mega-dropdown">
                                  <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                  <li><a class="dropdown-item" href="mission.html">Our Mission</a></li>
                                  <li><a class="dropdown-item" href="career.html">Careers</a></li>
                                  <li><a class="dropdown-item" href="award.html">Awards</a></li>
                                  <li><a class="dropdown-item" href="testimonial.html">Testimonials</a></li>
                                  <li><a class="dropdown-item" href="timeline.html">Timeline</a></li>
                              </ul>
                          </li>
                          <li>
                              <ul class="mega-dropdown">
                                  <li><a class="dropdown-item" href="my_profile.html">My Profile</a></li>
                                  <li><a class="dropdown-item" href="profile_media.html">Social Media</a></li>
                                  <li><a class="dropdown-item" href="my_properties.html">My Properties</a></li>
                                  <li><a class="dropdown-item" href="my_favorite.html">Favorited Properties</a></li>
                                  <li><a class="dropdown-item" href="submit_property.html">Submit New Property</a></li>
                                  <li><a class="dropdown-item" href="shortcodes.html">Shortcodes</a></li>
                              </ul>
                          </li>
                          <li>
                              <ul class="mega-dropdown">
                                  <li><a class="dropdown-item" href="comments.html">Feedback and Comments</a></li>
                                  <li><a class="dropdown-item" href="invoices.html">Payments and Invoice</a></li>
                                  <li><a class="dropdown-item" href="change_password.html">Change Password</a></li>
                                  <li><a class="dropdown-item" href="terms_and_condition.html">Terms And Condition</a></li>
                                  <li><a class="dropdown-item" href="pricing_table.html">Pricing Table</a></li>
                                  <li><a class="dropdown-item" href="agency_profile.html">Agency Profile</a></li>
                              </ul>
                          </li>
                          <li>
                              <ul class="mega-dropdown">
                                  <li><a class="dropdown-item" href="our_service.html">Our Services</a></li>
                                  <li><a class="dropdown-item" href="submit_property.html">Submit Property</a></li>
                                  <li><a class="dropdown-item" href="invoice_details.html">Invoice Details</a></li>
                                  <li><a class="dropdown-item" href="message_view.html">Message</a></li>
                                  <li><a class="dropdown-item" href="error.html">Error Page</a></li>
                                  <li><a class="dropdown-item" href="faq.html">FAQ</a></li>
                              </ul>
                          </li>
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