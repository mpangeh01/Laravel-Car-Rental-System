<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Contact</title>

        @include('home.css')

        <style>

            .elser{

                text-align: center;
            }
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
            @include('home.header')z
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
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_06.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">Contact Us</h1>
					</div>
				</div>
				<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
					<div class="container">
						<ul class="ul_li clearfix">
							<li><a href="/">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->



            			<!-- google_map_section - start
			==================================================-->
			<div class="google_map_section clearfix" data-aos="fade-up" data-aos-delay="100">
				<div id="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="12" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia." data-mlat="40.701083" data-mlon="-74.1522848">
				</div>
			</div>
			            <!--google_map_section - end
			================================================== -->


			<!-- contact_section - start
			================================================== -->
			<section class="contact_section clearfix">
				<div class="container">
					<div class="contact_details_wrap text-white" data-bg-color="#1F2B3E" data-aos="fade-up" data-aos-delay="100">
						<div class="row justify-content-lg-between">
							<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
								<div class="image_area">
									<div class="brand_logo mb_15">

									</div>

									<p class="mb_30">
										Send us your queries but the chances are that we are busy mate
									</p>

								</div>
							</div>

							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<div class="content_area">
									<h3 class="item_title text-white mb_30">Contact Details:</h3>
									<ul class="ul_li_block mb_30 clearfix">
										<li>
											<i class="fas fa-map-marker-alt"></i>
											Tiyende Pamodzi room 25
										</li>
										<li><i class="fas fa-clock"></i> WH: 8:00am - 9:30pm</li>
										<li><i class="fas fa-phone"></i> +260 962 743 326</li>
										<li><i class="fas fa-envelope"></i> mpangehlwanga99@gmail.com</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- contact_section - end
			================================================== -->


			<!-- contact_form_section - start
			================================================== -->
			<section class="contact_form_section sec_ptb_100 clearfix">
				<div class="container">

					<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text mb-0">
							<span>Send Us a Message</span>
						</h2>
					</div>

                    @if (Route::has('login'))
                    @auth
					<form id="contact_form" action="{{ url('contact_us_form', $user-> id) }}" method="POST">

                        @csrf
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="100">
									<input type="text" name="firstname" placeholder="First Name" value="{{ $user->f_name }}" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="200">
									<input type="text" name="lastname" placeholder="Last Name" value="{{ $user->l_name }}" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="300">
									<input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="400">
									<input type="tel" name="phone" placeholder="Phone Number" value="{{ $user->phone }}" required>
								</div>
							</div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="400">
									<input type="text" name="subject" placeholder="Subject"  required>
								</div>
							</div>
						</div>
						<div class="form_item" data-aos="fade-up" data-aos-delay="500">
							<textarea name="message" placeholder="Leave Your Message" required></textarea>
						</div>

                        @if(session()->has('message'))

                        <div class="alert alert-success">

                            {{ session()-> get('message') }}
                        </div>
                        @endif
						<div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="600">
							<button type="submit" value="submit" class="custom_btn btn_width bg_default_red text-uppercase">Send a Message <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
						</div>

                        @else
                        <div data-aos="fade-up" data-aos-delay="100" class="elser">
                            <p><i class="fas fa-info-circle mr-1"></i> You must <a href="{{ route('login') }}">Log In</a>  or <a href="{{ route('register') }}">Register</a> to contact us.</p>
                        </div>
                        @endauth
                        @endif
					</form>

				</div>
			</section>
			<!-- contact_form_section - end
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
