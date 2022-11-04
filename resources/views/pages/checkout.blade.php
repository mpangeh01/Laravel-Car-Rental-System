<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Checkout</title>

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
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_11.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">Checkout</h1>
					</div>
				</div>
				<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
					<div class="container">
						<ul class="ul_li clearfix">
							<li><a href="/">Home</a></li>
                            <li><a href="{{ url('book_car', $reservation-> car->id) }}">Reservation</a></li>
							<li>Checkout</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- cart_section - start
			================================================== -->
			<section class="cart_section sec_ptb_100 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-4 col-md-9 col-sm-10 col-xs-12">
							<div class="feature_vehicle_item mt-0 ml-0" data-aos="fade-up" data-aos-delay="100">
								<h3 class="item_title mb-0">
                                    {{ $reservation -> car -> model }}
								</h3>
								<div class="item_image position-relative">

										<img src="cars/{{ $reservation -> car -> image }}" alt="image_not_found">

									<span class="item_price bg_default_blue">$120/Day</span>
								</div>
								<ul class="info_list ul_li_center clearfix">

									<li>{{ $reservation -> car -> category->cat_name }}</li>
									<li>{{ $reservation -> car -> transmission }}</li>
									<li>{{ $reservation -> car -> seat_num }} Passengers</li>
									<li>{{ $reservation -> car -> fuel_type }}</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
							<div class="cart_info_content">
								<div class="row mt__30">
									<div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
										<div class="cart_address_item" data-aos="fade-up" data-aos-delay="100">
											<h4>Pick Up Location:</h4>
											<p class="mb-0"><i class="fas fa-map-marker-alt"></i> {{ $reservation -> car -> district->name }}</p>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="cart_address_item" data-aos="fade-up" data-aos-delay="200">
											<h4>Pick Up Date:</h4>
											<p class="mb-0"><i class="fas fa-calendar-alt"></i> {{ $reservation ->pick_up_date }}</p>
										</div>
									</div>


									<div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
										<div class="cart_address_item" data-aos="fade-up" data-aos-delay="400">
											<h4>Return Car Location:</h4>
											<p class="mb-0"><i class="fas fa-map-marker-alt"></i> {{ $reservation ->district->name }}</p>
										</div>
									</div>

									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
										<div class="cart_address_item" data-aos="fade-up" data-aos-delay="500">
											<h4>Return Date:</h4>
											<p class="mb-0"><i class="fas fa-calendar-alt"></i> {{ $reservation ->return_date }}</p>
										</div>
									</div>


								</div>

								<hr data-aos="fade-up" data-aos-delay="100">

								<div class="cart_offers_include">
									<h4 class="title_text mb-0" data-aos="fade-up" data-aos-delay="100">Your Offer Includes:</h4>
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<ul class="cart_info_list ul_li_block clearfix" data-aos="fade-up" data-aos-delay="300">
												<li><i class="far fa-check-circle"></i> Registration Free/ Road Tax</li>
												<li><i class="far fa-check-circle"></i> Fully Comprehensive Insurance</li>
											</ul>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<ul class="cart_info_list ul_li_block clearfix" data-aos="fade-up" data-aos-delay="500">
												<li><i class="far fa-check-circle"></i> Excess/Security deposit</li>
												<li><i class="far fa-check-circle"></i> Breakdown Assistance</li>
											</ul>
										</div>
									</div>
								</div>

								<hr data-aos="fade-up" data-aos-delay="100">

								<ul class="cart_info_list2 ul_li_block clearfix" data-aos="fade-up" data-aos-delay="100">
									<li><strong>Car rental duration:</strong> {{ $reservation -> days_num }} day (s)</li>
									<li><strong>Rental Price:</strong> K {{ $reservation -> car -> daily_price }}/day</li>
									<li><strong>Subtotal:</strong>K {{ $reservation -> car -> daily_price * $reservation -> days_num  }}</li>
								</ul>

								<hr data-aos="fade-up" data-aos-delay="100">

								<div class="rental_calltoaction">
									<form action="#">
										<!--<h4 class="title_text" data-aos="fade-up" data-aos-delay="100">Send a car rental details:</h4>
										<div data-aos="fade-up" data-aos-delay="200">
											<a class="register_btn mb_15" href="#!">LogIn or Register</a>
										</div>
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<div class="form_item" data-aos="fade-up" data-aos-delay="300">
													<input type="email" name="email" placeholder="E-mail adress">
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
												<div class="form_item" data-aos="fade-up" data-aos-delay="400">
													<input type="tel" name="phone" placeholder="Phone number">
												</div>
											</div>
										</div>-->
										<div class="checkbox_input mb-0" data-aos="fade-up" data-aos-delay="400">
											<label for="payment_checkbox"><input id="payment_checkbox" type="checkbox" required>I accept all information and Payments etc</label>
										</div>
									</form>
								</div>

								<hr data-aos="fade-up" data-aos-delay="100">

								<div class="cart_bottom_content mt__30 clearfix">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<ul class="cart_price_info ul_li_block clearfix" data-aos="fade-up" data-aos-delay="100">

												<li><span>Total:</span> K{{ $reservation -> car -> daily_price *  $reservation -> days_num }}</li>
											</ul>
										</div>



										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <form action="{{ url('paypal_checkout') }}" method="POST">

                                                @csrf

                                                <div class="abtn_wrap clearfix" data-aos="fade-up" data-aos-delay="300">

                                                    <input type="hidden" name="amount" value="{{ (int)(($reservation -> car -> daily_price *  $reservation -> days_num)/15) }}">

                                                    <!--<a type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Checkout <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>-->
                                                    <button class="custom_btn bg_default_red btn_width text-uppercase" type="submit">
                                                        Checkout
                                                        <img src="assets/images/icons/icon_01.png" alt="icon_not_found">
                                                    </button>
                                                </div>
                                            </form>

                                            <div class="abtn_wrap clearfix" data-aos="fade-up" data-aos-delay="300">
												<a class="custom_btn bg_default_red btn_width text-uppercase" onclick="return confirm('Are you sure you want to cancel this reservation?')" href="{{ url('cancel_checkout', $reservation -> id) }}">Cancel Order<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></a>
											</div>




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

					</div>
				</div>
			</section>
			<!-- cart_section - end
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
