<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Reviews</title>

        @include('home.css')

        <style>

            .elser{

                color: white;
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
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_04.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">Reviews</h1>
					</div>
				</div>
				<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
					<div class="container">
						<ul class="ul_li clearfix">
							<li><a href="index.html">Home</a></li>
							<li>Reviews</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- testimonial_section - start
			================================================== -->
			<section class="testimonial_section sec_ptb_150 clearfix">
				<div class="container">

					<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text mb-0">
							<span>What Clients Say about Us</span>
						</h2>
					</div>

					<div class="testimonial_carousel_wrap position-relative" data-aos="fade-up" data-aos-delay="300">
						<div class="testimonial_carousel" data-slick='{"dots": false}'>

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


			<!-- comment_form_section - start
			================================================== -->
			<section class="comment_form_section sec_ptb_150 parallaxie has_overlay clearfix" data-bg-image="assets/images/backgrounds/bg_03.jpg">
				<div class="overlay"></div>



				<div class="container">


					<div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
						<h2 class="title_text text-white mb-0">
							<span>Leave Your Feedback</span>
						</h2>
					</div>

                    @if (Route::has('login'))
                    @auth
					<form action="{{ url('review', $user->id) }}" method="POST">

                        @csrf
                        @if(session()->has('message'))

                        <div class="alert alert-success">

                            {{ session()-> get('message') }}
                        </div>
                        @endif

                        <div class="form_item" data-aos="fade-up" data-aos-delay="700">
							<textarea name="review" placeholder="Leave Your Review" required></textarea>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="300">
									<input type="text" name="firstname" placeholder="First Name" value="{{ $user->f_name }}" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="400">
									<input type="text" name="lastname" placeholder="Last Name" value="{{ $user->l_name }}" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="500">
									<input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form_item" data-aos="fade-up" data-aos-delay="600">
									<select name="rating" required>
										<option data-display="Please Rate Us">Select A Option</option>
										<option value=""></option>
                                        <option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
                                        <option value="5">5</option>

									</select>
								</div>
							</div>
						</div>





						    <div data-aos="fade-up" data-aos-delay="800">
						    	<button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Leave Testimonial <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
						    </div>

                        @else
                            <div data-aos="fade-up" data-aos-delay="100" class="elser">
                                <p><i class="fas fa-info-circle mr-1"></i> You must <a href="{{ route('login') }}">Log In</a>  or <a href="{{ route('register') }}">Register</a> to leave a testmonial.</p>
                            </div>
                        @endauth
                        @endif
					</form>
				</div>






			</section>
			<!-- comment_form_section - end
			================================================== -->


			<!-- testimonial_section - start
			================================================== -->
            <section class="testimonial_section sec_ptb_150 clearfix">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

						<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 order-last">
							<div class="testimonial_contants_wrap">

                                @foreach ($reviews as $review)


								    <div class="testimonial_item clearfix">
								    	<div class="admin_info_wrap clearfix" data-aos="fade-up" data-aos-delay="100">
								    		<div class="admin_content">
								    			<h4 class="admin_name">{{ $review->user->f_name }} {{ $review->user->l_name }}</h4>
								    			<ul class="rating_star ul_li clearfix">

                                                    @for ($i = 0; $i < $review->rating; $i++)

                                                        <li class="active"><i class="fas fa-star"></i></li>
                                                    @endfor

								    			</ul>
								    		</div>
								    	</div>
								    	<p class="mb-0" data-aos="fade-up" data-aos-delay="200">
								    		“{{ $review->review }}”
								    	</p>

								    </div>
                                @endforeach


                                {{ $reviews->links('vendor.pagination.custom') }}
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-8 col-xs-12">
							<aside class="sidebar_section clearfix" data-bg-color="#F2F2F2">
								<div class="sb_widget sb_subscrib_form" data-aos="fade-up" data-aos-delay="100">
									<h3 class="sb_widget_title">Subscribe:</h3>
									<form action="#">
										<div class="form_item">
											<input type="email" name="email" placeholder="E-mail">
										</div>
										<button type="submit" class="custom_btn bg_default_red text-uppercase">Subscribe <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
									</form>
								</div>



								<!--<div class="sb_widget sb_category_list" data-aos="fade-up" data-aos-delay="400">
									<h3 class="sb_widget_title">Categories:</h3>
									<ul class="ul_li_block clearfix">
										<li><a href="#!"><i class="fas fa-caret-right"></i> Vehicle guide</a></li>
										<li><a href="#!"><i class="fas fa-caret-right"></i> Best offers</a></li>
										<li><a href="#!"><i class="fas fa-caret-right"></i> Travel Guides</a></li>
										<li><a href="#!"><i class="fas fa-caret-right"></i> On The Road</a></li>
									</ul>
								</div>-->
							</aside>
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
