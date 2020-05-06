@extends('master')

@section('content')

        <!-- Start Breadcaump Area -->
        <div class="breadcaump-area pt--100 pt_lg--100 pt_md--100 pt_sm--100 pb--40  breadcaump-title-bar breadcaump-title-black">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading">Portfolio</h2>
                            <div class="breadcrumb-insite">
                                <ul class="core-breadcaump">
                                <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="current">Portfolio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->

<main class="page-content">

    <!-- Start Portfolio Area -->
    <div class="brook-portfolio-area pt--50 bg_color--1 bk-masonary-wrapper">


        <div class="messonry-button text-center">
            <button data-filter="*" class="is-checked"><span class="filter-text">All</span> <span class="filter-counter">All</span></button>
            <button data-filter=".cat--1"><span class="filter-text">Graphic Design</span> <span class="filter-counter">1</span></button>
            <button data-filter=".cat--2"><span class="filter-text">Web Development</span> <span class="filter-counter">2</span></button>
            <button data-filter=".cat--3"><span class="filter-text"> Mobile App Development</span> <span class="filter-counter">3</span></button>
            <button data-filter=".cat--4"><span class="filter-text">Desktop Application</span> <span class="filter-counter">4</span></button>
        </div>


        <div class="portfolio-grid-metro2 mesonry-list mt--70">

            <div class="resizer"></div>

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 cat--1 cat--4">
                <div class="thumb">
                <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-1.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                        <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">The Language of Designs</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 cat--2 cat--4">
                <div class="thumb">
                    <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-2.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                    <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">B-sharp High-end Audio</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 cat--1">
                <div class="thumb">
                    <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-3.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                        <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">Smart Sound System</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 cat--2 cat--4">
                <div class="thumb">
                    <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-4.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                        <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">Awe-inspiring Projects</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 cat--1">
                <div class="thumb">
                    <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-5.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                        <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">Gifts for Photography
                                Lovers</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 cat--3 cat--4">
                <div class="thumb">
                    <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-6.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                        <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">Enchanting Portrait
                                Hacks</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 grid-width-2 cat--3">
                <div class="thumb">
                    <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-7.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                        <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">Digital Marketing
                                Basics</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 cat--3 cat--4">
                <div class="thumb">
                    <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-8.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                        <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">Measure Digital
                                Progress</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->

            <!-- Start Single Portfolio -->
            <div class="portfolio portfolio_style--1 portfolio-20 cat--3">
                <div class="thumb">
                    <img src="{{asset('assets/frontend/img/portfolio/grid/grid-metro2-9.jpg')}}" alt="Portfolio Images">
                </div>
                <div class="port-overlay-info">
                    <div class="hover-action">
                        <h3 class="post-overlay-title"><a href="{{route('portfolio-details')}}">Resize Image Using
                                Photoshop</a></h3>
                    </div>
                </div>
            </div>
            <!-- End Single Portfolio -->
        </div>
    </div>
    <!-- End Portfolio Area -->


</main>
@endsection
