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
    <title>Dashboard 4</title>

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
        @include('components.admin.navbar')

        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="alert-wrap p-t-70 p-b-70">
                <div class="container">
                    <!-- ALERT-->
                    @include('components.admin.alert')
                    <!-- END ALERT-->
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li>
                                            <a href="{{ route('dashboard.admindashboard.index') }}">
                                                <i class="fas fa-chart-bar"></i>Dashboard</a>
                                        <li>
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-archive"></i>Kelembagaan 
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="{{ route('dashboard.teacher.index') }}">Data Guru</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-list-alt"></i>Akademik 
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="{{ route('dashboard.inmutation.index') }}">Mutasi Masuk</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('dashboard.outmutation.index') }}">Mutasi Keluar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-credit-card"></i>Administrasi 
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="{{ route('dashboard.payment.index') }}">Pembayaran</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('dashboard.saving.index') }}">Tabungan</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="js-arrow" href="#">
                                                <i class="fas fa-users"></i>Data Siswa 
                                                <span class="arrow">
                                                    <i class="fas fa-angle-down"></i>
                                                </span>
                                            </a>
                                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                <li>
                                                    <a href="{{ route('dashboard.student.index') }}">Semua Siswa</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('dashboard.room.index') }}">Data Kelas</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="js-arrow" href="{{ route('dashboard.alumni.index') }}">
                                                <i class="fas fa-group"></i>Alumni
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-arrow" href="{{ route('dashboard.blog.index') }}">
                                                <i class="fas fa-book"></i>Article
                                            </a>
                                        </li>
                                        <li>
                                            <a class="js-arrow" href="{{ route('dashboard.user.index') }}">
                                                <i class="fas fa-user"></i>User
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>

                        

                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->
                            <div class="page-content">
                                @yield('content')
                                
                                @include('components.admin.footer')
                            </div>
                            <!-- END PAGE CONTENT-->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END PAGE CONTENT  -->

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
     {{ $script ?? '' }}

</body>

</html>
<!-- end document-->