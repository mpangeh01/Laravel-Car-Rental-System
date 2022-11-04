<footer class="footer_section clearfix" data-bg-color="#F2F2F2">
    <div class="footer_widget_area sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between">
                <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                    <div class="footer_about" data-aos="fade-up" data-aos-delay="100">

                        <p class="mb_15">

                            Database Project
                        </p>
                        <div class="footer_useful_links mb_30">
                            <ul class="ul_li_block clearfix">
                                <li><a href="{{ url('faq') }}"><i class="fal fa-angle-right"></i> Rental Information</a></li>

                            </ul>
                        </div>
                        <div class="form_item mb-0">
                            <form action="search_car" method="GET">
                                @csrf
                                <input id="footer_search" type="search" name="search" placeholder="Search">
                                <label for="footer_search" class="input_icon"><i class="fal fa-search"></i></label>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-12 col-sm-12">
                    <div class="footer_contact_info" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="footer_widget_title">Contact Us:</h3>
                        <ul class="ul_li_block clearfix">
                            <li>
                                <strong><i class="fas fa-map-marker-alt"></i> Main Office Address:</strong>
                                <p class="mb-0">
                                    Tiyende Pamodzi room 25
                                </p>
                            </li>
                            <li><i class="fas fa-clock"></i> 8:00am-9:30pm</li>
                            <li><i class="far fa-angle-right"></i> Other Office Locations</li>
                            <li><i class="fas fa-envelope"></i> <strong>mpangehlwanga99@gmail.com</strong></li>
                            <li><i class="fas fa-phone"></i> <strong>+260 962 743 326</strong></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                    <div class="footer_useful_links" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="footer_widget_title">Information:</h3>
                        <ul class="ul_li_block clearfix">
                            <li> Find a Car for Rent in the Nearest Location</li>
                            <li><a href="{{ url('showroom') }}"><i class="fal fa-angle-right"></i> Cars Catalog</a></li>
                            <li><a href="{{ url('about') }}"><i class="fal fa-angle-right"></i> About Us</a></li>
                            <li><a href="{{ url('contact') }}"><i class="fal fa-angle-right"></i> Contact Us</a></li>
                            <li ><a href="{{ url('faq') }}"><i class="fal fa-angle-right"></i>FAQ</a></li>
                            <li><a href="{{ url('review') }}"><i class="fal fa-angle-right"></i>Review</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom text-white clearfix" data-bg-color="#000C21">
        <div class="container">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <p class="copyright_text mb-0">Copyright © 2022  <a class="author_links text-white" href="/">DataBase Project</a></p>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <ul class="primary_social_links ul_li_right clearfix">
                        <li><a href="facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="instagram.com"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="twitter.com"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="youtube.com"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
