<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Car Details</title>

        <base href="/public">
        @include('home.css')

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
		<main>


			<!-- mobile menu - start
			================================================== -->
                @include('home.mobile_menu')
			<!-- mobile menu - end
			================================================== -->


			<!-- breadcrumb_section - start
			================================================== -->
			<section class="breadcrumb_section text-center clearfix">
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_02.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">Car details</h1>
					</div>
				</div>
				<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
					<div class="container">
						<ul class="ul_li clearfix">
							<li><a href="/">Home</a></li>
							<li><a href="{{ url('showroom') }}">Our Cars</a></li>
							<li>Car Details</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- details_section - start
			================================================== -->
			<div class="details_section sec_ptb_100 pb-0 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
							<aside class="filter_sidebar sidebar_section" data-bg-color="#F2F2F2">
								<div class="sidebar_header" data-bg-gradient="linear-gradient(90deg, #0C0C0F, #292D45)">
									<h3 class="text-white mb-0">Additional Details:</h3>
								</div>
								<div class="sb_widget">





										<div class="sb_widget sb_additional_options" data-aos="fade-up" data-aos-delay="100">
											<h4 class="input_title"></h4>

											<div class="checkbox_input">

                                                <h1>Insurance:</h1>
                                                <label> Insuring Company: <span>{{ $car->insure_company }}</span></label>
                                                <label> Insurance Type: <span>{{ $car->insure_type }}</span></label><br>
                                                <label> Insurance Quarter: <span>{{ $car -> insure_quarter }}</span></label><br>
                                                <label> Date Insured: <span>{{ $car->insure_create }}</span></label><br>
                                                <label> Expiry Date: <span>{{ $car-> insure_expire }}</span></label><br>

											</div>


											<div class="checkbox_input">
												<h1>Car:</h1>
                                                <label> Plate Number: <span>{{ $car-> plate_num}}</span></label><br>
                                                <label> Car State: <span>{{ $car-> state }}</span></label><br>
                                                <label> Last Serviced : <span>{{ $car-> service}}</span></label>

                                                @if ($car-> state == 'Hired')


                                                    <label> Return Date: <span>{{ $car->reservation->return_date }}</span></label>
                                                @endif
											</div>


										</div>

										<hr data-aos="fade-up" data-aos-delay="100">



								</div>
							</aside>
						</div>


						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">

							<div class="car_choose_carousel mb_30 clearfix">


								<div class="thumbnail_carousel" data-aos="fade-up" data-aos-delay="100">


                                    <div class="item">
										<div class="item_head">
											<h4 class="item_title mb-0">{{ $car->model }}</h4>
											<ul class="review_text ul_li_right clearfix">

											</ul>
										</div>

										<img src="cars/{{ $car->image }}" alt="image_not_found">

                                        @if ($car->state == 'Hired')

                                        <img src="hire/hired.jpg" alt="image_not_found">
                                        @endif

										<ul class="btns_group ul_li_center clearfix">

											<li>
												<span class="custom_btn btn_width bg_default_blue"> K{{ $car->daily_price }}/Day</span>
											</li>

                                            @if (Route::has('login'))

                                                @auth

                                                    @if ($user->acc_status == 'Unverified')

                                                    @elseif ($car->state == 'Hired')

                                                    @else

                                                    <li>
                                                        <a href="{{ url('book_car', $car-> id) }}" class="custom_btn btn_width bg_default_red text-uppercase">Book A Car <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
                                                    </li>
                                                    @endif
                                                @else
                                                @endauth
                                            @endif

										</ul>
									</div>


                                    <div class="item">
										<div class="item_head">
											<h4 class="item_title mb-0">{{ $car->model }}</h4>
											<ul class="review_text ul_li_right clearfix">
												<li class="text-right">

											</ul>
										</div>

										<img src="image2/{{ $car-> image2 }}" alt="image_not_found">
                                        @if ($car->state == 'Hired')

                                        <img src="hire/hired.jpg" alt="image_not_found">
                                        @endif

										<ul class="btns_group ul_li_center clearfix">
											<li>
												<span class="custom_btn btn_width bg_default_blue"> K{{ $car->daily_price }}/Day</span>
											</li>

                                            @if (Route::has('login'))

                                                @auth

                                                    @if ($user->acc_status == 'Unverified')

                                                    @elseif ($car->state == 'Hired')

                                                    @else

                                                    <li>
                                                        <a href="{{ url('book_car', $car-> id) }}" class="custom_btn btn_width bg_default_red text-uppercase">Book A Car <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
                                                    </li>
                                                    @endif
                                                @else
                                                @endauth
                                            @endif
										</ul>
									</div>


                                    <div class="item">
										<div class="item_head">
											<h4 class="item_title mb-0">{{ $car->model }}</h4>
											<ul class="review_text ul_li_right clearfix">
												<li class="text-right">


											</ul>
										</div>
										<img src="image3/{{ $car-> image3 }}" alt="image_not_found">

                                        @if ($car->state == 'Hired')

                                        <img src="hire/hired.jpg" alt="image_not_found">
                                        @endif

										<ul class="btns_group ul_li_center clearfix">
											<li>
												<span class="custom_btn btn_width bg_default_blue"> K{{ $car->daily_price }}/Day</span>
											</li>

                                            @if (Route::has('login'))

                                                @auth

                                                    @if ($user->acc_status == 'Unverified')

                                                    @elseif ($car->state == 'Hired')

                                                    @else

                                                    <li>
                                                        <a href="{{ url('book_car', $car-> id) }}" class="custom_btn btn_width bg_default_red text-uppercase">Book A Car <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
                                                    </li>
                                                    @endif
                                                @else
                                                @endauth
                                            @endif
										</ul>
									</div>


                                    <div class="item">
										<div class="item_head">
											<h4 class="item_title mb-0">{{ $car->model }}</h4>
											<ul class="review_text ul_li_right clearfix">
												<li class="text-right">


											</ul>
										</div>
										<img src="image4/{{ $car-> image4 }}" alt="image_not_found">

                                        @if ($car->state == 'Hired')

                                        <img src="hire/hired.jpg" alt="image_not_found">
                                        @endif

										<ul class="btns_group ul_li_center clearfix">
											<li>
												<span class="custom_btn btn_width bg_default_blue"> K{{ $car->daily_price }}/Day</span>
											</li>

                                            @if (Route::has('login'))

                                                @auth

                                                    @if ($user->acc_status == 'Unverified')

                                                    @elseif ($car->state == 'Hired')

                                                    @else

                                                    <li>
                                                        <a href="{{ url('book_car', $car-> id) }}" class="custom_btn btn_width bg_default_red text-uppercase">Book A Car <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
                                                    </li>
                                                    @endif
                                                @else
                                                @endauth
                                            @endif
										</ul>
									</div>

                                    <div class="item">
										<div class="item_head">
											<h4 class="item_title mb-0">{{ $car->model }}</h4>
											<ul class="review_text ul_li_right clearfix">
												<li class="text-right">

											</ul>
										</div>
										<img src="image5/{{ $car-> image5 }}" alt="image_not_found">

                                        @if ($car->state == 'Hired')

                                        <img src="hire/hired.jpg" alt="image_not_found">
                                        @endif

										<ul class="btns_group ul_li_center clearfix">
											<li>
												<span class="custom_btn btn_width bg_default_blue"> K{{ $car->daily_price }}/Day</span>
											</li>

                                            @if (Route::has('login'))

                                                @auth

                                                    @if ($user->acc_status == 'Unverified')

                                                    @elseif ($car->state == 'Hired')

                                                    @else

                                                    <li>
                                                        <a href="{{ url('book_car', $car-> id) }}" class="custom_btn btn_width bg_default_red text-uppercase">Book A Car <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
                                                    </li>
                                                    @endif
                                                @else
                                                @endauth
                                            @endif


										</ul>
									</div>


								</div>


								<div class="thumbnail_carousel_nav" data-aos="fade-up" data-aos-delay="100">

                                    <div class="item">
										<img src="cars/{{ $car->image }}" alt="image_not_found">

                                    </div>

                                     <div class="item">
										<img src="image2/{{ $car-> image2 }}" alt="image_not_found">
									</div>

                                    <div class="item">
										<img src="image3/{{ $car-> image3 }}" alt="image_not_found">
									</div>

                                    <div class="item">
										<img src="image4/{{ $car-> image4 }}" alt="image_not_found">
									</div>

									<div class="item">
										<img src="image5/{{ $car-> image5 }}" alt="image_not_found">
									</div>

									</div>
								</div>
							</div>

							<div class="car_choose_content">
								<ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="100">
									<li><strong>Passengers:</strong> {{ $car-> seat_num }}</li>
									<li><strong>Fuel Type:</strong> {{ $car-> fuel_type }}</li>
									<li><strong>Options:</strong> Cruise Control, MP3 player, Automatic air conditioning, Wifi, GPS Navigation</li>
								</ul>
								<div data-aos="fade-up" data-aos-delay="200">
									<i class="fas fa-info-circle mr-1"></i> Terms and conditions
								</div>

								<hr data-aos="fade-up" data-aos-delay="300">

								<div class="rent_details_info">
									<h4 class="list_title" data-aos="fade-up" data-aos-delay="100">Rent Details:</h4>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="200">
												<li><i class="fas fa-id-card"></i> Payment Guarantee</li>
												<li><i class="fas fa-business-time"></i> Protect Your Rental</li>
												<li><i class="fas fa-business-time"></i> Ticket on Dashboard</li>
											</ul>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="300">
												<li><i class="fas fa-user-friends"></i> Car Sharing</li>
												<li><i class="fas fa-language"></i> Multilanguage Support</li>

											</ul>
										</div>
									</div>
								</div>

								<hr data-aos="fade-up" data-aos-delay="100">

								<div class="testimonial_contants_wrap">
									<!--<h3 class="item_title mb_30" data-aos="fade-up" data-aos-delay="100">Recent Reviews:</h3>

									<div class="testimonial_item clearfix">
										<div class="admin_info_wrap clearfix" data-aos="fade-up" data-aos-delay="200">
											<div class="admin_image">
												<img src="assets/images/meta/img_01.png" alt="image_not_found">
											</div>
											<div class="admin_content">
												<h4 class="admin_name">Donovan Nordtrom</h4>
												<ul class="rating_star ul_li clearfix">
													<li class="active"><i class="fas fa-star"></i></li>
													<li class="active"><i class="fas fa-star"></i></li>
													<li class="active"><i class="fas fa-star"></i></li>
													<li class="active"><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
										</div>
										<p class="mb-0" data-aos="fade-up" data-aos-delay="300">
											“Ut id lobortis eros, sed finibus dui. Cras eget purus lacus. Suspendisse sodales massa quis turpis ultrices ultricies. Cras euismod eros at vehicula sagittis. Suspendisse condimentum tortor nec enim pellentesque feugiat. Nulla tempor urna vitae sapien iaculis, auctor condimentum enim auctor”
										</p>
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="review_image" data-aos="fade-up" data-aos-delay="100">
													<img src="assets/images/testimonial/img_10.jpg" alt="image_not_found">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="review_image" data-aos="fade-up" data-aos-delay="200">
													<img src="assets/images/testimonial/img_11.jpg" alt="image_not_found">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="review_image" data-aos="fade-up" data-aos-delay="300">
													<img src="assets/images/testimonial/img_12.jpg" alt="image_not_found">
												</div>
											</div>
										</div>
									</div>

									<div class="testimonial_item clearfix">
										<div class="admin_info_wrap clearfix" data-aos="fade-up" data-aos-delay="100">
											<div class="admin_image">
												<img src="assets/images/meta/img_01.png" alt="image_not_found">
											</div>
											<div class="admin_content">
												<h4 class="admin_name">Elisabeth Summers</h4>
												<ul class="rating_star ul_li clearfix">
													<li class="active"><i class="fas fa-star"></i></li>
													<li class="active"><i class="fas fa-star"></i></li>
													<li class="active"><i class="fas fa-star"></i></li>
													<li class="active"><i class="fas fa-star"></i></li>
													<li><i class="fas fa-star"></i></li>
												</ul>
											</div>
										</div>
										<p class="mb-0" data-aos="fade-up" data-aos-delay="200">
											“Ut id lobortis eros, sed finibus dui. Cras eget purus lacus. Suspendisse sodales massa quis turpis ultrices ultricies. Cras euismod eros at vehicula sagittis. Suspendisse condimentum tortor nec enim pellentesque feugiat. Nulla tempor urna vitae sapien iaculis, auctor condimentum enim auctor”
										</p>
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="review_image" data-aos="fade-up" data-aos-delay="100">
													<img src="assets/images/testimonial/img_13.jpg" alt="image_not_found">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="review_image" data-aos="fade-up" data-aos-delay="200">
													<img src="assets/images/testimonial/img_14.jpg" alt="image_not_found">
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
												<div class="review_image" data-aos="fade-up" data-aos-delay="300">
													<img src="assets/images/testimonial/img_15.jpg" alt="image_not_found">
												</div>
											</div>
										</div>
									</div>

									<div class="links_erap clearfix">
										<div class="row align-items-center justify-content-lg-between">
											<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
												<div class="abtn_wrap clearfix" data-aos="fade-up" data-aos-delay="100">
													<a class="text_btn text-uppercase" href="#!"><span>View All Reviews</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
												</div>
											</div>-->
											<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
												<ul class="primary_social_links ul_li_right clearfix" data-aos="fade-up" data-aos-delay="200">
													<li><span class="social_list_title">Follow Us:</span></li>
													<li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
													<li><a href="#!"><i class="fab fa-youtube"></i></a></li>
													<li><a href="#!"><i class="fab fa-instagram"></i></a></li>
													<li><a href="#!"><i class="fab fa-twitter"></i></a></li>
													<li><a href="#!"><i class="fas fa-envelope"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- details_section - end
			================================================== -->


			<!-- cars_section - start
			================================================== -->
			<section class="cars_section sec_ptb_100 clearfix">
				<div class="offers_car_carousel slideshow4_slider" data-aos="fade-up" data-aos-delay="100">

                    @foreach ($featured as $featured)


					    <div class="item">
					    	<div class="gallery_fullimage_2">
					    		<img src="cars/{{ $featured->featured_car->image }}" alt="image_not_found">
					    		<div class="item_content text-white">
					    			<span class="item_price bg_default_blue">K{{ $featured->featured_car->daily_price }}/Day</span>
					    			<h3 class="item_title text-white">{{ $featured->featured_car->model }}</h3>
					    			<a class="text_btn text-uppercase" href="{{ url('car_details', $featured->featured_car->id) }}"><span>Book Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
					    		</div>
					    	</div>
					    </div>

                    @endforeach
				</div>
			</section>
			<!-- cars_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->


		<!-- footer_section - start
		================================================== -->
            @include('home.footer')
		<!-- footer_section - end
		================================================== -->


		<!-- fraimwork - jquery include -->
            @include('home.js')


	</body>
</html>
