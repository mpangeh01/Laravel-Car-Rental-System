<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>My Account</title>


        @include('home.css')

        <style>

            .th_reg{

                padding: 30px;
            }

            .td_pad{

                padding-right: 50px;
            }

            tr{

                padding: 20px;
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
				<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_10.jpg">
					<div class="overlay"></div>
					<div class="container" data-aos="fade-up" data-aos-delay="100">
						<h1 class="page_title text-white mb-0">My Account</h1>
					</div>
				</div>
				<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
					<div class="container">
						<ul class="ul_li clearfix">
							<li><a href="index.html">Home</a></li>
							<li>My Account</li>
						</ul>
					</div>
				</div>
			</section>
			<!-- breadcrumb_section - end
			================================================== -->


			<!-- account_section - start
			================================================== -->

            <x-app-layout>

                <section class="account_section sec_ptb_100 clearfix">
                    <div class="container">
                        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">

                            <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
                                <div class="account_tabs_menu clearfix" data-bg-color="#F2F2F2" data-aos="fade-up" data-aos-delay="100">
                                    <h3 class="list_title mb_15">Account Details:</h3>

                                    <ul class="ul_li_block nav" role="tablist">

                                        <li>
                                            <a class="active" data-toggle="tab" href=""><i class="fas fa-user"></i> User Details</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                                <div class="account_tab_content tab-content">
                                    <div id="admin_tab" class="tab-pane active">
                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">
                                            <h3 class="list_title mb_30">Account:</h3>

                                            @if ($data->acc_status == 'Unverified')

                                                <div data-aos="fade-up" data-aos-delay="200">
                                                    <i class="fas fa-info-circle mr-1"></i> Unverified account can not hire a car
                                                </div>
                                            @else

                                                <div data-aos="fade-up" data-aos-delay="200">
                                                    <i class="fas fa-info-circle mr-1"></i> Contact Us to change credentials
                                                </div>
                                            @endif

                                            <br><br>


                                            <ul class="ul_li_block clearfix">
                                                <li><span>First Name:</span> {{ $data-> f_name }}</li>
                                                <li><span>Last Name:</span> {{ $data-> l_name }}</li>
                                                <li><span>E-mail:</span> {{ $data-> email }}</li>
                                                <li><span>Phone Number:</span> {{ $data-> phone }}</li>
                                                <li><span>Account Status:</span> {{ $data-> acc_status }}</li>
                                            </ul>


                                            <a class="text_btn text-uppercase" href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')"><span>Change Account Information</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
                                        </div>


                                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">


                                                <h3 class="list_title mb_30">Profile Verification:&nbsp;&nbsp;&nbsp;(only images allowed)</h3>

                                                @if ($data->acc_status == 'Unverified')

                                                <form action="{{ url('verify', $data->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <ul class="ul_li_block clearfix">

                                                        @if(session()->has('message'))

                                                        <div class="alert alert-success">

                                                            {{ session()-> get('message') }}
                                                        </div>
                                                        @endif

                                                        <li><span>Drivers License(front) : </span><input type="file" name="nrc" accept="image/*" required></li>
                                                        <li><span>Drivers License(back) : <input type="file" name="license" accept="image/*" required></li>
                                                            <li></li>
                                                        <button type="submit" class="custom_btn bg_default_red text-uppercase">Submit<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                                                    </ul>
                                                </form>

                                                @else

                                                <div data-aos="fade-up" data-aos-delay="200">
                                                    <i class="fas fa-info-circle mr-1"></i> Account already verified
                                                </div>

                                                <div data-aos="fade-up" data-aos-delay="200">
                                                    <i class="fas fa-info-circle mr-1"></i> Contact Us to  change credentials
                                                </div>
                                                @endif

                                            </div>


                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="300">
                                            <h3 class="list_title mb_30">Booking Profiles:</h3>
                                            <ul class="ul_li_block clearfix">
                                                <li><span>Profile ID:</span> {{ $data -> id }}</li>
                                                <li><span>Payment Method:</span> Paypal</li>
                                                <li><span>Phone Number:</span> {{ $data-> phone }}</li>
                                            </ul>
                                        </div>

                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="500">
                                           <h3 class="list_title mb_30">Booking History:</h3>
                                            <ul class="ul_li_block clearfix">
                                                <li><span>Recent Reservations:</span></li>

                                                @if($reservations)

                                                    @foreach ($reservations as $reservation)


                                                        <li><span>Car:</span> {{ $reservation -> car-> model }}</li>
                                                        <li><span>Payment Status:</span> {{ $reservation -> status }}</li>
                                                        <li><span>Car State:</span> {{ $reservation -> State }}</li>
                                                        <li><span>Print Ticket:</span><a href="{{ url('print_ticket', $reservation->id) }}" class="btn btn-secondary">Print Ticket</a> <br>


                                                    @endforeach
                                                {{ $reservations->links('vendor.pagination.custom') }}
                                                @else
                                                    <li>No reservations</li>
                                                @endif
                                            </ul>
                                            <a class="text_btn text-uppercase" href="{{ url('showroom') }}"><span>Book A Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
                                        </div>
                                    </div>

                                    <!--<div id="profile_tab" class="tab-pane fade">
                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">
                                            <h3 class="list_title mb_30">Booking Profiles:</h3>
                                            <ul class="ul_li_block clearfix">
                                                <li><span>Profile ID:</span> 1234557jt</li>
                                                <li><span>Payment Method:</span> Visa Credit Card</li>
                                                <li><span>Phone Number:</span> +1-202-555-0104</li>
                                            </ul>
                                        </div>

                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="300">
                                            <h3 class="list_title mb_30">Booking History:</h3>
                                            <ul class="ul_li_block clearfix">
                                                <li><span>Upcoming Reservations:</span> No Reservations Yet</li>
                                                <li><span>Past Rentals:</span> 0</li>
                                            </ul>
                                            <a class="text_btn text-uppercase" href="#!"><span>Book A Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
                                        </div>

                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="500">
                                            <h3 class="list_title mb_30">Account:</h3>
                                            <ul class="ul_li_block clearfix">
                                                <li><span>Name:</span> Rakibul Islam Dewan</li>
                                                <li><span>E-mail:</span> myname@email.com</li>
                                                <li><span>Phone Number:</span> +1-202-555-0104</li>
                                                <li><span>Country:</span> United States</li>
                                                <li><span>Address:</span> 60 Stonybrook Lane Atlanta, GA 30303</li>
                                            </ul>
                                            <a class="text_btn text-uppercase" href="#!"><span>Change Account Information</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
                                        </div>
                                    </div>

                                    <div id="history_tab" class="tab-pane fade">
                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">
                                            <h3 class="list_title mb_30">Booking History:</h3>
                                            <ul class="ul_li_block clearfix">
                                                <li><span>Upcoming Reservations:</span> No Reservations Yet</li>
                                                <li><span>Past Rentals:</span> 0</li>
                                            </ul>
                                            <a class="text_btn text-uppercase" href="#!"><span>Book A Car</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
                                        </div>

                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="300">
                                            <h3 class="list_title mb_30">Booking Profiles:</h3>
                                            <ul class="ul_li_block clearfix">
                                                <li><span>Profile ID:</span> 1234557jt</li>
                                                <li><span>Payment Method:</span> Visa Credit Card</li>
                                                <li><span>Phone Number:</span> +1-202-555-0104</li>
                                            </ul>
                                        </div>

                                        <div class="account_info_list" data-aos="fade-up" data-aos-delay="500">
                                            <h3 class="list_title mb_30">Account:</h3>
                                            <ul class="ul_li_block clearfix">
                                                <li><span>Name:</span> Rakibul Islam Dewan</li>
                                                <li><span>E-mail:</span> myname@email.com</li>
                                                <li><span>Phone Number:</span> +1-202-555-0104</li>
                                                <li><span>Country:</span> United States</li>
                                                <li><span>Address:</span> 60 Stonybrook Lane Atlanta, GA 30303</li>
                                            </ul>
                                            <a class="text_btn text-uppercase" href="#!"><span>Change Account Information</span> <img src="assets/images/icons/icon_02.png" alt="icon_not_found"></a>
                                        </div>
                                    </div>-->
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            </x-app-layout>
			<!-- account_section - end
			================================================== -->


		</main>
		<!-- main body - end
		================================================== -->


		<!-- footer_section - start
		================================================== -->
            @include('home.footer')
		<!-- footer_section - end
		================================================== -->




        		<!-- javascript_section - start
		================================================== -->

                @include('home.js')
		<!-- javascript - end
		================================================== -->
	</body>
</html>
