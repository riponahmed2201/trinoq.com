@extends('master')

@section('content')
<main class="page-content">

    <!-- Start Service Area -->
    <div class="brook-service-area bg_color--13">
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-7 col-12">
                <div class="row startupservice-wrapper">

                    <!-- Strat Single Speach -->
                    <div class="col-lg-6">
                        <div class="single-motive-speach text-white">
                            <div class="icon">
                                <i class="icon-basic-globe"></i>
                            </div>
                            <div class="content">
                                <h4>Graphic Design</h4>
                                <p>
                                    We think the eyes are first one to judge. And we make an impression.  A good one.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Speach -->

                    <!-- Strat Single Speach -->
                    <div class="col-lg-6">
                        <div class="single-motive-speach text-white mt_md--40 mt_sm--40">
                            <div class="icon">
                                <i class="ion-pinpoint"></i>
                            </div>
                            <div class="content">
                                <h4>Web Development</h4>
                                <p>
                                    In this digital world, the web is the handiest tool for every query we think about. And we do love to develop web technologies.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Speach -->

                    <!-- Strat Single Speach -->
                    <div class="col-lg-6">
                        <div class="single-motive-speach text-white mt--40">
                            <div class="icon">
                                <i class="ion-ios-baseball-outline"></i>
                            </div>
                            <div class="content">
                                <h4>
                                    Mobile App Development
                                </h4>
                                <p>
                                    The next thing is going to happen in future is everything is on your palm. Yes Mobile Application. We develop native mobile application for you also.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Speach -->

                    <!-- Strat Single Speach -->
                    <div class="col-lg-6">
                        <div class="single-motive-speach text-white mt--40">
                            <div class="icon">
                                <i class="ion-monitor"></i>
                            </div>
                            <div class="content">
                                <h4>
                                    Desktop Application

                                </h4>
                                <p>
                                    Desktop applications are the most common use of industries. We know how to develop that too.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Speach -->

                </div>
            </div>
            <div class="col-lg-12 col-xl-5 col-12">
                <div class="clint-succeed bg_image--24 ptb--220 ptb-md--80 ptb-lg--80 ptb_lp--130 ptb-sm--60" data-overlay="9">
                    <div class="row align-items-center plr_md--40 plr_sm--40">
                        <div class="col-lg-4">
                            <!-- Start Single Popup -->
                            <div class="video-btn">
                                <a class="play__btn" href="https://www.youtube.com/watch?v=9No-FiEInLA">
                                    <div class="video-icon second-icon yellow-color-2"></div>
                                </a>
                            </div>
                            <!-- End Single Popup -->
                        </div>
                        <div class="col-lg-8">
                            <div class="content pr--30 pr_sm--0">
                                <h3 class="heading heading-h3 font-32 text-white line-height-1-88">We help our
                                    clients succeed by delivering products that improve life, work and play.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service Area -->

    <!-- Start What We Do Area -->
    {{-- <div class="brook-what-do-area ptb--160 ptb-md--80 ptb-sm--60 bg_color--1">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-2">
                    <div class="brook-section-title wow move-up">
                        <h5 class="heading heading-h5 yellow-color-2">What we do</h5>
                        <div class="bkseparator--30"></div>
                        <h3 class="heading heading-h3 line-height-1-42">Effective solution <br> for every
                            businesses</h3>
                    </div>
                </div>
            </div>
            <!-- Start What Do Inner -->
            <div class="row mt--20 mt_sm--5 mt_md--5">
                <div class="col-lg-2">
                    <div class="what-do mt--40 mt_md--20 mt_sm--5">
                        <div class="basic-separator line-3"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="what-do mt--40">
                        <div class="content">
                            <h5 class="heading heading-h5 yellow-color-2 wow move-up">Fresh ideas</h5>
                            <div class="bkseparator--20"></div>
                            <p class="bk_pra wow move-up">Brook presents your services with flexible,
                                convenient and multipurpose layouts. You can select your favorite layouts &
                                elements for particular projects with unlimited customization possibilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="what-do mt--40">
                        <div class="content">
                            <h5 class="heading heading-h5 yellow-color-2 wow move-up">Unique designs</h5>
                            <div class="bkseparator--20"></div>
                            <p class="bk_pra wow move-up">Pixel-perfect replication of the designers is
                                intended for both front-end & back-end developers to build their pages with
                                greater comfort thanks to the higher customizability as well as flexibility.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End What Do Inner -->
        </div>
    </div> --}}
    <!-- End What We Do Area -->

    <!-- Start Video Popup Area -->
    {{-- <div class="brook-video-area bg_color--1 pb--130 pb_md--80 pb_sm--60 bg-as-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="video-with-thumb text-center move-up wow">
                        <div class="thumb">
                        <img src="{{asset('assets/frontend/img/about/macbook-02.png')}}" alt="video images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12 mt_md--40 mt_sm--40">
                    <div class="video-content move-up wow">
                        <h3 class="heading heading-h3 line-height-1-42">Effective solution <br> for every
                            businesses</h3>
                        <div class="bkseparator--25"></div>
                        <p class="bk_pra">Brook presents your services with flexible, convenient and
                            multipurpose layouts. You can select your favorite layouts & elements for
                            particular projects with unlimited customization possibilities.</p>
                        <div class="bkseparator--40"></div>
                        <a class="moredetails-btn yellow-color-2" href="#"><span>More details</span> <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Video Popup Area -->

    <!-- Start Brand Stratagy Area -->
    <div class="brook-stratagy-area bg_color--7">
        <div class="row">
            <div class="col-lg-6">
                <div class="bk-stratagy-content max-width--600 float-right pt--120 pb--120 pr--160 pr_lg--30 pl_lg--30 pr_md--50 pl_md--50 pr_sm--30 pl_sm--30">
                    <div class="content">
                        <h3 class="heading heading-h3 line-height-1-42 yellow-color-2 wow move-up text-white">
                            Process we maintain to develop your applications.
                        </h3>
                        <div class="bkseparator--30"></div>
                        <p class="bk_pra font-16 line-height-1-87 pr--30 wow move-up text-white">
                            We do have a strategy we follow strictly, that everything should be organized and friendly to developers and the client these are the steps.
                        </p>
                        <div class="bkseparator--40"></div>

                        <!-- Start Single List -->
                        <div class="bk-list--2 wow move-up">
                            <div class="list-header with-ckeck check-yellow-color-2">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h6 class="heading heading-h5 text-white">Research and discuss</h6>
                                </div>
                            </div>
                            <div class="list-header with-ckeck check-yellow-color-2">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h6 class="heading heading-h5 text-white">Design phase</h6>
                                </div>
                            </div>
                            <div class="list-header with-ckeck check-yellow-color-2">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h6 class="heading heading-h5 text-white">Develop phase</h6>
                                </div>
                            </div>

                            <div class="list-header with-ckeck check-yellow-color-2">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h6 class="heading heading-h5 text-white">Testing phase</h6>
                                </div>
                            </div>

                            <div class="list-header with-ckeck check-yellow-color-2">
                                <div class="marker"></div>
                                <div class="title-wrap">
                                    <h6 class="heading heading-h5 text-white">And then we deliver</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End Single List -->

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bk-stratagy-thumb bg_image--25 ptb--180 h-100">

                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Stratagy Area -->

    <!-- Start Portfolio Caption -->
    <div class="bk-portfolio-with-caption-area pt--150 pt_md--80 pt_sm--60 pb--80 pb_md--50 pb_sm--30 bg_color--1 poss_relative bk-masonary-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brook-section-title text-center mb--60">
                        <h3 class="heading heading-h3">Our featured works</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="messonry-button text-center mb--70">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All</span><span class="filter-counter">All</span></button>
                        <button data-filter=".cat--1"><span class="filter-text">Graphic Design</span> <span class="filter-counter">1</span></button>
                        <button data-filter=".cat--2"><span class="filter-text">Web Development</span> <span class="filter-counter">2</span></button>
                        <button data-filter=".cat--3"><span class="filter-text">Mobile App Development</span> <span class="filter-counter">3</span></button>
                        <button data-filter=".cat--4"><span class="filter-text">Desktop Application</span> <span class="filter-counter">4</span></button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="portfolio-grid-metro6 mesonry-list">

                        <div class="resizer"></div>

                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--1">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('assets/frontend/img/portfolio/grid/caption-2.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5">
                                            <a href="portfolio-details.html">Trinoq
                                                Web Development
                                            </a>
                                            </h5>
                                        <p class="bk_pra">Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-33-33 cat--2">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('assets/frontend/img/portfolio/grid/caption-2.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5">
                                            <a href="portfolio-details.html">Trinoq
                                                Web Development
                                            </a>
                                            </h5>
                                        <p class="bk_pra">Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--3">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('assets/frontend/img/portfolio/grid/caption-3.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5">
                                            <a href="portfolio-details.html"> Trinoq
                                                Mobile App Development
                                            </a>
                                        </h5>
                                        <p class="bk_pra">Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="portfolio-33-33 cat--4">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('assets/frontend/img/portfolio/grid/caption-3.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5">
                                            <a href="portfolio-details.html">Trinoq
                                                Mobile App Development
                                            </a>
                                        </h5>
                                        <p class="bk_pra">Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->

                        <!-- Start Single Portfolio -->
                        <div class="portfolio-33-33 cat--3 cat--4">
                            <div class="portfolio with-caption">
                                <div class="thumb">
                                    <a href="portfolio-details.html">
                                        <img src="{{asset('assets/frontend/img/portfolio/grid/caption-6.jpg')}}" alt="portfolio images">
                                    </a>
                                </div>
                                <div class="caption-bottom text-center">
                                    <div class="info">
                                        <h5 class="heading heading-h5"><a href="portfolio-details.html">Trinoq
                                                Portrait Hacks</a></h5>
                                        <p class="bk_pra">Design</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Portfolio -->


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Caption -->

    <!-- Start Call To Action -->
    <div class="brook-call-to-action bg_color--13 ptb--70 bg-as-text2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="call-content text-center text-md-left text-center">
                        <h4 class="heading heading-h4 text-white">Sign up for new updates from us.</h4>
                    </div>
                </div>

                @include('message')

                <div class="col-lg-6 col-sm-12 col-12">
                    <div class="text-center text-md-right text-center mt_sm--30 mt_md--40 contact-form contact-form--4 yellow-color-2">
                    <form action="{{route('store-subscriber')}}" method="POST">
                        @csrf
                            <div class="input-box">
                                <input type="email" placeholder="Your e-mail" name="subscribers_email">
                                @if($errors->has('subscribers_email'))
                                    <strong class="text-danger">{{ $errors->first('subscribers_email') }}</strong>
                                @endif
                                <button type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call To Action -->
</main>
@endsection
