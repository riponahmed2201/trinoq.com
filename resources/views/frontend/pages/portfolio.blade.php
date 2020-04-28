@extends('master')

@section('content')
<main class="page-content">

    <!-- Start Portfolio Area -->
    <div class="brook-portfolio-area pt--50 bg_color--1 bk-masonary-wrapper">


        <div class="messonry-button text-center">
            <button data-filter="*" class="is-checked"><span class="filter-text">All</span> <span class="filter-counter">9</span></button>
            <button data-filter=".cat--1"><span class="filter-text">Creative</span> <span class="filter-counter">3</span></button>
            <button data-filter=".cat--2"><span class="filter-text">Design</span> <span class="filter-counter">2</span></button>
            <button data-filter=".cat--3"><span class="filter-text">Digital</span> <span class="filter-counter">4</span></button>
            <button data-filter=".cat--4"><span class="filter-text">Photography</span> <span class="filter-counter">5</span></button>
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">The Language of Designs</a></h3>
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">B-sharp High-end Audio</a></h3>
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">Smart Sound System</a></h3>
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">Awe-inspiring Projects</a></h3>
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">Gifts for Photography
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">Enchanting Portrait
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">Digital Marketing
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">Measure Digital
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
                        <h3 class="post-overlay-title"><a href="portfolio-details.html">Resize Image Using
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
