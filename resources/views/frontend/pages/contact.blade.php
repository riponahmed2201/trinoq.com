{{-- @extends('master')

@section('content')

    This is contact page
@endsection --}}


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('frontend.includes.include_css')
 
</head>

<body class="template-color-1 template-font-1">

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <header class="br_header header-default  black-logo--version haeder-fixed-width haeder-fixed-150 headroom--sticky header-mega-menu clearfix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__wrapper mr--0">
                            <!-- Header Left -->
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('assets/frontend/Logo/black_logo.png')}}" alt="Trinoq Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- Mainmenu Wrap -->
                            <div class="mainmenu-wrapper d-none d-lg-block">
                                <nav class="page_nav">
                                    <ul class="mainmenu">

                                        <li class="lavel-1 slide--megamenu"><a href="{{route('home')}}"><span>Home</span></a></li>
                                        <li class="lavel-1 slide--megamenu"><a href="#"><span>About Us</span></a></li>
                                        <li class="lavel-1 slide--megamenu"><a href="#"><span>Services</span></a></li>
                                        <li class="lavel-1 slide--megamenu"><a href="{{route('portfolio')}}"><span>Portfolio</span></a></li>
                                        <li class="lavel-1 slide--megamenu"><a href="{{route('blog')}}"><span>Blog</span></a></li>
                                        <li class="lavel-1 slide--megamenu"><a href="{{route('contact')}}"><span>Contact Us</span></a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--// Header -->

        <!-- Start Breadcaump Area -->
        <div class="breadcaump-area pt--400 pt_lg--300 pt_md--250 pt_sm--200 pb--100 bg_image--54 breadcaump-title-bar breadcaump-title-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcaump-inner text-center">
                            <h2 class="heading">Contact Us Trinoq</h2>
                            <div class="breadcrumb-insite">
                                <ul class="core-breadcaump">
                                <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="current">Contact Us Trinoq</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcaump Area -->

        <!-- Page Conttent -->
        <main class="page-content">

            <!-- Start Contact Area -->
            <div class="bk_contact_classic bg_color--1 ptb--160 ptb-md--80 ptb-sm--80">
                <div class="container">
                    <div class="row">

                        <!-- Start Single Slide -->
                        <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 wow move-up">
                            <div class="classic-address text-center">
                                <h4 class="heading heading-h4">Visit our studio at</h4>
                                <div class="desc mt--15">
                                    <p class="bk_pra line-height-2-22">2005 Stokes Isle Apt. 896, <br> Venaville 10010, USA</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Slide -->

                        <!-- Start Single Slide -->
                        <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 wow move-up mt_sm--40">
                            <div class="classic-address text-center">
                                <h4 class="heading heading-h4">Message us</h4>
                                <div class="desc mt--15">
                                    <p class="bk_pra line-height-2-22">info@yourdomain.com <br> (+68) 120034509</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Slide -->

                        <!-- Start Single Slide -->
                        <div class="col-lg-4 col-xl-4 col-md-6 col-12 col-sm-12 wow move-up mt_md--40 mt_sm--40">
                            <div class="classic-address text-center">
                                <h4 class="heading heading-h4">Follow us</h4>
                                <div class="desc mt--15">
                                    <ul class="social-icon icon-solid-rounded icon-size-medium text-center move-up wow">
                                        <li class="facebook"><a href="#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                                        <li class="twitter"><a href="#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="instagram"><a href="#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Slide -->

                    </div>
                </div>
            </div>
            <!-- End Contact Area -->
              @include('message')
            <!-- Start Contact Form  -->
            <div class="brook-contact-form-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="brook-section-title text-center mb--20">
                                <h4 class="heading heading-h4">Send us a message</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="contact-form">
                            <form id="contact-form" action="{{route('store-contact')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input name="name" type="text" placeholder="Name *">
                                            @if($errors->has('name'))
                                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 mt--20">
                                            <input name="email" type="email" placeholder="Email *">
                                            @if($errors->has('email'))
                                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 mt--20">
                                            <input type="number" name="phone" placeholder="Phone number">
                                            @if($errors->has('phone'))
                                                <strong class="text-danger">{{ $errors->first('phone') }}</strong>
                                            @endif
                                        </div>

                                        <div class="col-lg-12 mt--20">
                                            <textarea name="message" placeholder="Your message"></textarea>
                                            @if($errors->has('message'))
                                                <strong class="text-danger">{{ $errors->first('message') }}</strong>
                                            @endif
                                        </div>

                                        {{-- <div class="col-12 mt--20">
                                            <div class="check-box">
                                                <input type="checkbox" name="check" id="check">
                                                <label for="check">I agree this terms and condition.</label>
                                            </div>
                                        </div> --}}

                                        <div class="col-lg-12 mt--20">
                                            <input type="submit" value="Send message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Form  -->

        </main>
        <!--// Page Conttent -->
    </div>

    <!-- Footer -->
    @include('frontend.includes.footer')
    <!--// Footer -->


    <!--// Wrapper -->
    <!-- Js Files -->
    @include('frontend.includes.include_js')

</body>

</html>