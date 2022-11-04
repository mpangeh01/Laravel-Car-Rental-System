<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Reservation</title>

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
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_03.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">Reservation</h1>
					</div>
				</div>
				<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
					<div class="container">
						<ul class="ul_li clearfix">
							<li><a href="/">Home</a></li>
							<li><a href="{{ url('showroom') }}">Our Cars</a></li>
							<li>Reservation</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- reservation_section - start
			================================================== -->
			<section class="reservation_section sec_ptb_100 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">


						<div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
							<div class="feature_vehicle_item mt-0 ml-0" data-aos="fade-up" data-aos-delay="100">




                                <h3 class="item_title mb-0">{{ $car-> model }}</h3>
								<div class="item_image position-relative">
										<img src="cars/{{ $car-> image }}" alt="image_not_found">

									<span class="item_price bg_default_blue">K{{ $car-> daily_price }}/Day</span>
								</div>
								<ul class="info_list ul_li_center clearfix">
									<li>{{ $car-> category->cat_name }}</li>

									<li>{{ $car-> seat_num }} Passengers</li>
									<li>{{ $car-> fuel_type }}</li>
								</ul>

							</div>
						</div>

						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
							<div class="reservation_form">
								<form action="{{ url('/make_reservation', $car-> id) }}" method="POST">

                                    @csrf
									<div class="row">
										<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
											<div class="form_item" data-aos="fade-up" data-aos-delay="100">

												<h4 class="input_title">Pick Up Location</h4>
												<div class="position-relative">
													<input id="location_two" type="text" name="pick_up_location" value="{{ $car -> district->name }}" readonly>

													<label for="location_two" class="input_icon"><i class="fas fa-map-marker-alt"></i></label>
												</div>
											</div>
										</div>

										<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="form_item" data-aos="fade-u" data-aos-delay="200">
												<h4 class="input_title">Pick A Date</h4>
												<input type="date" name="pick_up_date" required>
											</div>
										</div>


										<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
											<div class="form_item" data-aos="fade-up" data-aos-delay="400">
												<h4 class="input_title">Return Location</h4>
												<div class="position-relative">
													<!--<input id="location_three" type="text" name="return_location" placeholder="Within pick up province" required>
													<label for="location_three" class="input_icon"><i class="fas fa-map-marker-alt"></i></label>-->
                                                    <select name="district" id="" class="text_color" required ="">

                                                        <option value="" selected>Choose District</option>

                                                        @foreach ($districts as $district)

                                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                        @endforeach



                                                    </select>
												</div>

											</div>
										</div>

										<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
											<div class="form_item" data-aos="fade-up" data-aos-delay="500">
												<h4 class="input_title">Pick Return Date</h4>
												<input type="date" name="return_date" required>
											</div>
										</div>

									</div>

									<hr class="mt-0" data-aos="fade-up" data-aos-delay="700">

                                    <br><br><br><br><br>

									<hr class="mt-0" data-aos="fade-up" data-aos-delay="100">

                                    @if (Route::has('login'))

                                    @auth

                                    <div class="reservation_customer_details">
										<h4 class="input_title" data-aos="fade-up" data-aos-delay="100">Customer Details:</h4>

										<div class="row">
											<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
												<div class="form_item" data-aos="fade-up" data-aos-delay="400">
													<input type="text" name="firstname" placeholder="First Name" value="{{ $user->f_name }}" required>
												</div>
											</div>

											<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
												<div class="form_item" data-aos="fade-up" data-aos-delay="500">
													<input type="text" name="lastname" placeholder="Last Name" value="{{ $user->l_name }}" required>
												</div>
											</div>

											<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
												<div class="form_item" data-aos="fade-up" data-aos-delay="600">
													<input type="text" name="email" placeholder="E-mail adress" value="{{ $user->email }}" required>
												</div>
											</div>

											<div class="col-lg-6 col-md-12 col-xs-12 col-xs-12">
												<div class="form_item" data-aos="fade-up" data-aos-delay="700">
													<input type="text" name="phone" placeholder="Phone Number" value="{{ $user->phone }}" required>
												</div>
											</div>
										</div>

										<div class="form_item" data-aos="fade-up" data-aos-delay="800">
											<textarea name="information" placeholder="Additional information (Optional)"></textarea>
										</div>

										<div data-aos="fade-up" data-aos-delay="100">
											<i class="fas fa-info-circle mr-1"></i> You must be at least 21 years old to rent this car mate.
										</div>

										<hr data-aos="fade-up" data-aos-delay="200">

										<div class="row align-items-center justify-content-lg-between">
											<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
												<div class="checkbox_input mb-0">
													<label for="accept"><input type="checkbox" name="checkbox" id="accept" required=""> I accept all information</label>
												</div>
											</div>
											<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
												<button type="submit" class="custom_btn bg_default_red text-uppercase">proceed to checkout <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
											</div>
										</div>
									</div>

                                    @else

                                        <div data-aos="fade-up" data-aos-delay="100">
											<p><i class="fas fa-info-circle mr-1"></i> You must <a href="{{ route('login') }}">Log In</a>  or <a href="{{ route('register') }}">Register</a> to make a reservation for a car.</p>
										</div>
                                    @endauth
                                @endif

								</form>
							</div>
						</div>

					</div>
				</div>
			</section>
			<!-- reservation_section - end
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
