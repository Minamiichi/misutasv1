<!-- Header ============================================= -->
<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default attr-bg navbar-fixed dark no-background bootsnav">

        <!-- Start Top Search -->
        <div class="container">
            <div class="row">
                <div class="top-search">
                    <div class="input-group">
                        <form action="#">
                            <input type="text" name="text" class="form-control" placeholder="Search">
                            <button type="submit">
                                <i class="ti-search"></i>
                            </button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav extra-color">
                <ul>
                    <li class="side-menu"><a href="#"><i class="fas fa-th-large"></i></a></li>
                </ul>
            </div>        
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ url('/landingPage/assets/img/mi.png') }}" width="174px" height="50px" class="logo" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown">
                        <a href="{{ route('index') }}" class="">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('about') }}" class="">Tentang</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('infoPpdb') }}" class="">PPDB</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{ route('blog') }}" class="">Blog</a>
                    </li>
                    <li>
                        <a href="#kontak">Contact</a>
                    </li>
                    @auth
                        @if (Auth::user()->roles == 'SISWA')
                            <li class="dropdown">
                                <a href="{{ route('siswa') }}" class="">SISWA</a>
                            </li>  
                        @endif
                        @if (Auth::user()->roles == 'ADMIN')
                            <li class="dropdown">
                                <a href="{{ route('dashboard.index') }}" class="">DASHBOARD</a>
                            </li>  
                        @endif
                    @endauth
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

        <!-- Start Side Menu -->
        <div class="side">
            <a href="#" class="close-side"><i class="ti-close"></i></a>
            <div class="widget">
                <h4 class="title">Additional Links</h4>
                <ul class="">
        
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
            <div class="widget social">
                <h4 class="title">Connect With Us</h4>
                <ul class="link">
                    <li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- End Side Menu -->

    </nav>
    <!-- End Navigation -->

</header>
<!-- End Header -->
