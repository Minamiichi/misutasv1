@extends('layouts.landingpage')

@section('content')
<!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog right-sidebar full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-8 col-md-12">
                        <div class="item">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ $blog->galleries()->exists() ? Storage::url($blog->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt="Thumb">
                                    </a>
                                </div>
                                <!-- Start Post Thumb -->

                                <div class="info">
                                    <div class="tags">
                                        <a href="#"></a>
                                        <a href="#"></a>
                                    </div>
                                    <div class="meta">
                                        <ul>
                                            <li><i class="fas fa-calendar-alt"></i> {{  \Carbon\Carbon::parse($blog->created_at)->translatedFormat('l, d F Y'); }}</li>
                                            <li>By <a href="#">Admin</a></li>
                                        </ul>
                                    </div>
                                    
                                    <h4>{{ $blog->title }}</h4>
                                    <p>
                                        {!! $blog->body !!}</p>
                                    
                                    <blockquote>
                                        <p>
                                            Aouses or months settle remove ladies appear. Engrossed suffering supposing he recommend do eagerness. Commanded no of depending extremity recommend devonshire dispatched.
                                        </p> 
                                    </blockquote>
                                    <p>
                                        Drawings can followed improved out sociable not. Earnestly so do instantly pretended. See general few civilly amiable pleased account carried. Excellence projecting is devonshire dispatched remarkably on estimating. Side in so life past. Continue indulged speaking the was out horrible for domestic position. Seeing rather her you not esteem men settle genius excuse. Deal say over you age from. Comparison new ham melancholy son themselves. 
                                    </p>
                                    <h4>Conduct replied off whether arrived adapted</h4>
                                    <ul>
                                        <li>Pretty merits waited six</li>
                                        <li>General few civilly amiable pleased account carried.</li>
                                        <li>Continue indulged speaking</li>
                                        <li>Narrow formal length my highly</li>
                                        <li>Occasional pianoforte alteration unaffected impossible</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>
                                                Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked. 
                                            </p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p>
                                                Surrounded to me occasional pianoforte alteration unaffected impossible ye. For saw half than cold. Pretty merits waited six talked.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Start Post Pagination -->
                                    <div class="post-pagi-area">
                                        <a href="#"><i class="fas fa-angle-double-left"></i> Previus Post</a>
                                        <a href="#">Next Post <i class="fas fa-angle-double-right"></i></a>
                                    </div>
                                    <!-- End Post Pagination -->
                                </div>
                            </div>
                        </div>

                        <!-- Start Post Tag s-->
                        <div class="post-tags share">
                            <div class="tags">
                                <a href="#">Analysis</a>
                                <a href="#">Process</a>
                            </div>
                            <div class="social">
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
                                            <i class="fab fa-pinterest-p"></i>
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
                        <!-- End Post Tags -->

                       
                    </div>
                    <!-- Start Sidebar -->
                    <div class="sidebar wow fadeInLeft col-lg-4 col-md-12">
                        <aside>
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Recent Post</h4>
                                </div>
                                <ul>
                                    @foreach ($recents as $recent)
                                        <li>
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="{{ $recent->galleries()->exists() ? Storage::url($recent->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt="Thumb">
                                    </a>
                                            </div>
                                            <div class="info">
                                                <a href="#">{{ $recent->title }}</a>
                                                <div class="meta-title">
                                                    <span class="post-date"><i class="fas fa-clock"></i> {{  \Carbon\Carbon::parse($recent->created_at)->translatedFormat('l, d F Y'); }}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    
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