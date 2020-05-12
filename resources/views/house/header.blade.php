@yield('hiden')
@yield('hiden2')

		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div class="rle_logo">
						<a href="{{ route('page.home') }} "><img src="{{asset('public/house/img/logo3.png')}}"  alt="Logo" title="Logo"></a>
					</div>
				</div>

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $err)
						{{$err}}<br>
					@endforeach
				</div>
			@endif


				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<button class="rle_menu_btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
					<div class="rle_main_menu_wrapper">
						<div class="rle_main_menu">
							<ul>
								<li><a href="#">home</a>
									<ul class="sub-menu">
										<li><a href="index.html" >home 1</a></li>
										<li><a href="index2.html" >home 2</a></li>
										
									</ul>
								</li>
								<li><a href="about.html" >about us</a></li>
								<li><a href="#">property</a>
									<ul class="sub-menu">
										<li><a href="property_gird_fullwidth.html" >gird fullwidth</a></li>
										
									</ul>
								</li>
								<li><a href="#">agents</a>
									<ul class="sub-menu">
										<li><a href="agent.html" >agent</a></li>
										<li><a href="agent_single.html" >agent single</a></li>
									</ul>
								</li>
								<li><a href="#">pages</a>
									<ul class="sub-menu">
										<li><a href="blog.html" >blog</a></li>
										
									</ul>
								</li>
								<li><a href="javascript:if(confirm(%27http://themeforest.swanitinfotech.com/real_estate/demo/real_estate/contact.html  \n\nThis file was not retrieved by Teleport Ultra, because the server reports that the item is unavailable.  \n\nDo you want to open it from the server?%27))window.location=%27http://themeforest.swanitinfotech.com/real_estate/demo/real_estate/contact.html%27" tppabs="http://themeforest.swanitinfotech.com/real_estate/demo/real_estate/contact.html">contact</a></li>
							</ul>
						</div>
					</div>
					@if(!Auth::check())
					<div class="rle_signin">
						<a href="#" class="rle_btn" id="login_button">sign in</a>
						<div id="login_one" class="rle_login_form">
							<p>Bạn chưa có tài khoản? <a href="{{ route('page.reg') }}">Đăng ký</a></p>
							<form class="form"  method="POST"  action="{{Route('page.login.post')}}" enctype="multipart/form-data" > {{ csrf_field() }}

								<input type="text" name="username" placeholder="Username">
								<input type="password" name="password" placeholder="Password">

								<div class="rle_checkbox">
									<input type="checkbox" id="remember_me" checked />
									<label for="remember_me">Remember me</label>
								</div>
								<a href="#" class="forgot_pswd">forgot password?</a>
								<button type="submit" class="rle_btn">Đăng nhập</button>
								<span>or</span>
								<a href="#" class="share_btn fcbk_clr_1"><i class="fa fa-facebook" aria-hidden="true"></i>login with facebook</a>
								<a href="#" class="share_btn ggl_clr_2"><i class="fa fa-google-plus" aria-hidden="true"></i>login with google plus</a>
							</form>
						</div>
					</div>
					@else
					<div class="rle_signin">
						<a href="#" class="rle_btn" id="login_button">{{ Auth::user()->username }}</a>
						<div id="login_one" class="rle_login_form">
							<div class="form"   > 
								<a href="{{ route('admin.home') }}" class="share_btn fcbk_clr_1"><i class="fa fa-facebook" aria-hidden="true"></i>Trang quản trị</a>
								<a href="{{ route('page.logout') }}" class="share_btn ggl_clr_2"><i class="fa fa-google-plus" aria-hidden="true"></i>Đăng xuất</a>
								<a href="{{ route('page.logout') }}" class="share_btn ggl_clr_2"><i class="fa fa-google-plus" aria-hidden="true"></i>Đăng xuất</a>

							</div>
						</div>
					</div>
					@endif
				</div>
			</div>
		</div>
    </div>
    @yield('hiden3')
    
</div>

