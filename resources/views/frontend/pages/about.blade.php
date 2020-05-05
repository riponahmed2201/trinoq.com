@extends('master')

@section('content')

        <!-- Start Breadcaump Area -->
        <div class="breadcaump-area bg_image--13 ptb--150 ptb-md--150 ptb-sm--150 breadcaump-title-bar breadcaump-title-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center mt_sm--50 mt_md--50">
                            <h1 class="heading heading-h1 text-white">A home of out of box thinkers.</h1>
                                <br> <h5 class="heading heading-h5 text-white"> We Design & Develop Digital Projects, but differently. </h5> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->

        <!-- Page Conttent -->
        <main class="page-content">

            <!-- Start Icon Boxes -->
            <div class="brook-icon-boxes-area space_dec--100 pt_md--80 pt_sm--60">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Icon Boxes -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="icon-box text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="ion-ios-eye-outline"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="heading heading-h5">Modern Design</h5>
                                        <p class="bk_pra">Brook embraces a modern look with various enhanced
                                            pre-defined page elements.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Icon Boxes -->

                        <!-- Start Single Icon Boxes -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="icon-box text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="ion-ios-bookmarks-outline"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="heading heading-h5">Multi-purpose Use</h5>
                                        <p class="bk_pra">This is the theme for businesses & companies operating in a
                                            wide range of areas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Icon Boxes -->

                        <!-- Start Single Icon Boxes -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="icon-box text-center">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="ion-ios-browsers-outline"></i>
                                    </div>
                                    <div class="content">
                                        <h5 class="heading heading-h5">Responsive Design</h5>
                                        <p class="bk_pra">Brook is highly responsive thanks to built-in WPBakery Page
                                            Builder & Slider Revolution.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Icon Boxes -->

                    </div>
                </div>
            </div>
            <!-- End Icon Boxes -->

            <!-- Start Work area -->
            <div class="brook-whatdo-area ptb--100 ptb-md--80 ptb-sm--60 bg_color--1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bk-title--default text-center">
                                <h6 class="heading heading-h6 theme-color">What we do</h6>
                                <div class="bkseparator--30"></div>
                                <h3 class="heading heading-h3">Fresh ideas & unique designs</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--40">
                        <div class="col-lg-6">
                            <div class="video-with-thumb text-center move-up wow mt--40">
                                <div class="thumb">
                                <img src="{{asset('assets/frontend/img/about/about-3.jpg')}}" alt="video images">
                                </div>
                                <!-- Start Single Popup -->
                                <div class="video-btn position--center">
                                    <a class="play__btn" href="https://www.youtube.com/watch?v=9No-FiEInLA">
                                        <div class="video-icon second-icon"></div>
                                    </a>
                                </div>
                                <!-- End Single Popup -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- Start Single Progress -->
                            <div class="radial-progress-single progress-flex mt--40">
                                <div class="radial-progress" data-percent="80" data-bar-color="#0038E3" data-track-color="#eeeeee">
                                    <div class="circle-text">
                                        <span class="count">80</span>
                                    </div>
                                </div>
                                <div class="contant pl--30 pl_mobile--5 pt_mobile--30">
                                    <h5 class="heading heading-h5">Creative designs</h5>
                                    <p class="bk_pra mt--30">Brook presents your services with flexible, convenient and
                                        multipurpose layouts. You can select your favorite layouts & elements for
                                        particular projects with unlimited customization possibilities.</p>
                                </div>
                            </div>
                            <!-- End Single Progress -->
                            <!-- Start Single Progress -->
                            <div class="radial-progress-single progress-flex mt--80">
                                <div class="radial-progress" data-percent="90" data-bar-color="#0038E3" data-track-color="#eeeeee">
                                    <div class="circle-text">
                                        <span class="count">90</span>
                                    </div>
                                </div>
                                <div class="contant pl--30 pl_mobile--5 pt_mobile--30">
                                    <h5 class="heading heading-h5">Unique solutions</h5>
                                    <p class="bk_pra mt--30">Pixel-perfect replication of the designers is intended for
                                        both front-end & back-end developers to build their pages with greater comfort
                                        thanks to the higher customizability, adaptability as well as flexibility.</p>
                                </div>
                            </div>
                            <!-- End Single Progress -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Work area -->

            <!-- Start Team Area -->
            <div class="brook-team-area bg_color--5 ptb--150 ptb-sm--60 ptb-md--80 slick-arrow-hover">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bk-title--default text-center mb--70">
                                <h6 class="heading heading-h6 theme-color">TEAM MEMBERS</h6>
                                <div class="bkseparator--30"></div>
                                <h3 class="heading heading-h3">Our creative crew</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brook-element-carousel slick-arrow-center slick-arrow-rounded" data-slick-options='{
                                "spaceBetween": 15, 
                                "slidesToShow": 3, 
                                "slidesToScroll": 1, 
                                "arrows": true, 
                                "infinite": true,
                                "dots": false,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "ion ion-ios-arrow-back" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "ion ion-ios-arrow-forward" }
                            }' data-slick-responsive='[
                            {"breakpoint":991, "settings": {"slidesToShow": 2}},
                            {"breakpoint":690, "settings": {"slidesToShow": 2}},
                            {"breakpoint":590, "settings": {"slidesToShow": 1}}
                            ]'>


                                <!-- Start Single Team -->
                                <div class="team team__style--2 move-up wow">
                                    <div class="thumb">
                                        <img src="{{asset('assets/frontend/img/team/team-2/team-1.jpg')}}" alt="team Images">
                                        <div class="overlay"></div>
                                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                                            <li class="facebook"><a href="#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="instagram"><a href="#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <div class="team-info">
                                            <div class="info">
                                                <h5>John Doe</h5>
                                                <span>Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team -->

                                <!-- Start Single Team -->
                                <div class="team team__style--2 move-up wow" data-wow-delay="0.13s">
                                    <div class="thumb">
                                        <img src="{{asset('assets/frontend/img/team/team-2/team-2.jpg')}}" alt="team Images">
                                        <div class="overlay"></div>
                                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                                            <li class="facebook"><a href="#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="instagram"><a href="#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <div class="team-info">
                                            <div class="info">
                                                <h5>Kasahara May</h5>
                                                <span>Project manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team -->

                                <!-- Start Single Team -->
                                <div class="team team__style--2 move-up wow" data-wow-delay="0.16s">
                                    <div class="thumb">
                                        <img src="{{asset('assets/frontend/img/team/team-2/team-3.jpg')}}" alt="team Images">
                                        <div class="overlay"></div>
                                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                                            <li class="facebook"><a href="#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="instagram"><a href="#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <div class="team-info">
                                            <div class="info">
                                                <h5>Blake Hamilton</h5>
                                                <span>Engineer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team -->

                                <!-- Start Single Team -->
                                <div class="team team__style--2 move-up wow" data-wow-delay="0.19s">
                                    <div class="thumb">
                                        <img src="{{asset('assets/frontend/img/team/team-2/team-4.jpg')}}" alt="team Images">
                                        <div class="overlay"></div>
                                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                                            <li class="facebook"><a href="#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                            <li class="instagram"><a href="#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                        <div class="team-info">
                                            <div class="info">
                                                <h5>John Doe</h5>
                                                <span>Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Team -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Team Area -->

            <!-- Start Accordion Area -->
            <div class="bk-accordion-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--1">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Accordion -->
                        <div class="col-lg-6">
                            <div class="thumb">
                                <img class="w-100" src="{{asset('assets/frontend/img/about/about-2.jpg')}}" alt="about images">
                            </div>
                        </div>
                        <!-- End Single Accordion -->

                        <!-- Start Single Accordion -->
                        <div class="col-lg-6 mt_md--40 mt_sm--40">
                            <div class="brook-section-title mb--50 mb_md--20 mb_sm--20">
                                <h3 class="heading heading-h3">What we do</h3>
                            </div>
                            <div class="bk-accordion-style--2" id="accordionExampl3">

                                <div class="card">
                                    <div class="card-header" id="headingsix">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                                Digital strategy
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExampl3">
                                        <div class="card-body">We learn from landing page's best practices and great
                                            landing pages in order to create a clear, crisp design that suits all your
                                            needs for a responsive landing site.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingseven">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                                UI/UX design and development
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExampl3">
                                        <div class="card-body">Brook presents your services with flexible, convenient
                                            and multipurpose layouts. You can select your favorite layouts & elements
                                            for particular projects with unlimited customization possibilities.
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header" id="headingeight">
                                        <h5 class="mb-0">
                                            <a href="#" class="acc-btn collapsed" data-toggle="collapse" data-target="#collapeight" aria-expanded="false" aria-controls="collapeight">
                                                Brand building
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExampl3">
                                        <div class="card-body">Pixel-perfect replication of the designers is intended
                                            for both front-end & back-end developers to build their pages with greater
                                            comfort thanks to the higher customizability, adaptability as well as
                                            flexibility.
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- End Single Accordion -->
                    </div>
                </div>
            </div>
            <!-- End Accordion Area -->

            <!-- Start Feature Area -->
            <div class="brook-feature-area pb--150 pb_md--80 pb_sm--60 bg_color--1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="brook-section-title mb--10">
                                <h3 class="heading heading-h3">Features you will love</h3>
                            </div>
                            <div class="row">

                                <!-- Start Single Feature -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="bk-feature d-flex mt--70">
                                        <div class="icon">
                                            <i class="ion-ios-infinite theme-color"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">Digital marketing</h5>
                                            <div class="bkseparator--20"></div>
                                            <p class="bk_pra">We conduct the marketing of products & services using
                                                latest digital technologies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Feature -->

                                <!-- Start Single Feature -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="bk-feature d-flex mt--70">
                                        <div class="icon">
                                            <i class="ion-monitor theme-color"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">UI/UX designs</h5>
                                            <div class="bkseparator--20"></div>
                                            <p class="bk_pra">We conduct the marketing of products & services using
                                                latest digital technologies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Feature -->

                                <!-- Start Single Feature -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="bk-feature d-flex mt--70">
                                        <div class="icon">
                                            <i class="ion-ios-baseball-outline theme-color"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">SEO marketing</h5>
                                            <div class="bkseparator--20"></div>
                                            <p class="bk_pra">We conduct the marketing of products & services using
                                                latest digital technologies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Feature -->

                                <!-- Start Single Feature -->
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="bk-feature d-flex mt--70">
                                        <div class="icon">
                                            <i class="ion-pinpoint theme-color"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading heading-h5">Resource use</h5>
                                            <div class="bkseparator--20"></div>
                                            <p class="bk_pra">We conduct the marketing of products & services using
                                                latest digital technologies.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Feature -->

                            </div>
                        </div>
                        <div class="col-lg-4 mt_md--50 mt_sm--50">
                            <div class="thumb text-center">
                                <img src="{{asset('assets/frontend/img/about/iphone-01.png')}}" alt="about images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Feature Area -->


            <!-- Start Call To Action -->
            <div class="brook-call-to-action bg_color--2 ptb--70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="call-content text-center text-sm-left">
                                <h3 class="heading heading-h3 text-white wow move-up">Start working together?</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="call-btn text-center text-sm-right mt_mobile--20 wow move-up">
                                <a class="brook-btn bk-btn-white text-theme btn-sd-size btn-rounded" href="#">Find out
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Call To Action -->

        </main>
        <!--// Page Conttent -->
    </div>
    @endsection