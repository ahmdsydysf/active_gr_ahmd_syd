@extends('layouts.main.main_layout')


@section('page_title' , 'Active Group')


@section('content')
    	<!-- slider Area Start-->
		<div class="slider-area ">
			<div class="bottom-shape">

			</div>
			<div class="slider-active ">
				<!-- Single Slider -->
				<div class="single-slider slider-height d-flex align-items-center">
					<div id="overlay"></div>
					<div class="container">



						<div class="row" dir="rtl">
							<div class="col-xl-8 col-lg-7 col-md-8">
								<div class="hero__caption">
									<h1 data-animation="fadeInLeft" data-delay=".5s">الطريقه المثلى لتطوير<br />انتاج
										مزارعك</h1>
									<p data-animation="fadeInLeft" data-delay=".9s">خلافاَ للاعتقاد السائد فإن لوريم
										إيبسوم ليس نصاَ عشوائياً<br /> بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ
										العام قبل <br /> الميلاد، مما يجعله أكثر من عام في القدم</p>
									<!-- Hero-btn -->
									<div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
										<a href="#" class="btn hero-btn">المزيد</a>
										<a class="btn hero-btn2">اتصل بنا</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Single Slider -->
				<div class="single-slider slider-height d-flex align-items-center">
					<div id="overlay"></div>
					<div class="container">
						<div class="row" dir="rtl">
							<div class="col-xl-8 col-lg-7 col-md-8">
								<div class="hero__caption">
									<h1 data-animation="fadeInLeft" data-delay=".5s">الطريقه المثلى لتطوير<br />انتاج
										مزارعك</h1>
									<p data-animation="fadeInLeft" data-delay=".9s">خلافاَ للاعتقاد السائد فإن لوريم
										إيبسوم ليس نصاَ عشوائياً<br /> بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ
										العام قبل <br /> الميلاد، مما يجعله أكثر من عام في القدم</p>
									<!-- Hero-btn -->
									<div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
										<a href="#" class="btn hero-btn">المزيد</a>
										<a class="btn hero-btn2">اتصل بنا</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- slider Area End-->

		<section class="sec-gap">
			<div class="container">
				<div class="row" dir="rtl">
					<div class="col-lg-6">
						<div class="about_img">
							<img src="{{asset('images/1.png')}}" alt="">
							<div class="exp">10 سنوات من الخبره </div>
						</div>
					</div>
					<div class="col-lg-6">
						<div>
							<div class="sec-about">
								<h3 class="about-head">من نحن</h3>
								<div class="about_title">الموزع الاول لتجاره الاسمده والمبيدات</div>
								<div class="about_text">
									خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
									اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام
									البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في
									فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي وخلال تتبعه لهذه
									الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص لوريم
									إيبسوم تأتي
								</div>
								<div class="row mt-10">
									<div class="col-lg-6">
										<ul class="text-right">
											<li><i class="fas fa-arrow-circle-left"></i>سنوات من الخبره</li>
											<li><i class="fas fa-arrow-circle-left"></i>فريق عمل متميز</li>
											<li><i class="fas fa-arrow-circle-left"></i>24 ساعه دعم فنى</li>
										</ul>
									</div>
									<div class="col-lg-6">
										<ul class="text-right">
											<li><i class="fas fa-arrow-circle-left"></i>سنوات من الخبره</li>
											<li><i class="fas fa-arrow-circle-left"></i>فريق عمل متميز</li>
											<li><i class="fas fa-arrow-circle-left"></i>24 ساعه دعم فنى</li>
										</ul>
									</div>
								</div>
								<div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="sec-gap trends">
			<img src="{{asset('images/Handdrawn Tropical Leaf2.svg')}}" alt="" srcset="" class="leaf-bg">
			<div class="trends_background"></div>
			<div class="container">
				<div class="row">

					<!-- Trends Content -->
					<div class="col-lg-3">
						<div class="trends_container">
							<h2 class="trends_title clr-green">منتجاتنا فى الاسمده</h2>
							<div class="trends_text">
								<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
									اللاتيني الكلاسيكي منذ العام قبل الميلاد مما أكثر من عام في القدم</p>
							</div>
							<div class="trends_slider_nav">
								<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
								<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
							</div>
						</div>
					</div>

					<!-- Trends Slider -->
					<div class="col-lg-9">
						<div class="trends_slider_container">

							<!-- Trends Slider -->

							<div class="owl-carousel owl-theme trends_slider">

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/01.png')}}" alt="">
										</div>
										<div class="trends_content clr-green">
											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														عناصر كبرى
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/02.png')}}" alt="">
										</div>
										<div class="trends_content clr-green">
											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														عناصر كبرى
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/04.png')}}" alt="">
										</div>
										<div class="trends_content clr-green">
											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														عناصر كبرى
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/01.png')}}" alt="">
										</div>
										<div class="trends_content clr-green">
											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														عناصر كبرى
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/02.png')}}" alt="">
										</div>
										<div class="trends_content clr-green">
											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														عناصر كبرى
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/04.png')}}" alt="">
										</div>
										<div class="trends_content clr-green">
											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														عناصر كبرى
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="sec-gap reviews bg-1">
			<span class="top-bg">
				<img src="{{asset('images/shape.png')}}" alt="" srcset="">
			</span>
			<span class="bottom-bg">
				<img src="{{asset('images/shape.png')}}" alt="" srcset="">
			</span>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="head_title">لماذا نحن ؟</div>
						<div class="head_text">
							خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
							الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="reviews_slider_container reviews_slider_nav">
							<div class="reviews_prev reviews_nav"><i class="fas fa-angle-left ml-auto"></i>
							</div>
							<!-- Reviews Slider -->
							<div class="owl-carousel owl-theme reviews_slider ">

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div class="review_image">
											<img src="{{asset('images/Cash.svg')}}" alt="">
										</div>
									</div>
									<div class="rev-content">
										<h3>الدفع عند الاستلام</h3>
										<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											الأدب اللاتيني</p>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div class="review_image">
											<img src="{{asset('images/Delivery-Cart.svg')}}" alt="">
										</div>
									</div>
									<div class="rev-content">
										<h3>توفير كميات</h3>
										<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											الأدب اللاتيني</p>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div class="review_image">
											<img src="{{asset('images/Delivery-Wait.svg')}}" alt="">
										</div>
									</div>
									<div class="rev-content">
										<h3>خدمه الشحن</h3>
										<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											الأدب اللاتيني</p>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div class="review_image">
											<img src="{{asset('images/Cash.svg')}}" alt="">
										</div>
									</div>
									<div class="rev-content">
										<h3>الدفع عند الاستلام</h3>
										<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											الأدب اللاتيني</p>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div class="review_image">
											<img src="{{asset('images/Delivery-Cart.svg')}}" alt="">
										</div>
									</div>
									<div class="rev-content">
										<h3>توفير كميات</h3>
										<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											الأدب اللاتيني</p>
									</div>
								</div>

								<!-- Reviews Slider Item -->
								<div class="owl-item">
									<div class="review d-flex flex-row align-items-start justify-content-start">
										<div class="review_image">
											<img src="{{asset('images/Delivery-Wait.svg')}}" alt="">
										</div>
									</div>
									<div class="rev-content">
										<h3>خدمه الشحن</h3>
										<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											الأدب اللاتيني</p>
									</div>
								</div>


							</div>
							<div class="reviews_next reviews_nav">
                                <i class="fas fa-angle-right ml-auto"></i>
							</div>
							<div class="reviews_dots"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sec-gap blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="head_title">منتجاتنا فى المبيدات</div>
						<div class="head_text">
							خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
							الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم
						</div>
					</div>
				</div>
				<div class="row" dir="rtl">
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="">
							<div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
									src="{{asset('images/03.png')}}" alt=""></div>
							<div class="pro_title">
								<a href="#">
									مبيدات فطرية
								</a>
							</div>
							<div class="pro_content">
								<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
									اللاتيني الكلاسيكي</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="">
							<div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
									src="{{asset('images/06.png')}}" alt=""></div>
							<div class="pro_title">
								<a href="#">
									مبيدات حشرية
								</a>
							</div>
							<div class="pro_content">
								<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
									اللاتيني الكلاسيكي</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<div class="">
							<div class="pro_image d-flex flex-column align-items-center justify-content-center"><img
									src="{{asset('images/07.png')}}" alt=""></div>
							<div class="pro_title">
								<a href="#">
									مبيدات نيناتودية
								</a>
							</div>
							<div class="pro_content">
								<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
									اللاتيني الكلاسيكي</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="sec-gap pro-sec">

			<div class="row">
				<div class="col-lg-6 p-5">
					<div class="pro-text">
						<div class="clients_title">منتجاتنا في منظمات النمو</div>
						<div class="clients_text">
							خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
							اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000 عام في القدم. قام
							البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو بروفيسور اللغة اللاتينية في
							جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم وهي
							"consectetur"، وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك.
							فلقد اتضح أن كلمات نص لوريم إيبسوم تأتي
						</div>
						<div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a></div>
					</div>
				</div>
				<div class="col-lg-6 pr-no">
					<div class="sec-img">
						<img src="{{asset('images/05.png')}}" alt="">
					</div>
				</div>
			</div>

		</div>

		<div class="sec-gap testimonial-area testimonial-padding">
			<div class="scnd-leaf">
				<img src="{{asset('images/Latest post.svg')}}" alt="">
			</div>
			<div class="container ">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 pb-30">
						<div class="head_title">اراء عملائنا</div>
						<div class="head_text">
							خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً بل إن له جذور في الأدب اللاتيني
						</div>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="h1-testimonial-active">
							<!-- Single Testimonial -->
							<div class="single-testimonial text-center">
								<!-- Testimonial Content -->
								<div class="row">
									<div class="col-lg-4 col-md-12">
										<div class="testimonial-caption ">
											<div
												class="testimonial-founder d-flex align-items-center justify-content-center">
												<div class="founder-img">
													<img src="{{asset('images/t4.png')}}" alt="">
												</div>
											</div>
											<div class="founder-text">
												<span>م / ليلي هلال</span>
												<p>صاحب مؤسسه زراعيه</p>
											</div>
										</div>
									</div>
									<div class="col-lg-8  col-md-12 rev-text">
										خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
										الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم.
										قام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة اللاتينية في جامعة
										هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم
										وهي وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد
										اتضح أن كلمات نص لوريم إيبسوم تأتي
									</div>
								</div>
							</div>
							<!-- Single Testimonial -->
							<div class="single-testimonial text-center">
								<!-- Testimonial Content -->
								<div class="row">
									<div class="col-lg-4 col-md-12">
										<div class="testimonial-caption ">
											<div
												class="testimonial-founder d-flex align-items-center justify-content-center">
												<div class="founder-img">
													<img src="{{asset('images/rev-2.png')}}" alt="">
												</div>
											</div>
											<div class="founder-text">
												<span>م / محمد هلال</span>
												<p>صاحب مؤسسه زراعيه</p>
											</div>
										</div>
									</div>
									<div class="col-lg-8 col-md-12 rev-text">
										خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
										الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم.
										قام البروفيسور ريتشارد ماك لينتوك وهو بروفيسور اللغة اللاتينية في جامعة
										هامبدن-سيدني في فيرجينيا بالبحث عن أصول كلمة لاتينية غامضة في نص لوريم إيبسوم
										وهي وخلال تتبعه لهذه الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد
										اتضح أن كلمات نص لوريم إيبسوم تأتي
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="sec-gap trends">
			<div class="trends_background"></div>
			<div class="container">
				<div class="row">

					<!-- Trends Content -->
					<div class="col-lg-3">
						<div class="trends_container">
							<h2 class="trends_title">المقالات</h2>
							<div class="trends_text">
								<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
									اللاتيني الكلاسيكي منذ العام قبل الميلاد مما أكثر من عام في القدم</p>
							</div>
							<div class="trends_slider_nav">
								<div class="trends_prev trends_nav"><i class="fas fa-angle-left ml-auto"></i></div>
								<div class="trends_next trends_nav"><i class="fas fa-angle-right ml-auto"></i></div>
							</div>
						</div>
					</div>

					<!-- Trends Slider -->
					<div class="col-lg-9">
						<div class="trends_slider_container">

							<!-- Trends Slider -->

							<div class="owl-carousel owl-theme trends_slider">

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/05.png')}}" alt="">
											<div class="trends_category"><a href="#"> 2021 مايو <i
														class="fas fa-calendar-alt ml-1"></i> </a></div>
										</div>
										<div class="trends_content">

											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														أكبر الشركات العاملة في
														<br />
														المجال الزراعي في العالم
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/08.png')}}" alt="">
											<div class="trends_category"><a href="#"> 2021 مايو <i
														class="fas fa-calendar-alt ml-1"></i> </a></div>
										</div>
										<div class="trends_content">

											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														أكبر الشركات العاملة في
														<br />
														المجال الزراعي في العالم
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/09.png')}}" alt="">
											<div class="trends_category"><a href="#"> 2021 مايو <i
														class="fas fa-calendar-alt ml-1"></i> </a></div>
										</div>
										<div class="trends_content">

											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														أكبر الشركات العاملة في
														<br />
														المجال الزراعي في العالم
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/1.webp')}}" alt="">
											<div class="trends_category"><a href="#"> 2021 مايو <i
														class="fas fa-calendar-alt ml-1"></i> </a></div>
										</div>
										<div class="trends_content">

											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														أكبر الشركات العاملة في
														<br />
														المجال الزراعي في العالم
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/1.webp')}}" alt="">
											<div class="trends_category"><a href="#"> 2021 مايو <i
														class="fas fa-calendar-alt ml-1"></i> </a></div>
										</div>
										<div class="trends_content">

											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														أكبر الشركات العاملة في
														<br />
														المجال الزراعي في العالم
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- Trends Slider Item -->
								<div class="owl-item">
									<div class="trends_item is_new">
										<div
											class="trends_image d-flex flex-column align-items-center justify-content-center">
											<img src="{{asset('images/1.webp')}}" alt="">
											<div class="trends_category"><a href="#"> 2021 مايو <i
														class="fas fa-calendar-alt ml-1"></i> </a></div>
										</div>
										<div class="trends_content">

											<div class="trends_info clearfix">
												<div class="trends_name">
													<a>
														أكبر الشركات العاملة في
														<br />
														المجال الزراعي في العالم
													</a>
													<p>خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن
														له جذور في الأدب</p>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<section class="sec-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="head_title">شركاء النجاح</div>
						<div class="head_text">
							خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
							الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div id="owl-demo" class="owl-carousel owl-theme">
							<div class="item">
								<div class="row">
									<div class="col-lg-6 col-md-12 bg-1 partner-p">
										<div class="clients_title">الشركه الافريقية للاسمده</div>
										<div class="clients_text">
											خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
											كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه
											الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص
											لوريم إيبسوم تأتيفي جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
											كلمة لاتينية غامضة في نص لوريم إيبسومفي جامعة هامبدن-سيدني في فيرجينيا
											بالبحث عن أصول
											كلمة لاتينية غامضة في نص لوريم إيبسوم
										</div>
										<div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a>
										</div>
									</div>
									<div class="col-lg-6 col-md-12">
										<div class="clients_img">
											<img src="{{asset('images/10.png')}}" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-lg-6 bg-1 partner-p">
										<div class="clients_title">الشركه الدوليه للاسمده الصناعيه والطبيعيه</div>
										<div class="clients_text">
											خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000
											عام في القدم. قام البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو
											بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
											كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه
											الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص
											لوريم إيبسوم تأتي
										</div>
										<div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="clients_img">
											<img src="{{asset('images/1.png')}}" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-lg-6 bg-1 partner-p">
										<div class="clients_title">الشركه الافريقية للاسمده</div>
										<div class="clients_text">
											خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
											كلمة لاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
											كلمة لاتينية غامضة في نص لوريم إيبسوم غامضة في نص لوريم إيبسوم وهي
											"consectetur"، وخلال تتبعه لهذه
											الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. في جامعة هامبدن-سيدني
											في فيرجينيا بالبحث عن أصول
											كلمة لاتينية غامضة في نص لوريم إيبسوم فلقد اتضح أن كلمات نص
											لوريم إيبسوم تأتي
										</div>
										<div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="clients_img">
											<img src="{{asset('images/Scroll Group 10@2x.png')}}" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-lg-6 bg-1 partner-p">
										<div class="clients_title">الشركه الدوليه للاسمده الصناعيه والطبيعيه</div>
										<div class="clients_text">
											خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في
											الأدب اللاتيني الكلاسيكي منذ العام 45 قبل الميلاد، مما يجعله أكثر من 2000
											عام في القدم. قام البروفيسور "ريتشارد ماك لينتوك" (Richard McClintock) وهو
											بروفيسور اللغة اللاتينية في جامعة هامبدن-سيدني في فيرجينيا بالبحث عن أصول
											كلمة لاتينية غامضة في نص لوريم إيبسوم وهي "consectetur"، وخلال تتبعه لهذه
											الكلمة في الأدب اللاتيني اكتشف المصدر الغير قابل للشك. فلقد اتضح أن كلمات نص
											لوريم إيبسوم تأتي
										</div>
										<div class="clients_btn"><a href="" class="btn hero-btn" tabindex="0">المزيد</a>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="clients_img">
											<img src="{{asset('images/Scroll Group 5@2x.png')}}" alt="">
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
			<div class="bottom-leaf-sec">
				<img src="{{asset('images/Handdrawn Tropical Leaf2.svg')}}" alt="">
			</div>
		</section>

		<div class="dont-delete">
			<span class="custom_dropdown_placeholder clc"></span>
			<ul class="custom_list clc"></ul>
		</div>




@endsection
