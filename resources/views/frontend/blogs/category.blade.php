@extends('frontend.master')

@section('title','Category Page')

@section('body')
     <!-- start breadcrumb area -->
    <!-- rts breadcrumba area start -->
    <div class="echo-breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- bread crumb inner wrapper -->
                    <div class="breadcrumb-inner text-center">
                        <div class="meta">
                            <a href="#" class="prev">ECHO /</a>
                            <a href="#" class="next">{{ $blog->blogCategory->name }}</a>
                        </div>
                        <h1 class="title">{{ $blog->blogCategory->name }}</h1>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- end breadcrumb area -->


    <section class="echo-hero-section inner inner-2">
        <div class="echo-hero">
            <div class="container">
                <div class="echo-full-hero-content">
                    <div class="row gx-5 sticky-coloum-wrap">
                        <div class="col-xl-8 col-lg-8">
                            
                            
                            
                            @foreach ($blogs as $blog)
                            <div class="echo-hero-baner">
                                <div class="echo-inner-img-ct-1  img-transition-scale">
                                    <a href="{{ route('blogs.details',['id' => $blog->id]) }}"><img src="{{ asset($blog->image) }}" alt="Echo" style="height: 250px"></a>
                                </div>
                                <div class="echo-banner-texting">
                                    <h3 class="echo-hero-title text-capitalize font-weight-bold"><a href="{{ route('blogs.details',['id' => $blog->id]) }}" class="title-hover">{{ $blog->title }}</a></h3>
                                    <div class="echo-hero-area-titlepost-post-like-comment-share">
                                        <div class="echo-hero-area-like-read-comment-share">
                                            <a href="#"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                        </div>
                                        <div class="echo-hero-area-like-read-comment-share">
                                            <a href="#"><i class="fa-light fa-eye"></i> 3.5k Views</a>
                                        </div>
                                        <div class="echo-hero-area-like-read-comment-share">
                                            <a href="#"><i class="fa-light fa-arrow-up-from-bracket"></i> 1.5k Share</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <p class="echo-hero-discription">{!! $blog->description !!}</p>
                                </div>
                            </div>
                            @endforeach
                            
                            <div class="echo-de-category-show-more-btn text-center">
                                <a href="post-details.html" class="text-capitalize echo-py-btn">Show more</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 sticky-coloum-item">
                            <div class="echo-right-ct-1">
                                <div class="echo-popular-hl-img">
                                    <div class="echo-home-2-title">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="echo-home-2-main-title">
                                                    <h5 class="text-capitalize text-center">Popular Categories</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="echo-popular-item">
                                        <ul class="list-unstyled">
                                            
                                            <li><a href="category-style-1.html">
                                                    <h5>Fashion & Life Style</h5>
                                                </a></li>
                                            <li><a href="category-style-1.html">
                                                    <h5>Relationship</h5>
                                                </a></li>
                                            <li><a href="category-style-1.html">
                                                    <h5>Art & Culture</h5>
                                                </a></li>
                                            <li><a href="category-style-1.html">
                                                    <h5>Self Development</h5>
                                                </a></li>
                                            <li><a href="category-style-1.html">
                                                    <h5>travel & tourism</h5>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="echo-home-1-hero-area-top-story">
                                    <h5 class="text-center">Top Story</h5>
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-9.png" alt="Echo" class="img-hover"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h6><a href="#" class="title-hover">14 Tight Samurai Games You...</a></h6>
                                            <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                        </div>
                                    </div>
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-6.png" alt="Echo" class="img-hover"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h6><a href="#" class="title-hover">The Google Pixel Fold looks...</a></h6>
                                            <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                        </div>
                                    </div>
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-7.png" alt="Echo" class="img-hover"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h6><a href="#" class="title-hover">ChatGPT returns to Italy after ban</a></h6>
                                            <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                        </div>
                                    </div>
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-8.png" alt="Echo" class="img-hover"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h6><a href="#" class="title-hover">Avatar: The Way Of Water - how...</a></h6>
                                            <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="echo-feature-area-right-site-follower">
                                    <div class="echo-home-2-title">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="echo-home-2-main-title">
                                                    <h5 class="text-capitalize text-center">Follow Us</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled">
                                        <li><a href="#"><i class="fa-brands fa-facebook"></i>20K Fans</a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i>10K Followers</a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i>50K Followers</a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i>30K Followers</a></li>
                                        <li><a href="#"><i class="fa-brands fa-pinterest"></i>30K Followers</a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i>04K Subscriber</a></li>
                                    </ul>
                                </div>
                                <div class="echo-feature-area-right-site-newsletter">
                                    <div class="echo-feature-area-rigth-site-newsletter-title">
                                        <h4>Newsletter</h4>
                                    </div>
                                    <div class="echo-feature-area-right-site-newsletter-img">
                                        <img src="{{ asset('/') }}front/assets/images/home-1/feature-right/news-item-1.png" alt="Echo">
                                    </div>
                                    <div class="echo-feature-area-right-site-sub-title">
                                        <p>Stay Tuned With Updates</p>
                                    </div>
                                    <div class="echo-feature-area-right-site-news-subscribe">
                                        <form action="https://html.themewant.com/echo/POST">
                                            <div class="echo-feature-area-right-site-input-box">
                                                <input type="email" placeholder="Email Addresss.." required>
                                                <button type="submit"><i class="fa-regular fa-arrow-right"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="echo-ct-1-add">
                                    <div class="echo-ct-add-img">
                                        <a href="#"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-10.png" alt="Echo"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection