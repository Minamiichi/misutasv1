@extends('layouts.landingpage')

@section('content')
   
<!-- Start Banner 
============================================= -->
<div class="banner-area with-fixed-nav">
    <div class="shape-right-bottom shape opacity-default">
        <img src="/landingPage/assets/img/shape/13.png" alt="Shape">
    </div>
    <div class="container">
        <div class="double-items">
            <div class="row align-center">

                <div class="col-lg-6 order-last thumb width-130 wow fadeInRight" data-wow-duration="1s">
                    <img src="/landingPage/assets/img/illustration/wp5593534.jpg" width="519px" height="477px" alt="Thumb">
                </div>

                <div class="col-lg-6 info">
                    <h2 class="wow fadeInDown" data-wow-duration="1s">Madrasah Ibtidaiyah<strong> Sukasirna</strong> </h2>
                    <p class="wow fadeInLeft" data-wow-duration="1.5s">
                        Jl. Perintis Kemerdekaan Belakang No 55, Mangkubumi Kota Tasikmalaya
                    </p>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->
<!-- Start Fun Factor Area
    ============================================= -->
    <div class="fun-factor-area default-padding-top">
        <div class="container">
            <div class="client-items text-center">
                <div class="row">
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="{{ $teachers }}" data-speed="5000">{{ $teachers }}</div>
                            <span class="medium">Guru</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="{{ $students }}" data-speed="5000">{{ $students }}</div>
                            <span class="medium">Murid</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="{{ $rooms }}" data-speed="5000">{{ $rooms }}</div>
                            <span class="medium">Kelas</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="fun-fact">
                            <div class="timer" data-to="{{ $alumnus }}" data-speed="5000">{{ $alumnus }}</div>
                            <span class="medium">Alumni</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor Area -->

<!-- Start Testimonials
============================================= -->
<!-- Start Process Area
============================================= -->
<div class="process-area default-padding-top" id="tentang">
    <div class="container">
        <div class="process-items">
            <div class="row align-center">

                <div class="col-lg-6 thumb wow fadeInLeft">
                    <img src="/landingPage/assets/img/illustration/3.png" alt="Thumb">
                </div>

                <div class="col-lg-6 info wow fadeInUp">
                    <h2>Tentang  <strong>Madrasah Ibtidaiyah Sukasirna</strong></h2>
                    <div class="content">
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <h4><strong>01.</strong> Visi</h4>
                            <p>
                                Terwujudnya MI Unggulan Yang Mampu Mencetak Siswa Yang Berprestasi dan Berakhlakul Karimah
                            </p>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-angle-right"></i>
                            </div>
                            <h4><strong>02.</strong> Misi</h4>
                            <p>
                                <li>Membudayakan 5 (S) Yaitu Senyum, Salam, Santun, Sapa dan Sayang.</li>
                                <li>Mewujudkan Lulusan yang Giat Beribadah dan Berakhlak mulia sesuai ajaran Al-Qur’an dan Hadist.</li>
                                <li>Menjadikan disiplin kerja sebagai motor penggerak keberhasilan mutu pendidikan.</li>
                                <li>Mewujudkan Manajemen Pendidikan dan Kurikulum Madrasah yang lengkap, tepat dan berwawasan kedepan.</li>
                            </p>
                        </div>
                        <a class="btn circle btn-theme border btn-sm" href="{{ route('about') }}">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<!-- End Process Area -->

<div class="testimonials-area default-padding">
    <div class="container">
        <div class="testimonial-items">
            <div class="row align-center">
                <div class="col-lg-5 wow fadeInLeft">
                    <div class="client-thumb">
                        <img src="/landingPage/assets/img/100x100.png" alt="Thumb">
                        <img src="/landingPage/assets/img/100x100.png" alt="Thumb">
                        <img src="/landingPage/assets/img/100x100.png" alt="Thumb">
                        <img src="/landingPage/assets/img/800x800.png" alt="Thumb">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 testimonial-content wow fadeInRight">
                    <div class="heading">
                        <h2>Sambutan <br> Kepala Madrasah &amp; Ketua Yayasan</h2>
                    </div>
                    <div class="testimonials-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                        <div class="item">
                            <p>
                                Tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham. No waiting in on enjoyed placing it inquiry. Tried known to as my to. Though wished merits or be. Alone visit use these smart. 
                            </p>
                            <div class="author">
                                <div class="info">
                                    <h5>Droila Abhi</h5>
                                    <span>Kepala Madrasah</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="item">
                            <p>
                                Tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham. No waiting in on enjoyed placing it inquiry. Tried known to as my to. Though wished merits or be. Alone visit use these smart. 
                            </p>
                            <div class="author">
                                <div class="info">
                                    <h5>Droila Abhi</h5>
                                    <span>Ketua Yayasan A</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <div class="item">
                            <p>
                                Tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham. No waiting in on enjoyed placing it inquiry. Tried known to as my to. Though wished merits or be. Alone visit use these smart. 
                            </p>
                            <div class="author">
                                <div class="info">
                                    <h5>Droila Abhi</h5>
                                    <span>Ketua Yayasan B</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials Area -->

<!-- Start Blog
============================================= -->
<div class="blog-area default-padding bottom-less bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Berita Terkini</h5>
                    <h2>Stay Update with Anada from <br> latest & popular News</h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>
        <div class="blog-items content-less">
            <div class="row">
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="600ms">
                        <div class="thumb">
                            <a href="#"><img src="/landingPage/assets/img/800x600.png" alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="tags">
                                <a href="#">SEO</a>
                                <a href="#">Analysis</a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 18 Nov, 2020</li>
                                    <li>By <a href="#">Park Lee</a></li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Consulted admitting is power acuteness. </a>
                            </h4>
                            <a class="btn circle btn-theme border btn-sm" href="#">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="600ms">
                        <div class="thumb">
                            <a href="#"><img src="/landingPage/assets/img/800x600.png" alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="tags">
                                <a href="#">Performance</a>
                                <a href="#">High</a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 05 Dec, 2020</li>
                                    <li>By <a href="#">Park Lee</a></li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Unsatiable entreaties may collecting Power.</a>
                            </h4>
                            <a class="btn circle btn-theme border btn-sm" href="#">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item wow fadeInUp" data-wow-delay="600ms">
                        <div class="thumb">
                            <a href="#"><img src="/landingPage/assets/img/800x600.png" alt="Thumb"></a>
                        </div>
                        <div class="info">
                            <div class="tags">
                                <a href="#">Affiliate</a>
                                <a href="#">Process</a>
                            </div>
                            <div class="meta">
                                <ul>
                                    <li><i class="fas fa-calendar-alt"></i> 26 Sep, 2020</li>
                                    <li>By <a href="#">Park Lee</a></li>
                                </ul>
                            </div>
                            <h4>
                                <a href="#">Consulted admitting is power acuteness. </a>
                            </h4>
                            <a class="btn circle btn-theme border btn-sm" href="#">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->
@endsection