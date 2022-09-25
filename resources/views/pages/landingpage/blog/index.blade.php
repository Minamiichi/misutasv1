@extends('layouts.landingpage')

@section('content')
<!-- Start Blog
============================================= -->
<div class="blog-area full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-8 col-md-12">
                    <div class="blog-item-box">
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item wow fadeInUp">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="/landingPage/assets/img/1500x700.png" alt="Thumb">
                                    </a>
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
                                        <a href="#">Discovery incommode earnestly no he commanded</a>
                                    </h4>
                                    <p>
                                        Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected. Incommode so intention defective at convinced. Led income months itself and houses you
                                    </p>
                                    <a class="btn circle btn-gradient btn-sm" href="{{ route('details') }}">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item wow fadeInUp">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="/landingPage/assets/img/1500x700.png" alt="Thumb">
                                    </a>
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
                                    <p>
                                        Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected. Incommode so intention defective at convinced. Led income months itself and houses you
                                    </p>
                                    <a class="btn circle btn-gradient btn-sm" href="#">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                        <!-- Single Item -->
                        <div class="single-item">
                            <div class="item wow fadeInUp">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="/landingPage/assets/img/1500x700.png" alt="Thumb">
                                    </a>
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
                                        <a href="#">Consulted admitting is power acuteness.</a>
                                    </h4>
                                    <p>
                                        Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the partiality unaffected. Incommode so intention defective at convinced. Led income months itself and houses you
                                    </p>
                                    <a class="btn circle btn-gradient btn-sm" href="#">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    </div>
                    
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-12 pagi-area text-center">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                    <aside>
                        <div class="sidebar-item search">
                            <div class="sidebar-info">
                                <form>
                                    <input type="text" name="text" class="form-control">
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="sidebar-item recent-post">
                            <div class="title">
                                <h4>Recent Post</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Participate in staff meetingness manage dedicated</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 12 Feb, 2020</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Future Plan & Strategy for Consutruction </a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 05 Jul, 2019</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">Melancholy particular devonshire alteration</a>
                                        <div class="meta-title">
                                            <span class="post-date"><i class="fas fa-clock"></i> 29 Aug, 2020</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-item category">
                            <div class="title">
                                <h4>category list</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="#">national <span>69</span></a>
                                    </li>
                                    <li>
                                        <a href="#">national <span>25</span></a>
                                    </li>
                                    <li>
                                        <a href="#">sports <span>18</span></a>
                                    </li>
                                    <li>
                                        <a href="#">megazine <span>37</span></a>
                                    </li>
                                    <li>
                                        <a href="#">health <span>12</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item gallery">
                            <div class="title">
                                <h4>Gallery</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/800x800.png" alt="thumb">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item archives">
                            <div class="title">
                                <h4>Archives</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="#">Aug 2020</a></li>
                                    <li><a href="#">Sept 2020</a></li>
                                    <li><a href="#">Nov 2020</a></li>
                                    <li><a href="#">Dec 2020</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item social-sidebar">
                            <div class="title">
                                <h4>follow us</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li class="g-plus">
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item tags">
                            <div class="title">
                                <h4>tags</h4>
                            </div>
                            <div class="sidebar-info">
                                <ul>
                                    <li><a href="#">Fashion</a>
                                    </li>
                                    <li><a href="#">Education</a>
                                    </li>
                                    <li><a href="#">nation</a>
                                    </li>
                                    <li><a href="#">study</a>
                                    </li>
                                    <li><a href="#">health</a>
                                    </li>
                                    <li><a href="#">food</a>
                                    </li>
                                    <li><a href="#">travel</a>
                                    </li>
                                    <li><a href="#">science</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <!-- End Start Sidebar -->
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection