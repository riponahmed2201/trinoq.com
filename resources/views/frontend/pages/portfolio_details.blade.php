
@extends('master')

@section('content')

        <!-- Start Breadcaump Area -->
        <div class="breadcaump-area pt--150 pt_lg--150 pt_md--150 pt_sm--150 pb--40 bg_image--54 breadcaump-title-bar breadcaump-title-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading">Portfolio Details</h2>
                            <div class="breadcrumb-insite">
                                <ul class="core-breadcaump">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{route('portfolio-details')}}">Portfolio</a></li>
                                    <li class="current">Portfolio Details</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->

<main class="page-content">

    <!-- Start Portfolio Details -->
    <div class="brook-portfolio-details bg_color--1">
        <div class="container">
            <div class="row pt--100 pb--80">

                <!-- Portfolio Left -->
                <div class="col-lg-8 col-12">
                    <div class="portfolio-right portfolio-details-gallery text-left">

                        <!-- Start Portfolio Image -->
                        <div class="portfolio-image mb--50">
                        <img src="{{asset('assets/frontend/img/portfolio/big-image/gallery-4.jpg')}}" alt="portfolio">
                        </div>
                        <!-- End Portfolio Image -->

                        <!-- Start Portfolio Image -->
                        <div class="portfolio-image mb--50">
                            <img src="{{asset('assets/frontend/img/portfolio/big-image/gallery-5.jpg')}}" alt="portfolio">
                        </div>
                        <!-- End Portfolio Image -->

                        <!-- Start Portfolio Image -->
                        <div class="portfolio-image">
                            <img src="{{asset('assets/frontend/img/portfolio/big-image/gallery-6.jpg')}}" alt="portfolio">
                        </div>
                        <!-- End Portfolio Image -->

                    </div>
                </div>

                <div class="col-lg-4 col-12 mt_md--40 mt_sm--40">
                    <div class="portfolio-left bk-portfolio-details">
                        <div class="portfolio-main-info">
                            <h3 class="heading heading-h3 line-height-1-42">Web Comic Landscape</h3>
                            <div class="portfolio-content mt--75 mb--75 mt_md--40 mb_md--40 mt_sm--40 mb_sm--40">
                                <h6 class="heading heading-h6">ABOUT THE PROJECT</h6>
                                <div class="desc mt--20">
                                    <p class="bk_pra">Not only are comics available in printed form, but
                                        they’re also available digitally. Printed, on the web, or on an app?
                                        Where do you start? If you have a hard time choosing what to read and
                                        where to read it, you’re not alone, because the choices are limitless.
                                        With print and web and digital options, we now have so many comic
                                        books. (Source: howdesign.com)</p>
                                </div>
                            </div>
                            <!-- Start Details List -->
                            <div class="portfolio-details-list">

                                <div class="details-list">
                                    <label>Date</label>
                                    <span>28 Sep 2007</span>
                                </div>

                                <div class="details-list">
                                    <label>Client</label>
                                    <span>HighGrove Partners</span>
                                </div>

                                <div class="details-list">
                                    <label>Categories</label>
                                    <span><a href="#">Digital</a></span>
                                </div>

                                <div class="details-list">
                                    <label>Awards</label>
                                    <span>2015 Cambridge Impressive Design 2016 Best Design of the Year</span>
                                </div>

                            </div>
                            <!-- End Details List -->
                            <!-- Start Portfolio Share -->
                            <div class="portfolio-share pt--70 pt_md--40 pt_sm--40">
                                <h6 class="heading heading-h6">SHARE</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Right -->

            </div>
        </div>

        <div class="container bg_color--1">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Portfolio Nav List -->
                    <div class="portfolio-nav-list pt--50 pb--150 pb_md--80 pb_sm--60 pt_md--5 pt_sm--5">
                        <div class="portfolio-page prev">
                            <div class="inner">
                                <a href="#">
                                    <p>Prev</p>
                                    <h3 class="heading heading-h3">Awe-inspiring <br> Projects</h3>
                                </a>
                            </div>
                        </div>
                        <div class="portfolio-page next mt_sm--30">
                            <div class="inner">
                                <a href="#">
                                    <p>Next</p>
                                    <h3 class="heading heading-h3">B-sharp High-end <br> Audio</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Nav List -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio Details -->

</main>
@endsection
