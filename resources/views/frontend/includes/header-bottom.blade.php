<div class="echo-home-1-menu">
    <div class="echo-site-main-logo-menu-social">
        <div class="container">
            <div class="row align-items-center plr_md--30 plr_sm--30 plr--10">
                <div class="col-xl-2 col-lg-2 col-md-7 col-sm-7 col-7">
                    <div class="echo-site-logo">
                        <a class="logo-light" href="{{ route('home') }}"><img src="{{ asset('/') }}front/assets/images/home-1/site-logo/site-logo.svg" alt="Echo"></a>
                        <a class="logo-dark" href="{{ route('home') }}"><img src="{{ asset('/') }}front/assets/images/home-1/site-logo/site-logo-dark.svg" alt="Echo"></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 d-none d-lg-block">
                    <nav>
                        <div class="echo-home-1-menu">
                            <ul class="list-unstyled echo-desktop-menu">
                                <li class="menu-item"><a href="{{ route('home') }}" class="echo-dropdown-main-element">Home</a></li>
                    
                                <li class="menu-item echo-has-dropdown">
                                    <a href="javascript:void(0)" class="echo-dropdown-main-element">Category</a>
                                    <ul class="echo-submenu list-unstyled menu-pages">
                                        @foreach ($blogCategories as $blogCategory)
                                        <li class="nav-item"><a href="{{ route('blogs.category',['id' => $blogCategory->id]) }}">{{ $blogCategory->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="menu-item echo-has-dropdown">
                                    <a href="#" class="echo-dropdown-main-element">News</a>
                                    <ul class="mega-menu list-unstyled menu-pages">
                                        <li class="nav-item"><a href="post-style-1.html">
                                                <div class="mega-menu-item">
                                                    <div class="mega-menu-img img-transition-scales">
                                                        <img src="{{ asset('/') }}front/assets/images/home-1/latest-news/item-1.png" alt="Echo" class="img-hovers">
                                                    </div>
                                                    <div class="mega-menu-title">
                                                        <h5>Xi, Putin hail 'new era'....</h5>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="nav-item"><a href="post-style-2.html">
                                                <div class="mega-menu-item">
                                                    <div class="mega-menu-img img-transition-scales">
                                                        <img src="{{ asset('/') }}front/assets/images/home-1/latest-news/item-2.png" alt="Echo" class="img-hovers">
                                                    </div>
                                                    <div class="mega-menu-title">
                                                        <h5>Elon Musk's global empire....</h5>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="nav-item"><a href="post-style-3.html">
                                                <div class="mega-menu item">
                                                    <div class="mega-menu-img img-transition-scales">
                                                        <img src="{{ asset('/') }}front/assets/images/home-1/latest-news/item-3.png" alt="Echo" class="img-hovers">
                                                    </div>
                                                    <div class="mega-menu-title">
                                                        <h5>Sri Lanka to receive first ....</h5>
                                                    </div>
                                                </div>
                                            </a></li>
                                        <li class="nav-item"><a href="post-details.html">
                                                <div class="mega-menu item">
                                                    <div class="mega-menu-img img-transition-scales">
                                                        <img src="{{ asset('/') }}front/assets/images/home-1/latest-news/item-4.png" alt="Echo" class="img-hovers">
                                                    </div>
                                                    <div class="mega-menu-title">
                                                        <h5>Turkey earthquake prepare....</h5>
                                                    </div>
                                                </div>
                                            </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a href="{{route('about')}}" class="echo-dropdown-main-element">About</a></li>
                                <li class="menu-item"><a href="{{route('contact')}}" class="echo-dropdown-main-element">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-5 col-5">
                    <div class="echo-home-1-social-media-icons">
                        <ul class="list-unstyled social-area">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>