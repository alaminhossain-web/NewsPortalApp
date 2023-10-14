<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo News</title>
    <link rel="shortcut icon" href="{{ asset('/') }}front/assets/images/fav.png" type="image/x-icon">

    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/plugins/fontawesome-5.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/vendor/bootstrap.min.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/vendor/swiper.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/vendor/metismenu.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/vendor/magnific-popup.css" as="style">
    <link rel="stylesheet preload" href="{{ asset('/') }}front/assets/css/style.css" as="style">
</head>

<body class="home-one">
    <!-- Start Top Header Area -->

    <!-- Start Top Header Area -->
    <header class="echo-header-area">
        @include('frontend.includes.header-top')
        <!-- Start Home-1 Menu & Site Logo & Social Media -->
        @include('frontend.includes.header-bottom')
        <!-- End Home-1 Menu & Site Logo & Social Media -->
    </header>
    <!-- End Top Header Area -->

    <!-- side bar for desktop -->
   @include('frontend.includes.mobile-menu')
    <!-- header style two End -->

    <!-- Start Subscribe Popup Box -->
    <div class="echo-popup-model" id="id01">
        <div class="echo-popup-transition">
            <div class="model-content animate-subscribe-popup">
                <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='none'"><i class="fa-regular fa-xmark"></i></a>
                <div class="echo-p-flexing">
                    <div class="echo-p-img">
                        <img src="{{ asset('/') }}front/assets/images/home-1/feature-right/news-item-1.png" alt="Echo">
                    </div>
                    <div class="form">
                        <div class="echo-p-sub-heading">
                            <p>Weekly Updates</p>
                        </div>
                        <div class="echo-p-sub-heading">
                            <h3>Let's join our newsletter!</h3>
                        </div>
                        <form method="POST">
                            <input type="email" required placeholder="Enter Your Email..">
                            <button type="submit">Submit</button>
                        </form>
                        <div class="echo-bottom-popup">
                            <p>Do not worry we don't spam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Popup Box -->
    <!-- End Top Header Area -->

    <!-- Top To Scroll -->
    <!-- End Top scroll -->
    

    @yield('body')

    <!-- Start Footer Area -->
    <!-- Start Footer Area -->
    @include('frontend.includes.footer')
    <!-- End Footer Area -->
    <!-- End Footer Area -->

    <!-- Start Scricpt Area -->

    <!--scroll top button-->
    <button class="scroll-top-btn">
        <i class="fa-regular fa-angles-up"></i>
    </button>
    <!--scroll top button end-->

    <div id="anywhere-home"></div>

    <script src="{{ asset('/') }}front/assets/js/vendor/jquery.min.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/audio.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/vendor/bootstrap.min.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/vendor/swiper.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/vendor/metisMenu.min.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/audio.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/magnific-popup.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/contact-form.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/resize-sensor.min.js" defer></script>
    <script src="{{ asset('/') }}front/assets/js/plugins/theia-sticky-sidebar.min.js" defer></script>

    <!-- main js file -->
    <script src="{{ asset('/') }}front/assets/js/main.js" defer></script>
    <!-- End Footer Area -->

</body>


<!-- Mirrored from html.themewant.com/echo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Oct 2023 05:17:14 GMT -->
</html>