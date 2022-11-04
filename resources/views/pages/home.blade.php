<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Car Rental System</title>

        @include('home.css')

        <style>

        </style>
	</head>


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
		<main class="mt-0">


			<!-- mobile menu - start
			================================================== -->

            @include('home.mobile_menu')
			<!-- mobile menu - end
			================================================== -->


			<!-- slider_section - start
			================================================== -->
			<section class="slider_section text-white text-center position-relative clearfix">

                @foreach ($slider_car as $slider_car)


                <div class="main_slider clearfix">
					<div class="item has_overlay d-flex align-items-center" data-bg-image="cars/{{ $slider_car-> slider_car -> image}}">
						<div class="overlay"></div>
						<div class="container">

							<div class="row justify-content-center">
								<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="slider_content text-center">
										<h3 class="text-white text-uppercase" data-animation="fadeInUp" data-delay=".3s">{{ $slider_car-> slider_car -> model}}</h3>
										<p data-animation="fadeInUp" data-delay=".5s">
											Transmission: {{ $slider_car-> slider_car -> transmission }}  Fuel Type: {{ $slider_car-> slider_car -> fuel_type}}  Color:{{ $slider_car-> slider_car -> color}}
										</p>
										<div class="abtn_wrap clearfix" data-animation="fadeInUp" data-delay=".7s">
											<a class="custom_btn bg_default_red btn_width text-uppercase" href="{{ url('/car_details', $slider_car-> slider_car -> id) }}">Book Now <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    @endforeach



			</section>
			<!-- slider_section - end
			================================================== -->


			<!-- search_section - start
			================================================== -->
			<section class="search_section clearfix">
				<div class="container">
					<div class="advance_search_form2" data-bg-color="#161829" data-aos="fade-up" data-aos-delay="100">

                        <form action="{{ url('search_car') }}" method="GET">


							<div class="row align-items-end">
			    				<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
									<div class="form_item">
										<h4 class="input_title text-white">Search For a Car</h4>
										<div class="position-relative">
											<input id="location_two" type="text" name="search" placeholder="write car name" required>
                                            <label for="location_two" class="input_icon"><i class="fas fa-search"></i></label>
										</div>
									</div>
								</div>



								<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
									<button type="submit" class="custom_btn bg_default_red text-uppercase">Find A Car <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</section>
			<!-- search_section - end
			================================================== -->


			<!-- feature_section - start
			================================================== -->
			<section class="feature_section sec_ptb_150 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
							<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
								<h2 class="title_text mb_15">
									<span>Featured Vehicles</span>
								</h2>
								<p class="mb-0">
								Pick your favourite car from the variety of our featured cars
                                </p>
							</div>
						</div>
					</div>

					<ul class="button-group filters-button-group ul_li_center mb_30 clearfix" data-aos="fade-up" data-aos-delay="300">
						<li><button class="button active" data-filter="*">All</button></li>
						<li><button class="button" data-filter=".Sedan">Sedan</button></li>
						<li><button class="button" data-filter=".Sports">Sports</button></li>
						<li><button class="button" data-filter=".Luxury">Luxury</button></li>
                        <li><button class="button" data-filter=".PickUpTruck">Pick up truck</button></li>
					</ul>







                    <div class="feature_vehicle_filter element-grid clearfix">

                        @foreach ($car as $car)




                            <div class="element-item {{ $car -> featured_car -> category->cat_name }} " data-category="{{ $car->featured_car-> category->cat_name}}">

                                <div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">

                                    <h3 class="item_title mb-0">
                                        <a href="{{ url('car_details', $car->featured_car-> id) }}">
                                            {{ $car-> featured_car-> model}}
                                        </a>
                                    </h3>

                                    <div class="item_image position-relative">
                                        <a class="image_wrap" href="{{ url('car_details', $car->featured_car-> id) }}">
                                            <img src="cars/{{ $car ->featured_car-> image }}" alt="image_not_found">
                                        </a>
                                        <span class="item_price bg_default_blue">K{{ $car->featured_car->daily_price }}/Day</span>
                                    </div>

                                    <ul class="info_list ul_li_center clearfix">
                                        <li>{{ $car->featured_car-> category->cat_name }}</li>
                                        <li>{{ $car->featured_car->transmission }}</li>
                                        <li>{{ $car->featured_car-> seat_num  }} Passengers</li>
                                        <li>{{ $car->featured_car -> fuel_type }}</li>
                                    </ul>
                                </div>
                            </div>

                        @endforeach



                    </div>


					<div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="100">
						<a class="custom_btn bg_default_red btn_width text-uppercase" href="{{ url('/showroom') }}">Book A Car <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
					</div>

				</div>
			</section>
			<!-- feature_section - end
			================================================== -->


			<!-- service_section - start
			================================================== -->
			<section class="service_section sec_ptb_150 pb-0 mb_100 text-white clearfix" data-bg-gradient="linear-gradient(0deg, #0C0C0F, #292D45)">
				<div class="container">

					<div class="section_title mb_30 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text text-white mb-0">
							<span>Why Used</span>
						</h2>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
								<div class="item_icon">
									<i class="far fa-shield-alt"></i>
								</div>
								<h3 class="item_title text-white">Secured Payment Guarantee</h3>
								<p class="mb-0">
									we use paypal which is safe, secure and reliable.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="300">
								<div class="item_icon">
									<i class="fal fa-headset"></i>
								</div>
								<h3 class="item_title text-white">Help Center & Support 24/7</h3>
								<p class="mb-0">
									we have a swift and reliable customer service best suited for our clients.
								</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="500">
								<div class="item_icon">
									<i class="far fa-shield-alt"></i>
								</div>
								<h3 class="item_title text-white">Booking any Class Vehicles</h3>
								<p class="mb-0">
									we have cars best suited for any event or function of your choice and needs.
								</p>
							</div>
						</div>

						<!--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="100">
								<div class="item_icon">
									<i class="fas fa-briefcase"></i>
								</div>
								<h3 class="item_title text-white">Corporate and Business Services</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>-->

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
							<div class="service_primary text-center text-white" data-aos="fade-up" data-aos-delay="500">
								<div class="item_icon">
									<i class="fas fa-gem"></i>
								</div>
								<h3 class="item_title text-white">Limousine and Chauffeur Hire</h3>
								<p class="mb-0">
									Vestibulum at ultrices elit. Maecenas faucibus vulputate vestibulum
								</p>
							</div>
						</div>-->
					</div>

					<div class="feature_carousel_wrap position-relative clearfix">
                        <div class="slideshow1_slider" data-aos="fade-up" data-aos-delay="100">

                        @foreach ($below as $slider_car)



							<div class="item">
								<div class="feature_fullimage">
									<img src="cars/{{ $slider_car-> slider_car-> image }}" alt="image_not_found">
									<div class="item_content text-white">
										<span class="item_price bg_default_blue">K{{ $slider_car-> slider_car-> daily_price }}/Day</span>
										<h3 class="item_title text-white">{{ $slider_car-> slider_car-> model }}  </h3>
										<a class="text_btn text-uppercase" href="{{ url('/car_details', $slider_car-> slider_car ->id) }}"><span>Book car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
									</div>
								</div>
							</div>






                        @endforeach
                    </div>
					</div>

				</div>
			</section>
			<!-- service_section - end
			================================================== -->


			<!-- blog_section - start
			================================================== -->
			<section class="blog_section sec_ptb_150 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-center">



						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="newsletter_form1">
								<h3 class="form_title mb_30" data-aos="fade-up" data-aos-delay="100">Subscribe:</h3>
								<p class="mb_30" data-aos="fade-up" data-aos-delay="300">
									Enter your email and subscribe to our newsletter
								</p>
								<ul class="primary_social_links ul_li mb_30 clearfix" data-aos="fade-up" data-aos-delay="500">
									<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
								</ul>
								<div class="row" data-aos="fade-up" data-aos-delay="700">
									<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
										<form action="{{ url('newsletter') }}" method="POST">
											<div class="form_item mb-0">
												<input type="email" name="email" placeholder="Enter your e-mail">
											</div>
										</form>
									</div>
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<button type="submit" class="custom_btn bg_default_red text-uppercase w-100 d-block">Subscribe<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
									</div>
                                    <br>
                                    @if(session()->has('message'))

                                    <div class="alert alert-success">

                                        {{ session()-> get('message') }}
                                    </div>
                                    @endif
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- blog_section - end
			================================================== -->


			<hr class="m-0" data-aos="fade-up" data-aos-delay="100">


			<!-- testimonial_section - start
			================================================== -->
			<section class="testimonial_section sec_ptb_150 clearfix">
				<div class="container">

					<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text mb-0">
							<span>What Clients Say about Us</span>
						</h2>
					</div>

					<div class="testimonial_carousel_wrap position-relative">
						<div class="testimonial_carousel" data-slick='{"dots": false}' data-aos="fade-up" data-aos-delay="300">


                            @foreach ($reviews as $review)


                                <div class="item">
							    	<div class="testimonial_item2 text-center">
							    		<p class="mb_30">
							    			“{{ $review->review }}”
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
