<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digilab - SEO & Digital Marketing Agency Template">

    <!-- ========== Page Title ========== -->
    <title>Digilab - SEO & Digital Marketing Agency Template</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ url ( '/landingPage/assets/img/favicon.png' ) }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ url ( '/landingPage/assets/css/bootstrap.min.css' ) }}" rel="stylesheet" />
    <link href="{{ url ( '/landingPage/assets/css/font-awesome.min.css' ) }}" rel="stylesheet" />
    <link href="{{ url ( '/landingPage/assets/css/themify-icons.css' ) }}" rel="stylesheet" />
    <link href="{{ url ( '/landingPage/assets/css/flaticon-set.css' ) }}" rel="stylesheet" />
    <link href="{{ url ( '/landingPage/assets/css/magnific-popup.css' ) }}" rel="stylesheet" />
    <link href="{{ url ( '/landingPage/assets/css/owl.carousel.min.css' ) }}" rel="stylesheet" />
    <link href="{{ url ( '/landingPage/assets/css/owl.theme.default.min.css' ) }}" rel="stylesheet" />
    <link href="{{ url ( '/landingPage/assets/css/animate.css' ) }}" rel="stylesheet" />
    <link href="{{ url ( '/landingPage/assets/css/bootsnav.css' ) }}" rel="stylesheet" />
    <link href="{{ url ('/landingPage/style.css') }}" rel="stylesheet">
    <link href="{{ url ( '/landingPage/assets/css/responsive.css' ) }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ url ( '/landingPage/assets/js/html5/html5shiv.min.js' ) }}"></script>
      <script src="{{ url ( '/landingPage/assets/js/html5/respond.min.js"' ) }}></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="site-preloader" class="site-preloader">
        <div class="loader-wrap">
            <div class="ring">
                <span></span>
            </div>
            <h2>MI Sukasirna</h2>
        </div>
    </div> -->
    <!-- Preloader Ends -->

    @include('components.landingPage.navbar')

    @yield('content')

    @include('components.landingPage.footer')

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ url ( '/landingPage/assets/js/jquery-1.12.4.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/popper.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/bootstrap.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/equal-height.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/jquery.appear.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/jquery.easing.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/jquery.magnific-popup.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/modernizr.custom.13711.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/owl.carousel.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/wow.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/progress-bar.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/isotope.pkgd.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/imagesloaded.pkgd.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/count-to.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/YTPlayer.min.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/progresscircle.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/bootsnav.js' ) }}"></script>
    <script src="{{ url ( '/landingPage/assets/js/main.js' ) }}"></script>

</body>
</html>