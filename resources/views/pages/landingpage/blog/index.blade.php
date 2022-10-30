@extends('layouts.landingpage')

@section('content')
<!-- Start Blog
============================================= -->
<div class="blog-area full-blog right-sidebar full-blog default-padding">
    <div class="container">
        <div class="blog-items">
            <div class="row">
                <div class="blog-content col-lg-8 col-md">
                    <div class="blog-item-box">
                        <!-- Single Item -->
                        @foreach ($blogs as $blog)                  
                            <div class="single-item">
                                <div class="item wow fadeInUp">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ $blog->galleries()->exists() ? Storage::url($blog->galleries->first()->url) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <div class="tags">
                                            <a href="#">SEO</a>
                                            <a href="#">Analysis</a>
                                        </div>
                                        <div class="meta">
                                            <ul>
                                                <li><i class="fas fa-calendar-alt"></i> {{  \Carbon\Carbon::parse($blog->created_at)->translatedFormat('l, d F Y'); }}</li>
                                                <li>By <a href="#">Park Lee</a></li>
                                            </ul>
                                        </div>
                                        <h4>
                                            <a href="#">{{ $blog->title }}</a>
                                        </h4>
                                        <span>
                                            <p>
                                                {!! Str::limit($blog->body, 50) !!}
                                            </p>
                                        </span>
                                        <a class="btn circle btn-gradient btn-sm" href="{{ url('blog/details', $blog->slug) }}">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- End Single Item -->
                    </div>
                    
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-md-9 pagi-area text-center">
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
                <div class="sidebar col-lg-4 col-md">
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
                                        <a href="#">sports <span>16</span></a>
                                    </li>
                                    <li>
                                        <a href="#">megazine <span>37</span></a>
                                    </li>
                                    <li>
                                        <a href="#">health <span>9</span></a>
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
                                            <img src="/landingPage/assets/img/600x600.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/600x600.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/600x600.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/600x600.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/600x600.png" alt="thumb">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/landingPage/assets/img/600x600.png" alt="thumb">
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