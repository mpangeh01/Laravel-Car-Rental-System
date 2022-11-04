<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>About Us</title>

        @include('home.css')
	<body>


		<!-- backtotop - start -->
		<div id="thetop"></div>
		<div class="backtotop">
			<a href="#" class="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>
		<!-- backtotop - end -->


		<!-- header_section - start
		================================================== -->
            @include('home.header')
		<!-- header_section - end
		================================================== -->


		<!-- main body - start
		================================================== -->
		<main>


			<!-- mobile menu - start
			================================================== -->
                @include('home.mobile_menu')
			<!-- mobile menu - end
			================================================== -->


			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section text-center clearfix">
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_05.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">About Us</h1>
					</div>
				</div>
				<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
					<div class="container">
						<ul class="ul_li clearfix">
							<li><a href="index.html">Home</a></li>
							<li>About</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- service_section - start
			================================================== -->
			<section class="service_section sec_ptb_150 clearfix">
				<div class="container">

					<div class="section_title mb_30 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text mb-0">
							<span>Why Used?</span>
						</h2>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center" data-aos="fade-up" data-aos-delay="100">
								<div class="item_icon">
									<i class="far fa-shield-alt"></i>
								</div>
								<h3 class="item_title">Secured Payment Guarantee</h3>
								<p class="mb-0">
									we use paypal which is safe, secure and reliable.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center" data-aos="fade-up" data-aos-delay="300">
								<div class="item_icon">
									<i class="fal fa-headset"></i>
								</div>
								<h3 class="item_title">Help Center & Support 24/7</h3>
								<p class="mb-0">
									we have a swift and reliable customer service best suited for our clients.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center" data-aos="fade-up" data-aos-delay="500">
								<div class="item_icon">
									<i class="far fa-shield-alt"></i>
								</div>
								<h3 class="item_title">Booking any Class Vehicles</h3>
								<p class="mb-0">
									we have cars best suited for any event or function of your choice and needs
								</p>
							</div>
						</div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
								<div class="item_icon">
									<i class="fas fa-user-plus"></i>
								</div>
								<h3 class="item_title text-white">Insurance Services</h3>
								<p class="mb-0">
									Our cars are insured by the best, well-known and reputable insurance companies.
								</p>
							</div>
						</div>

						<!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center" data-aos="fade-up" data-aos-delay="100">
								<div class="item_icon">
									<i class="fas fa-briefcase"></i>
								</div>
								<h3 class="item_title">Corporate and Business Services</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center" data-aos="fade-up" data-aos-delay="300">
								<div class="item_icon">
									<i class="fas fa-user-plus"></i>
								</div>
								<h3 class="item_title">Car Sharing Options</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center" data-aos="fade-up" data-aos-delay="500">
								<div class="item_icon">
									<i class="fas fa-gem"></i>
								</div>
								<h3 class="item_title">Limousine and Chauffeur Hire</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>-->
					</div>

				</div>
			</section>
			<!-- service_section - end
			================================================== -->


			<!-- gallery_section - start
			================================================== -->
			<section class="gallery_section clearfix">
				<div class="updown_style_wrap minus_bottom">


					<div class="updown_style">

						<div class="gallery_fullimage" data-aos="fade-up" data-aos-delay="100">
							<img src="cars/{{ $top_left->featured_car->image }}" alt="image_not_found">
							<div class="item_content text-white">
								<h3 class="item_title text-white">{{ $top_left->featured_car->model }}</h3>
								<p>
									Database management System
								</p>
								<a class="text_btn text-uppercase" href="{{ url('showroom') }}"><span>Find A Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
							</div>
						</div>

						<div class="gallery_fullimage" data-aos="fade-up" data-aos-delay="300">
							<img src="cars/{{ $top_right->featured_car->image }}" alt="image_not_found">
							<div class="item_content text-white">
								<h3 class="item_title text-white">{{ $top_right->featured_car->model }}</h3>
								<p>
									Ant man and the wasp quantamania
								</p>
								<a class="text_btn text-uppercase" href="{{ url('showroom') }}"><span>Find A Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
							</div>
						</div>
					</div>

					<div class="updown_style">


						<div class="gallery_fullimage" data-aos="fade-up" data-aos-delay="100">
							<img src="cars/{{ $bottom_left->featured_car->image }}" alt="image_not_found">
							<div class="item_content text-white">
								<h3 class="item_title text-white">{{ $bottom_left->featured_car->model }}</h3>
								<p>
									Koseni hounarable
								</p>
								<a class="text_btn text-uppercase" href="{{ url('showroom') }}"><span>Find A Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
							</div>
						</div>

						<div class="gallery_fullimage" data-aos="fade-up" data-aos-delay="300">
							<img src="cars/{{ $bottom_right->featured_car->image }}" alt="image_not_found">
							<div class="item_content text-white">
								<h3 class="item_title text-white">{{ $bottom_right->featured_car->model }}</h3>
                                <p>
									Yes Pizza is nice, but have you tried a ka cold black label on a hot day
								</p>
								<a class="text_btn text-uppercase" href="{{ url('showroom') }}"><span>Find A Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- gallery_section - end
			================================================== -->


			<!-- funfact_section - start
			================================================== -->
			<section class="funfact_section sec_ptb_150 clearfix" data-bg-gradient="linear-gradient(0deg, #0C0C0F, #292D45)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="funfact_item text-center text-white" data-aos="fade-up" data-aos-delay="100">
								<h3 class="counter_text text-white mb-0"><span class="counter">500</span>+</h3>
								<small class="line bg_default_red"></small>
								<p class="item_title mb-0">Country wide Rent Stations</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="funfact_item text-center text-white" data-aos="fade-up" data-aos-delay="300">
								<h3 class="counter_text text-white mb-0"><span class="counter">3500</span>+</h3>
								<small class="line bg_default_red"></small>
								<p class="item_title mb-0">Cars of various categories</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="funfact_item text-center text-white" data-aos="fade-up" data-aos-delay="500">
								<h3 class="counter_text text-white mb-0"><span class="counter">180</span>+</h3>
								<small class="line bg_default_red"></small>
								<p class="item_title mb-0">Business Partners</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- funfact_section - end
			================================================== -->


			<!-- testimonial_section - start
			================================================== -->
			<section class="testimonial_section sec_ptb_150 clearfix">
				<div class="container">

					<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text mb-0">
							<span>Recent Reviews</span>
						</h2>
					</div>

					<div class="testimonial_carousel_wrap position-relative">
						<div class="testimonial_carousel" data-slick='{"dots": false}' data-aos="fade-up" data-aos-delay="300">

                            @foreach ($reviews as $review)


                                <div class="item">
							    	<div class="testimonial_item2 text-center">
							    		<p class="mb_30">
							    			“{{ $review-> review }}”
							    		</p>
							    		<div class="admin_info">

							    			<h4 class="admin_name">{{ $review->user->f_name }} {{ $review->user->l_name }}</h4>
							    			<ul class="rating_star ul_li_center clearfix">

                                                @for ($i = 0; $i < $review->rating; $i++)

                                                    <li class="active"><i class="fas fa-star"></i></li>
                                                @endfor

							    			</ul>
							    		</div>
							    	</div>
							    </div>
                            @endforeach
						</div>

						<div class="carousel_nav position_ycenter">
							<button type="button" class="ts_left_arrow"><i class="fal fa-angle-left"></i></button>
							<button type="button" class="ts_right_arrow"><i class="fal fa-angle-right"></i></button>
						</div>
					</div>

				</div>
			</section>
			<!-- testimonial_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->


		<!-- footer_section - start
		================================================== -->

        @include('home.footer')
		<!-- footer_section - end
		================================================== -->

        @include('home.js')
	</body>
</html>
