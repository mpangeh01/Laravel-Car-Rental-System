<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Showroom</title>


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
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_13.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">Showroom</h1>
					</div>
				</div>
				<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
					<div class="container">
						<ul class="ul_li clearfix">
							<li><a href="/">Home</a></li>

							<li>Showroom</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- gallery_section - start
			================================================== -->
			<section class="gallery_section sec_ptb_100 clearfix">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
							<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
								<h2 class="title_text mb_15">
									<span>Avaialble Vehicles</span>
								</h2>
								<p class="mb-0">
									Choose from the variety of cars that we have in stock
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

					<div class="feature_vehicle_filter mb-0 element-grid clearfix">

                        @foreach ($cars as $car)


						    <div class="element-item {{ $car-> category->cat_name }} " data-category="{{ $car-> category->cat_name }}">
						    	<div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
						    		<h3 class="item_title mb-0">
						    			<a href="{{ url('car_details', $car -> id) }}">
						    				{{ $car -> model }}
						    			</a>
						    		</h3>
						    		<div class="item_image position-relative">
						    			<a class="image_wrap" href="{{ url('car_details', $car-> id) }}">
						    				<img src="cars/{{ $car-> image }}" alt="image_not_found">
						    			</a>
						    			<span class="item_price bg_default_blue">K{{ $car-> daily_price }}/Day</span>
						    		</div>
						    		<ul class="info_list ul_li_center clearfix">
						    			<li>{{ $car-> category->cat_name }}</li>
						    			<li>{{ $car-> transmission }}</li>
						    			<li>{{ $car-> seat_num }} Passengers</li>
						    			<li>{{ $car-> fuel_type }}</li>
						    		</ul>
						    	</div>
						    </div>
                        @endforeach
					</div>

                    {{ $cars->links('vendor.pagination.custom') }}


				</div>
			</section>
			<!-- gallery_section - end
			================================================== -->


			<!-- search_section - start
			================================================== -->
			<section class="search_section sec_ptb_100 clearfix" data-bg-color="#161829">
				<div class="container">
					<div class="section_title text-center mb_60">
						<h2 class="title_text text-white mb-0" data-aos="fade-up" data-aos-delay="100"><span>Find the right car for every occasion</span></h2>
					</div>

					<div class="advance_search_form2 p-0 mt-0 mb_60 shadow-none">

						<form action="{{ url('search_car') }}" method="GET">

							<div class="row align-items-end">

								<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">

									<div class="form_item" data-aos="fade-up" data-aos-delay="300">

										<h4 class="input_title text-white">Search for a car</h4>
										<div class="position-relative">

											<input id="location_two" type="text" name="search" placeholder="Enter car name">
											<label for="location_two" class="input_icon"><i class="fas fa-search"></i></label>
										</div>
									</div>
								</div>


								<div class="col-lg-3 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="600">

									<button type="submit" class="custom_btn bg_default_red text-uppercase">Find A Car <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="offers_car_carousel slideshow4_slider" data-aos="fade-up" data-aos-delay="700">

                    @foreach ($slider_car as $slider_car)


					    <div class="item">

					    	<div class="gallery_fullimage_2">

					    		<img src="cars/{{ $slider_car->slider_car->image }}" alt="image_not_found">
					    		<div class="item_content text-white">
					    			<span class="item_price bg_default_blue">K{{ $slider_car->slider_car-> daily_price }}/Day</span>
					    			<h3 class="item_title text-white">{{ $slider_car->slider_car-> model }}</h3>
					    			<a class="text_btn text-uppercase" href="{{ url('car_details', $slider_car->slider_car-> id) }}"><span>Book Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
					    		</div>
					    	</div>
					    </div>
                    @endforeach
                </div>

			</section>
			<!-- search_section - end
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
