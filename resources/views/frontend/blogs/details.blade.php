@extends('frontend.master')

@section('title','Blog Details Page')

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
                            <a href="#" class="next">Single News</a>
                        </div>
                        <h1 class="title">Standard Style 02</h1>
                    </div>
                    <!-- bread crumb inner wrapper end -->
                </div>
            </div>
        </div>
    </div>
    <!-- rts breadcrumba area end -->
    <!-- end breadcrumb area -->
    <section class="echo-hero-section inner inner-post inner-post-2">
        <div class="echo-hero">
            <div class="container">
                <div class="echo-full-hero-content">
                    <div class="row gx-5 sticky-coloum-wrap">
                        <div class="col-xl-8 col-lg-8">
                            <div class="echo-hero-baner">
                                <span class="content-catagory-tag">{{ $blog->blogCategory->name }}</span>
                                <h2 class="echo-hero-title text-capitalize font-weight-bold"><a href="#" class="title-hover">{{ $blog->title }}</a></h2>
                                <div class="echo-hero-area-titlepost-post-like-comment-share">
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="#"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                    </div>
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="#"><i class="fa-light fa-eye"></i> 3.5k Views</a>
                                    </div>
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="#"><i class="fa-light fa-comment-dots"></i> 05 Comment</a>
                                    </div>
                                    <div class="echo-hero-area-like-read-comment-share">
                                        <a href="#"><i class="fa-light fa-arrow-up-from-bracket"></i> 1.5k Share</a>
                                    </div>
                                </div>
                                <div class="echo-inner-img-ct-1  img-transition-scale">
                                    <a href="#"><img src="{{ asset($blog->image) }}" alt="Echo" class="echo-post-style-3-hero-banner"></a>
                                </div>
                                <p class="echo-hero-discription">{!! $blog->description !!}
                                </p>
                                
                            </div>
                            <div class="echo-financial-area">
                                <div class="content">
                                    <h3 class="title">Advance Features</h3>
                                    <ul class="content-wrapper first">
                                        <li class="wrapper-item">Mattis nun blandit libero the sed</li>
                                        <li class="wrapper-item">Eget duis at tellus at urna</li>
                                        <li class="wrapper-item">Tellus pellentesque eu tincidunt.</li>
                                        <li class="wrapper-item">Mattis nunc blandit libero sed.</li>
                                        <li class="wrapper-item">Tincidunt eget nullam non est sit</li>
                                        <li class="wrapper-item">Tortor id aliquet lectus proin</li>
                                    </ul>
                                    
                                    
                                    <p class="desc">Condimentum id venenatis a condimentum vitae. Non curabitur gravida arcu ac tortor dignissim way convallis aenean et. Amet est placerat in egestas erat imperdiet sed euismod nisi. Lectus magna fringilla urna porttitor rhoncus dolor purus non enim. Sapien eget mi proin sed libero enim sed for faucibus turpis. A condimentum vitae sapien pellentesque habitant morbi tristique senectus et. Risk Tincidunt eget nullam non nisi est sit. Commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    <div class="row  align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="details-tag">
                                                <h6>Tags:</h6>
                                                <button>Finance</button>
                                                <button>Economic</button>
                                                <button>Bank</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="details-share">
                                                <h6>Share:</h6>
                                                <button><i class="fab fa-facebook-f"></i></button>
                                                <button><i class="fab fa-twitter"></i></button>
                                                <button><i class="fab fa-instagram"></i></button>
                                                <button><i class="fab fa-linkedin-in"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="echo-author-area">
                                <div class="image-area">
                                    <img src="{{ asset('/') }}front/assets/images/home-1/trending-left/lady.png" alt="author">
                                </div>
                                <div class="content">
                                    <h5 class="title">Alex Olimiya</h5>
                                    <p class="desc">I am an Example Writer. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labored et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                            <div class="echo-more-news-area">
                                <h3 class="title">You Might Also Like</h3>
                                <div class="inner">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="echo-top-story">
                                                <div class="echo-story-picture img-transition-scale">
                                                    <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/home-1/trending-left/item-9.png" alt="Echo" class="img-hover"></a>
                                                </div>
                                                <div class="echo-story-text">
                                                    <h6><a href="#" class="title-hover">ChatGPT returns to Italy after ban</a></h6>
                                                    <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="echo-top-story">
                                                <div class="echo-story-picture img-transition-scale">
                                                    <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/home-1/trending-left/item-10.png" alt="Echo" class="img-hover"></a>
                                                </div>
                                                <div class="echo-story-text">
                                                    <h6><a href="#" class="title-hover">Meta to wind down NFTs on platforms...</a></h6>
                                                    <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="echo-reply-area">
                                <h5 class="title">Comment</h5>
                                <ul class="comment-inner">
                                    <li class="wrapper">
                                        <div class="image-area">
                                            <img src="{{ asset('/') }}front/assets/images/home-1/trending-left/commentator-1.png" alt="author">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Esther Howard</h5>
                                            <a href="#" class="pe-none">2 Jul 2023</a>
                                            <p class="desc">Efficiently simplify alternative customer service rather than efficient "outside the box" thinking. Dramatically deploy an expanded array of manufactured.</p>
                                        </div>
                                        <div class="reply"><i class="fa-regular fa-share"></i> Reply</div>
                                    </li>
                                    <li class="wrapper">
                                        <div class="image-area">
                                            <img src="{{ asset('/') }}front/assets/images/home-1/trending-left/commentator-2.png" alt="author">
                                        </div>
                                        <div class="content">
                                            <h5 class="title">Esther Howard</h5>
                                            <a href="#" class="pe-none">2 Jul 2023</a>
                                            <p class="desc">Efficiently simplify alternative customer service rather than efficient "outside the box" thinking. Dramatically deploy an expanded array of manufactured.</p>
                                        </div>
                                        <div class="reply"><i class="fa-regular fa-share"></i> Reply</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="echo-comment-box">
                                <div class="comment-box-inner">
                                    <h5 class="title">Leave A Comment</h5>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <input type="text" placeholder="Full Name" required>
                                            </div>
                                            <div class="col-lg-6">
                                                <input type="email" placeholder="Email Address" required>
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea name="text" placeholder="Write Your Comment Here"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="submit-btn">Submit Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 sticky-coloum-item">
                            <div class="echo-right-ct-1">
                                <div class="echo-home-1-hero-area-top-story">
                                    <h5 class="text-center">Our Picks</h5>
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
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-9.png" alt="Echo" class="img-hover"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h6><a href="#" class="title-hover">14 Tight Samurai Games You...</a></h6>
                                            <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="echo-home-1-hero-area-top-story story-review">
                                    <h5 class="text-center">Top Reviews</h5>
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-15.png" alt="Echo" class="img-hover"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h3 class="number">01</h3>
                                            <div class="content">
                                                <h6><a href="#" class="title-hover">Top Rated Products in Wireless...</a></h6>
                                                <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-16.png" alt="Echo" class="img-hover"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h3 class="number">02</h3>
                                            <div class="content">
                                                <h6><a href="#" class="title-hover">ChatGPT returns to Italy after ban</a></h6>
                                                <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="echo-top-story">
                                        <div class="echo-story-picture img-transition-scale">
                                            <a href="post-details.html"><img src="{{ asset('/') }}front/assets/images/category-style-1/item-17.png" alt="Echo" class="img-hover"></a>
                                        </div>
                                        <div class="echo-story-text">
                                            <h3 class="number">03</h3>
                                            <div class="content">
                                                <h6><a href="#" class="title-hover">Top 10 Best Portable Bluetooth Speakers..</a></h6>
                                                <a href="#" class="pe-none"><i class="fa-light fa-clock"></i> 06 minute read</a>
                                            </div>
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