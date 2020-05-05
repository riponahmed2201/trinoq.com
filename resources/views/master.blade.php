
<!doctype html>
<html class="no-js" lang="zxx">

<head>
 @include('frontend.includes.include_css')
</head>

<body class="template-color-5 template-font-1">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Start Preloader  -->
    {{-- <div id="page-preloader" class="page-loading clearfix">
        <div class="page-load-inner">
            <div class="preloader-wrap">
                <div class="wrap-2">
                <div class=""> <img src="{{asset('assets/frontend/img/icons/brook-preloader.gif')}}" alt="Brook Preloader"></div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Preloader  -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        @include('frontend.includes.header')
        <!--// Header -->
        <!-- Page Conttent -->
            @yield('content')
        <!--// Page Conttent -->
    </div>


    <!-- Footer -->

    <!--// Footer -->
    @include('frontend.includes.footer')

    <!--// Wrapper -->

    <!-- Js Files -->

    @include('frontend.includes.include_js')

</body>

</html>
