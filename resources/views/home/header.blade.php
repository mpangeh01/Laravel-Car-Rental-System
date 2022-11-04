<header class="header_section secondary_header sticky text-white clearfix">
    <div class="header_top clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <ul class="header_contact_info ul_li clearfix">
                        <li><i class="fal fa-envelope"></i> mpangehlwanga99@gmail.com</li>
                        <li><i class="fal fa-phone"></i> +260 962 743 326</li>
                    </ul>
                </div>

                <div class="col-lg-5">
                    <ul class="primary_social_links ul_li_right clearfix">
                        <li><a href="facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="youtube.com"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bottom clearfix">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="brand_logo">

                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6 col-6 order-last">
                    <ul class="header_action_btns ul_li_right clearfix">
                        <li>
                            <button type="button" class="search_btn" data-toggle="collapse" data-target="#collapse_search_body" aria-expanded="false" aria-controls="collapse_search_body">
                                <i class="fal fa-search"></i>
                            </button>
                        </li>




                            <button type="button" class="mobile_sidebar_btn"><i class="fal fa-align-right"></i></button>
                        </li>
                    </ul>


                </div>

                <div class="col-lg-6 col-md-12">
                    <nav class="main_menu clearfix">

                        <ul class="ul_li_center clearfix">

                            <li class=" has_child"><a href="/">Home</a></li>
                            <li><a href="{{ url('showroom') }}">Our Cars</a></li>
                            <li><a href="{{ url('about') }}">About</a></li>
                            <li ><a href="{{ url('contact') }}">Contact Us</a></li>
                            @if (Route::has('login'))

                                @auth

                                    <li ><a href="{{ url('user_details') }}">Dashboard</a></li>


                                @else
                                    <li ><a href="{{ route('login') }}">Log In</a></li>
                                    <li ><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                            @endif


                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>

    <div id="collapse_search_body" class="collapse_search_body collapse">
        <div class="search_body">
            <div class="container">
                <form action="{{ url('search_car') }}" method="GET">
                    <div class="form_item">
                        <input type="search" name="search" placeholder="Type here...">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
