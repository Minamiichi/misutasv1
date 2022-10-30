<!-- HEADER DESKTOP-->
<header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
        <div class="header3-wrap">
            <div class="header__logo">
                <a href="{{ route('index') }}">
                    <img src="{{ url('/landingPage/assets/img/mi.png') }}" width="174px" height="50px" alt="CoolAdmin" />
                </a>
            </div>
            <div class="header__navbar">
                <ul class="list-unstyled">
                    @if (Auth::user()->roles == 'ADMIN')
                        <li class="dropdown">
                            <a href="{{ route('dashboard.admindashboard.index') }}" class="">DASHBOARD</a>
                        </li>  
                    @endif
                    <li class="dropdown">
                        <a href="{{ route('dashboard.ppdb.index') }}" class="">Home</a>
                    </li> 
                    @if (Auth::user()->status == 'ACTIVE')
                        <li class="dropdown">
                            <a href="{{ route('dashboard.saving.index') }}" class="">Tabungan</a>
                        </li> 
                        <li class="dropdown">
                            <a href="{{ route('dashboard.payment.index') }}" class="">Pembayaran</a>
                        </li>
                    @endif 
                </ul>
            </div>
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="{{ url('/admin/images/icon/avatar-01.jpg') }}" alt="{{ Auth::user()->name }}" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="{{ url('/admin/images/icon/avatar-01.jpg') }}" alt="{{ Auth::user()->name }}" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">{{ Auth::user()->name }}</a>
                                    </h5>
                                    <span class="email">{{ Auth::user()->email }}</span>
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
                    <img src="{{ url('/landingPage/assets/img/mi.png') }}" width="174px" height="50px" alt="CoolAdmin" />
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
                    <img src="{{ url('/admin/images/icon/avatar-01.jpg') }}" alt="{{ Auth::user()->name }}" />
                </div>
                <div class="content">
                    <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                </div>
                <div class="account-dropdown js-dropdown">
                    <div class="info clearfix">
                        <div class="image">
                            <a href="#">
                                <img src="{{ url('/admin/images/icon/avatar-01.jpg') }}" alt="{{ Auth::user()->name }}" />
                            </a>
                        </div>
                        <div class="content">
                            <h5 class="name">
                                <a href="#">{{ Auth::user()->name }}</a>
                            </h5>
                            <span class="email">{{ Auth::user()->email }}</span>
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