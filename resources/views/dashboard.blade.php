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
    <title>Dashboard 3</title>

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
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="{{ route('index') }}">
                            <img src="{{ url('/admin/images/icon/logo-white.png') }}" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            @if (Auth::user()->roles == 'ADMIN')
                                <li class="dropdown">
                                    <a href="{{ route('dashboard.admindashboard.index') }}" class="">DASHBOARD</a>
                                </li>  
                            @endif
                            
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="{{ url('/admin/images/icon/avatar-01.jpg') }}" alt="{{ $user->name }}" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{ $user->name }}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="{{ url('/admin/images/icon/avatar-01.jpg') }}" alt="{{ $user->name }}" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{ $user->name }}</a>
                                            </h5>
                                            <span class="email">{{ $user->email }}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="{{ route('profile.show') }}">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="{{ url('/admin/images/icon/logo-white.png') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        @if (Auth::user()->roles == 'ADMIN')
                            <li class="dropdown">
                                <a href="{{ route('dashboard.admindashboard.index') }}" class="">DASHBOARD</a>
                            </li>  
                        @endif
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="{{ url('/admin/images/icon/avatar-01.jpg') }}" alt="{{ $user->name }}" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{ $user->name }}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="{{ url('/admin/images/icon/avatar-01.jpg') }}" alt="{{ $user->name }}" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{ $user->name }}</a>
                                    </h5>
                                    <span class="email">{{ $user->email }}</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="{{ route('profile.show') }}">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back 
                                <span>{{ $user->name }}!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">10,368</h2>
                                <span class="desc">members online</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">388,688</h2>
                                <span class="desc">items sold</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">1,086</h2>
                                <span class="desc">this week</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">$1,060,386</h2>
                                <span class="desc">total earnings</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Informasi</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART-->
                            <div class="card">
                                <img class="card-img-top" src="{{ url('/admin/images/snk.png') }}" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title mb-3">Syarat Dan Ketentuan</h4>
                                    <li>Surat Keterangan Lulus</li>
                                    <li>Ijasah Jenjang Sebelumnya</li>
                                    <li>Kartu Keluarga</    li>
                                    <li>Akte Kelahiran</li>
                                    <li>Scan Rapot</li>
                                </div>
                            </div>
                            <!-- END CHART-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- TOP CAMPAIGN-->
                            <div class="card">
                                <img class="card-img-top" src="{{ url('/admin/images/informasi.png') }}" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title mb-3">Berkas Yang Diperlukan</h4>
                                <li>Photocopy Kartu Keluarga</li>
                                <li>Photocopy Akta Kelahiran</li>
                                <li>Photocopy Raport Terakhir</li>
                                <li>Photocopy KIP,PKH (Jika ada)</li>
                                <li>Photocopy Ijazah (Jika sudah ada)</li>
                                </div>
                            </div>
                            <!-- END TOP CAMPAIGN-->
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- CHART PERCENT-->
                            <div class="card">
                                <img class="card-img-top" src="{{ url('/admin/images/alur.png') }}" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title mb-3">Alur Pendaftaram</h4>
                                <li>Daftar Akun</li>
                                <li>Lengkap Formulir Pendaftaran</li>
                                <li>Unggah Berkas</li>
                                </div>
                            </div>
                            <!-- END CHART PERCENT-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">data table</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-right">
                                    <a href="{{ route('dashboard.ppdb.create') }}">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>add item</button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>NISN</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Foto</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ppdbs as $ppdb)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $ppdb->nisn }}</td>
                                                <td>{{ $ppdb->name }}</td>
                                                <td>{{ $ppdb->birhtdate }}</td>
                                                <td>{{ $ppdb->gender }}</td>
                                                <td>{{ $ppdb->religion }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
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

</body>

</html>
<!-- end document-->
