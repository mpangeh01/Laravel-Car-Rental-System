<div class="sidebar-menu-wrapper">
    <div class="mobile_sidebar_menu">
        <button type="button" class="close_btn"><i class="fal fa-times"></i></button>

        <div class="about_content mb_60">

            <p class="mb-0">
                Hire and rent out the best of cars in town
            </p>
        </div>

        <div class="menu_list mb_60 clearfix">
            <h3 class="title_text text-white">Menu List</h3>
            <ul class="ul_li_block clearfix">
                <li><a href="/">Home</a></li>
                <li><a href="{{ url('showroom') }}">Our Cars</a></li>
                <li><a href="{{ url('review') }}">Reviews</a></li>
                <li><a href="{{ url('about') }}">About</a></li>
                <li><a href="{{ url('contact') }}">Contact Us</a></li>
                <li ><a href="{{ url('faq') }}">FAQ</a></li>

                @if (Route::has('login'))

                @auth

                    <li ><a href="{{ url('user_details') }}">Dashboard</a></li>


                @else
                    <li ><a href="{{ route('login') }}">Log In</a></li>
                    <li ><a href="{{ route('register') }}">Register</a></li>
                @endauth
            @endif

            </ul>
        </div>

        <div class="booking_car_form">
            <h3 class="title_text text-white mb-2">Search for Car</h3>
            <p class="mb_15">
                Feel free to enter the car name, we will find you
            </p>
            <form action="{{ url('search_car') }}" method="GET">
                <div class="form_item">
                    <h4 class="input_title text-white">Car Name</h4>
                    <div class="position-relative">
                        <input id="location_one" type="text" name="location" placeholder="Enter Car Name">
                        <label for="location_one" class="input_icon"><i class="fas fa-search"></i></label>
                    </div>
                </div>

                <button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Find car<img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
            </form>
        </div>

    </div>
    <div class="overlay"></div>
</div>
