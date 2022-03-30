
	<header>

		<!-- Header Start -->
		<div class="header-area">
			<div class="main-header ">
				<div class="header-top d-none d-lg-block">
					<div class="container ml-3">
						<div class="col-xl-12">
							<div
								class="row d-flex justify-content-between align-items-center ml-xl-5 ml-lg-4 ml-md-3 ml-2">
								<div class="header-info-left">
									<ul>
										<li><a href="">English</a></li>
										<li><a href="">شركة RPC لاستصلاح الأراضى</a></li>
										<li><a href="">خبرات وارشادات</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom  header-sticky">
					<div class=" ml-0 mr-0">
						<div class="row align-items-center" dir="rtl">
							<!-- Logo -->
							<div class="col-xl-3 col-lg-4">
								<div class="logo">
									<a href="">
										<img src="{{asset('images/logo-1.png')}}" alt="" class="">
									</a>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8 bg-gradient">
								<div class="menu-wrapper col-md-12 d-flex align-items-center justify-content-end">
									<!-- Main-menu -->
									<div class="main-menu col-md-12 d-none d-lg-block">
										<nav class="">
											<ul id="navigation" class="d-flex justify-content-around">
												<li><a href="{{ url('/') }}" class="{{Request::is('') ? 'active' : ''}}">الرئيسية</a></li>
												<li><a href="{{ url('/about') }}" class="{{Request::is('about') ? 'active' : ''}}">من نحن</a></li>
												<li><a href="{{ url('/services') }}"  class="{{Request::is('services') ? 'active' : ''}}">خدماتنا</a></li>
												<li><a href="{{ url('/products') }}"  class="{{Request::is('products') ? 'active' : ''}}">منتجاتنا</a></li>
												<li><a href="{{ url('/partners') }}"  class="{{Request::is('partners') ? 'active' : ''}}">شركاء النجاح</a></li>
												<li><a href="{{ url('/blog') }}"  class="{{Request::is('blog') ? 'active' : ''}}">مقالات</a></li>
												<li><a href="{{ url('/gallary') }}"  class="{{Request::is('gallary') ? 'active' : ''}}">معرض الصور</a></li>
												<li><a href="{{ url('/contact') }}"  class="{{Request::is('contact') ? 'active' : ''}}">تواصل معنا</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!-- Mobile Menu -->
							<div class="col-12">
								<div class="mobile_menu d-block d-lg-none"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header End -->
	</header>

