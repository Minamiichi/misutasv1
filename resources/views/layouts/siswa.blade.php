<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
<<<<<<< HEAD
    <title>MISUTAS</title>
=======
    <title>Misutas-Siswa</title>
>>>>>>> 273037115cc506db60b351d14504a9642039b2c2

    <!-- Fontfaces CSS-->
    <link href="{{ url('/admin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ url('/admin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ url('/admin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ url('/admin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ url('/admin/css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('components.siswa.navbar')

        
        
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            @yield('content')
           

            @include('components.siswa.footer')
            
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{ url('/admin/vendor/jquery-3.2.1.min.js') }} "></script>
    <!-- Bootstrap JS-->
    <script src="{{ url('/admin/vendor/bootstrap-4.1/popper.min.js') }} "></script>
    <script src="{{ url('/admin/vendor/bootstrap-4.1/bootstrap.min.js') }} "></script>
    <!-- Vendor JS       -->
    <script src="{{ url('/admin/vendor/slick/slick.min.js') }} ">
    </script>
    <script src="{{ url('/admin/vendor/wow/wow.min.js') }} "></script>
    <script src="{{ url('/admin/vendor/animsition/animsition.min.js') }} "></script>
    <script src="{{ url('/admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }} ">
    </script>
    <script src="{{ url('/admin/vendor/counter-up/jquery.waypoints.min.js') }} "></script>
    <script src="{{ url('/admin/vendor/counter-up/jquery.counterup.min.js') }} ">
    </script>
    <script src="{{ url('/admin/vendor/circle-progress/circle-progress.min.js') }} "></script>
    <script src="{{ url('/admin/vendor/perfect-scrollbar/perfect-scrollbar.js') }} "></script>
    <script src="{{ url('/admin/vendor/chartjs/Chart.bundle.min.js') }} "></script>
    <script src="{{ url('/admin/vendor/select2/select2.min.js') }} ">
    </script>

    <!-- Main JS-->
    <script src="{{ url('/admin/js/main.js') }}"></script>
    <script>
        document.forms['myFirstForm'].addEventListener('submit', function (event) {
            // Do something with the form's data here
            this.style['display'] = 'none';
            event.preventDefault();/*w  w w.  j av  a2s.c  o  m*/
        });
    
      </script> 

</body>

</html>
<!-- end document-->
