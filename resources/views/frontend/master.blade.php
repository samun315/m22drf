<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.layouts.stylesheet')

</head>

<body>

    <div class="boxed_wrapper ltr">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>

        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><img src="assets/images/icon/color-palette.png" alt="Color Palette"> </button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="blue" class="blue-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end switcher menu -->

        <!-- Start sidebar widget content -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">X</a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="index.html"><img src="assets/images/resources/logo-3.png"
                                            alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h4>About Us</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
                                        labore et magna aliqua. Ut enim ad minim veniam laboris.</p>
                                </div>
                                <div class="form-inner">
                                    <h4>Get a free quote</h4>
                                    <form action="index.html" method="post">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message..."></textarea>
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit" class="btn-one btn-one-style2">
                                                <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Submit
                                                    Now</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sidebar widget content -->


        <!-- Main header-->
        <header class="main-header header-style-one">
            <div class="header-top">
                <div class="container">
                    <div class="outer-box clearfix">

                        <div class="header-top_left pull-left">
                            <div class="icon">
                                <img src="assets/images/icon/arrow-1.png" alt="">
                            </div>
                            <div class="header-top_left-content">
                                <div class="theme_carousel header-top_left-carousel owl-theme owl-carousel"
                                    data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": false, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "1139":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                    <!--Start Single Item-->
                                    <div class="single-item">
                                        <p>Sponsor an orphan and feed the poor people with us</p>
                                    </div>
                                    <!--End Single Item-->
                                    <!--Start Single Item-->
                                    <div class="single-item">
                                        <p>Sponsor an orphan and feed the poor people with us</p>
                                    </div>
                                    <!--End Single Item-->
                                </div>
                            </div>
                        </div>

                        <div class="header-top_right pull-right">
                            <div class="header-social-link-1">
                                <ul class="clearfix">
                                    <li>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Start Header-->
            <div class="header">
                <div class="container">
                    <div class="outer-box clearfix">
                        <div class="header-left clearfix pull-left">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/resources/logo.png" alt="Awesome Logo"
                                        title=""></a>
                            </div>
                        </div>

                        <div class="header-right pull-right">
                            <div class="nav-outer style1 clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler">
                                    <div class="inner">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div>
                                </div>
                                <!-- Main Menu -->
                                <nav class="main-menu style1 navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="dropdown current"><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home Page 01</a></li>
                                                    <li><a href="index-2.html">Home Page 02</a></li>
                                                    <li><a href="index-3.html">Home Page 03</a></li>
                                                    <li><a href="index-4.html">Home Page 04</a></li>
                                                    <li><a href="index-5.html">Home Page 05</a></li>
                                                    <li><a href="index-onepage.html">Home OnePage</a></li>
                                                    <li class="dropdown"><a href="#">Header Styles</a>
                                                        <ul>
                                                            <li><a href="index.html">Header Style One</a></li>
                                                            <li><a href="index-2.html">Header Style Two</a></li>
                                                            <li><a href="index-3.html">Header Style Three</a></li>
                                                            <li><a href="index-4.html">Header Style Four</a></li>
                                                            <li><a href="index-5.html">Header Style Five</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li class="dropdown"><a href="#">Pages</a>
                                                <ul>
                                                    <li><a href="events.html">Upcoming Events</a></li>
                                                    <li><a href="events-details.html">Events Details</a></li>
                                                    <li><a href="team.html">Our Team</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="faq.html">Faq</a></li>
                                                    <li><a href="error.html">404 Error page</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">causes</a>
                                                <ul>
                                                    <li><a href="causes-1.html">causes Style 01</a></li>
                                                    <li><a href="causes-2.html">causes Style 02</a></li>
                                                    <li><a href="causes-3.html">causes Style 03</a></li>
                                                    <li><a href="causes-details.html">causes Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">News</a>
                                                <ul>
                                                    <li><a href="blog.html">News Grid View</a></li>
                                                    <li><a href="blog-2.html">News List View</a></li>
                                                    <li><a href="blog-single.html">News Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- Main Menu End-->
                            </div>

                            <div class="header-right_buttom">
                                <div class="btns-box">
                                    <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                </div>
                                <div class="side-content-button">
                                    <a class="navSidebar-button" href="#">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--End header-->

            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="clearfix">
                        <!--Logo-->
                        <div class="logo float-left">
                            <a href="index.html" class="img-responsive"><img
                                    src="assets/images/resources/sticky-logo.png" alt="" title=""></a>
                        </div>
                        <!--Right Col-->
                        <div class="right-col float-right">
                            <!-- Main Menu -->
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Sticky Header-->

            <!-- Mobile Menu  -->
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <div class="close-btn"><span class="icon fa fa-times-circle"></span></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/resources/mobilemenu-logo.png"
                                alt="" title=""></a></div>
                    <div class="menu-outer">
                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                    </div>
                    <!--Social Links-->
                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fab fa fa-facebook-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-twitter-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-pinterest-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-google-plus-square"></span></a></li>
                            <li><a href="#"><span class="fab fa fa-youtube-square"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->
        </header>


        <!-- Start Main Slider -->
        <section class="main-slider style1">
            <div class="shape2 paroller"></div>
            <div class="slider-box">
                <!-- Banner Carousel -->
                <div class="banner-carousel owl-theme owl-carousel">
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-1.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <h3>Change the life, Change the world</h3>
                                <div class="big-title">
                                    <h2>Every Good<br> Act Is A Charity</h2>
                                </div>
                                <div class="border-box"></div>
                                <div class="text">
                                    <p>Veniam quis nostrud exercitation sed ullamco laboris</p>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one btn-one-style2" href="about.html">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>how we
                                            help</span>
                                    </a>
                                    <a class="btn-one marlft15" href="about.html">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>support
                                            us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-2.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <h3>Change the life, Change the world</h3>
                                <div class="big-title">
                                    <h2>Every Good<br> Act Is A Charity</h2>
                                </div>
                                <div class="border-box"></div>
                                <div class="text">
                                    <p>Veniam quis nostrud exercitation sed ullamco laboris</p>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one btn-one-style2" href="about.html">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>how we
                                            help</span>
                                    </a>
                                    <a class="btn-one marlft15" href="about.html">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>support
                                            us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="slide">
                        <div class="image-layer" style="background-image:url(assets/images/slides/slide-v1-3.jpg)">
                        </div>
                        <div class="auto-container">
                            <div class="content">
                                <h3>Change the life, Change the world</h3>
                                <div class="big-title">
                                    <h2>Every Good<br> Act Is A Charity</h2>
                                </div>
                                <div class="border-box"></div>
                                <div class="text">
                                    <p>Veniam quis nostrud exercitation sed ullamco laboris</p>
                                </div>
                                <div class="btns-box">
                                    <a class="btn-one btn-one-style2" href="about.html">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>how we
                                            help</span>
                                    </a>
                                    <a class="btn-one marlft15" href="about.html">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>support
                                            us</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Main Slider -->


        <!--Start Features Style1 Area-->
        <section class="features-style1-area">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="inner">
                            <h3>We Change Your Life & World</h3>
                        </div>
                        <div class="outer"><img src="assets/images/icon/loveicon.png" alt=""></div>
                    </div>
                    <h2>Charity With Difference</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="features-style1_box">
                            <div class="thm-shape1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="3500ms">
                                <img class="rotate-me" src="assets/images/shape/thm-shape-1.png" alt="">
                            </div>
                            <div class="row">
                                <!--Start Features Style1 Single-->
                                <div class="col-xl-4 col-lg-4 text-center" data-aos="fade-up"
                                    data-aos-easing="linear" data-aos-duration="500">
                                    <div class="features-style1_single">
                                        <div class="icon-holder">
                                            <div class="inner">
                                                <img src="assets/images/icon/features/feature-v1-1.png"
                                                    alt="">
                                            </div>
                                            <div class="shape1 zoominout">
                                                <img src="assets/images/icon/features/shape-1.png" alt="">
                                            </div>
                                            <div class="shape-bg">
                                                <img src="assets/images/icon/features/feature-v1-1-bg.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Get Inspire And Help</h3>
                                            <p>Nostrud temp exercitation duis laboris nisi utm aliquip sed duis aute.
                                            </p>
                                            <div class="btns-box">
                                                <a class="btn-one" href="about.html"><span class="txt"><i
                                                            class="arrow1 fa fa-check-circle"></i>read more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Features Style1 Single-->

                                <!--Start Features Style1 Single-->
                                <div class="col-xl-4 col-lg-4 text-center" data-aos="fade-up"
                                    data-aos-easing="linear" data-aos-duration="600">
                                    <div class="features-style1_single style2">
                                        <div class="icon-holder">
                                            <div class="inner">
                                                <img src="assets/images/icon/features/feature-v1-2.png"
                                                    alt="">
                                            </div>
                                            <div class="shape1 zoominout">
                                                <img src="assets/images/icon/features/shape-1.png" alt="">
                                            </div>
                                            <div class="shape-bg">
                                                <img src="assets/images/icon/features/feature-v1-2-bg.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Send Us Donations</h3>
                                            <p>Nostrud temp exercitation duis laboris nisi utm aliquip sed duis aute.
                                            </p>
                                            <div class="btns-box">
                                                <a class="btn-one" href="about.html"><span class="txt"><i
                                                            class="arrow1 fa fa-check-circle"></i>read more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Features Style1 Single-->

                                <!--Start Features Style1 Single-->
                                <div class="col-xl-4 col-lg-4 text-center" data-aos="fade-up"
                                    data-aos-easing="linear" data-aos-duration="500">
                                    <div class="features-style1_single style3">
                                        <div class="icon-holder">
                                            <div class="inner">
                                                <img src="assets/images/icon/features/feature-v1-3.png"
                                                    alt="">
                                            </div>
                                            <div class="shape1 zoominout">
                                                <img src="assets/images/icon/features/shape-1.png" alt="">
                                            </div>
                                            <div class="shape-bg">
                                                <img src="assets/images/icon/features/feature-v1-3-bg.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="text-holder">
                                            <h3>Become A Volunteer</h3>
                                            <p>Nostrud temp exercitation duis laboris nisi utm aliquip sed duis aute.
                                            </p>
                                            <div class="btns-box">
                                                <a class="btn-one" href="about.html"><span class="txt"><i
                                                            class="arrow1 fa fa-check-circle"></i>read more</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Features Style1 Single-->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Features Style1 Area-->


        <!--Start Causes Style1 Area-->
        <section class="causes-style1-area">
            <div class="causes-style1-area_bg"
                style="background-image: url(assets/images/pattern/thm-pattern-1.png);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="causes-style1_image-box">
                            <div class="shape wow slideInLeft" data-wow-delay="0ms" data-wow-duration="3500ms">
                                <img class="zoom-fade" src="assets/images/shape/thm-shape-7.png" alt="">
                            </div>
                            <div class="causes-style1_image2">
                                <img src="assets/images/resources/causes-style1_image-2.jpg" alt="">
                            </div>
                            <div class="main">
                                <img src="assets/images/resources/causes-style1_image-1.jpg" alt="">
                            </div>
                            <div class="causes-style1_image3">
                                <img src="assets/images/resources/causes-style1_image-3.jpg" alt="">
                            </div>
                            <div class="causes-style1_image4">
                                <img src="assets/images/resources/causes-style1_image-4.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="causes-style1_content-box">
                            <div class="sec-title">
                                <div class="sub-title martop0">
                                    <div class="inner">
                                        <h3>Help With Featured Cause</h3>
                                    </div>
                                </div>
                                <h2>Feed The Poor And<br> Hungry Children</h2>
                            </div>
                            <div class="inner-content">
                                <div class="text-box">
                                    <p>Laboris nisi utm aliquip sed duis aute lorem ipsum dolor sit amet consectetur
                                        adipisicing elit sed do eiusmod tempor utm incididunts lorem ipsum sed labore et
                                        dolore magna aliqua.</p>
                                </div>

                                <div class="progress-levels">
                                    <!--Skill Box-->
                                    <div class="progress-box wow">
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="bar-fill" data-percent="65" title="Book"></div>
                                                </div>
                                                <div class="text">Target: $10,000</div>
                                            </div>

                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000" data-stop="65">0</span>
                                                <span class="percent">%</span>
                                                <span class="outer-text">Pledged So Far</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="btns-box">
                                    <a class="btn-one" href="causes-details.html">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate
                                            Now</span>
                                    </a>
                                    <a class="video-popup cause-video-button" title="Loveicon Video Gallery"
                                        href="https://www.youtube.com/watch?v=MLpWrANjFbI">
                                        <span class="flaticon-play-button playicon"></span>
                                        <span class="txt">cause video</span>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Causes Style1 Area-->

        <!--Start Cause Style2 Area-->
        <section class="cause-style2-area">
            <div class="thm-shape1 float-bob"><img src="assets/images/shape/thm-shape-2.png" alt=""></div>
            <div class="thm-shape2 zoom-fade"><img src="assets/images/shape/thm-shape-3.png" alt=""></div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="inner">
                            <h3>We Change Your Life & World</h3>
                        </div>
                        <div class="outer"><img src="assets/images/icon/loveicon.png" alt=""></div>
                    </div>
                    <h2>Appeals & Donations</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="theme_carousel cause2-carousel owl-dot-style1 owl-theme owl-carousel"
                            data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>

                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1">
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-1.jpg" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Education For People</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>

                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="50" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="50">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Cause Style1-->
                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1 style2">
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Poverty - No More</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>
                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="85" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="85">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>
                                </div>
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-2.jpg" alt="">
                                </div>
                            </div>
                            <!--End Single Cause Style1-->
                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1">
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-3.jpg" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Africa Medical Facility</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>

                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="72" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="72">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Cause Style1-->

                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1">
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-1.jpg" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Education For People</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>

                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="50" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="50">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Cause Style1-->
                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1 style2">
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Poverty - No More</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>
                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="85" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="85">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>
                                </div>
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-2.jpg" alt="">
                                </div>
                            </div>
                            <!--End Single Cause Style1-->
                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1">
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-3.jpg" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Africa Medical Facility</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>

                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="72" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="72">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Cause Style1-->

                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1">
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-1.jpg" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Education For People</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>

                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="50" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="50">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Cause Style1-->
                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1 style2">
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Poverty - No More</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>
                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="85" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="85">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>
                                </div>
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-2.jpg" alt="">
                                </div>
                            </div>
                            <!--End Single Cause Style1-->
                            <!--Start Single Cause Style1-->
                            <div class="single-cause-style1">
                                <div class="img-holder">
                                    <img src="assets/images/causes/causes-v1-3.jpg" alt="">
                                </div>
                                <div class="text-holder">
                                    <h3><a href="causes-details.html">Africa Medical Facility</a></h3>
                                    <p>Nostrud aliquips exercitation laboris nisiut temp sed duis autey. Lorem unt ipsum
                                        sit amet elit dolor.</p>

                                    <div class="progress-levels progress-levels-style2">
                                        <!--Skill Box-->
                                        <div class="progress-box wow">
                                            <div class="inner count-box">
                                                <div class="bar">
                                                    <div class="bar-innner">
                                                        <div class="bar-fill" data-percent="72" title="Book"></div>
                                                    </div>
                                                </div>
                                                <div class="bottom-box">
                                                    <div class="rate-box">
                                                        <p>Achieved<span>$25,00</span></p>
                                                        <p>Target<span>$5,000</span></p>
                                                    </div>
                                                    <div class="skill-percent">
                                                        <span class="count-text" data-speed="3000"
                                                            data-stop="72">0</span>
                                                        <span class="percent">%</span>
                                                        <p class="outer-text">Pledged So Far</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btns-box">
                                        <a class="btn-one" href="causes-details.html"><span class="txt"><i
                                                    class="arrow1 fa fa-check-circle"></i>Donate Now</span></a>
                                    </div>

                                </div>
                            </div>
                            <!--End Single Cause Style1-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Cause Style2 Area-->


        <!--Start Fact Counter Area-->
        <section class="fact-counter-area">
            <div class="fact-counter-area_bg"
                style="background-image: url(assets/images/parallax-background/fact-counter-area_bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="fact-counter_box">
                            <ul class="clearfix">
                                <li class="single-fact-counter wow slideInLeft" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <div class="outer-box">
                                        <div class="shape1"><img src="assets/images/shape/thm-shape-5.png"
                                                alt=""></div>
                                        <div class="shape2 zoominout"><img src="assets/images/shape/thm-shape-6.png"
                                                alt=""></div>
                                        <div class="top">
                                            <div class="icon-box">
                                                <div class="icon"><img
                                                        src="assets/images/icon/fact-counter/fact-counter-1.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="count-outer count-box">
                                                <span class="dolor-sign">$</span><span class="count-text"
                                                    data-speed="3000" data-stop="98.5">0</span><span>K</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Received Donations From<br> Our Loving People</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-fact-counter wow slideInLeft" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="outer-box">
                                        <div class="shape1"><img src="assets/images/shape/thm-shape-5.png"
                                                alt=""></div>
                                        <div class="shape2 zoominout"><img src="assets/images/shape/thm-shape-6.png"
                                                alt=""></div>
                                        <div class="top">
                                            <div class="icon-box">
                                                <div class="icon"><img
                                                        src="assets/images/icon/fact-counter/fact-counter-2.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="count-outer count-box style2">
                                                <span class="count-text" data-speed="3000"
                                                    data-stop="2.64">0</span><span>K</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>Different Projects Done With<br> The Help Of Donators</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-fact-counter wow slideInLeft" data-wow-delay="300ms"
                                    data-wow-duration="1500ms">
                                    <div class="outer-box">
                                        <div class="shape1"><img src="assets/images/shape/thm-shape-5.png"
                                                alt=""></div>
                                        <div class="shape2 zoominout"><img src="assets/images/shape/thm-shape-6.png"
                                                alt=""></div>
                                        <div class="top">
                                            <div class="icon-box">
                                                <div class="icon"><img
                                                        src="assets/images/icon/fact-counter/fact-counter-3.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="count-outer count-box style3">
                                                <span class="count-text" data-speed="3000"
                                                    data-stop="13.7">0</span><span>K</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>With Our Volunteers We’ve<br> Solved Many Causes </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="single-fact-counter wow slideInLeft" data-wow-delay="100ms"
                                    data-wow-duration="1500ms">
                                    <div class="outer-box">
                                        <div class="shape1"><img src="assets/images/shape/thm-shape-5.png"
                                                alt=""></div>
                                        <div class="shape2 zoominout"><img src="assets/images/shape/thm-shape-6.png"
                                                alt=""></div>
                                        <div class="top">
                                            <div class="icon-box">
                                                <div class="icon"><img
                                                        src="assets/images/icon/fact-counter/fact-counter-4.png"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="count-outer count-box style4">
                                                <span class="count-text" data-speed="3000"
                                                    data-stop="1.5">0</span><span>K</span>
                                            </div>
                                        </div>
                                        <div class="text">
                                            <p>A Team consisting Of The<br> Best Volunteers </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-xl-5">
                        <div class="video-holder-box">
                            <div class="icon wow zoomIn" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <a class="video-popup" title="Loveicon Video Gallery"
                                    href="https://www.youtube.com/watch?v=MLpWrANjFbI">
                                    <span class="flaticon-play-button-1"></span>
                                </a>
                                <div class="title">
                                    <h5>Watch The Intro Video</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Fact Counter Area-->

        <!--Start mission and goals Area-->
        <section class="mission-and-goals-area">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="inner">
                            <h3>We Change Your Life & World</h3>
                        </div>
                        <div class="outer"><img src="assets/images/icon/loveicon.png" alt=""></div>
                    </div>
                    <h2>Our Mission & Goals</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="mission-goals-content clearfix">
                            <div class="thm-shape1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="3500ms">
                                <img class="rotate-me" src="assets/images/shape/thm-shape-1.png" alt="">
                            </div>
                            <div class="thm-shape2"><img src="assets/images/shape/thm-shape-5.png" alt="">
                            </div>
                            <div class="mission-goals-image-box"
                                style="background-image: url(assets/images/resources/mission-goals.jpg);"></div>
                            <div class="text-holder">
                                <div class="top">
                                    <div class="icon">
                                        <img src="assets/images/shape/thm-shape-4.png" alt="">
                                    </div>
                                    <div class="title">
                                        <h3>Small Donations Make Bigger Impact<br> On Someone’s Life, Act Today!</h3>
                                    </div>
                                </div>
                                <div class="text">
                                    <p>Excepteur sint occaecat dui cupidatat non proident sunt culpa officia deserunt
                                        mollit anim id est laborum. Sed ut dui persic iatis unde oms ipsum dolor sed
                                        iste natus sit voluptatem.</p>
                                </div>
                                <ul class="clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="flaticon-house-insurance"></span>
                                            <div class="shape"><img
                                                    src="assets/images/shape/mission-goal-shape-1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3>Home Shelter</h3>
                                        </div>
                                    </li>
                                    <li class="style2">
                                        <div class="icon">
                                            <span class="flaticon-water"></span>
                                            <div class="shape"><img
                                                    src="assets/images/shape/mission-goal-shape-2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3>Water And Food</h3>
                                        </div>
                                    </li>
                                    <li class="style3">
                                        <div class="icon">
                                            <span class="flaticon-world"></span>
                                            <div class="shape"><img
                                                    src="assets/images/shape/mission-goal-shape-3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="title">
                                            <h3>Love The World</h3>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!--End mission and goals Area-->


        <!--Start Donate Form Area-->
        <section class="donate-form-area">
            <div class="donate-form-area_bg" style="background-image: url(assets/images/pattern/thm-pattern-3.png);">
            </div>
            <div class="auto-container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="donate-form_box">
                            <div class="title">
                                <h2>Quick Donate</h2>
                                <p>Be a community of diverse people</p>
                            </div>
                            <div class="donate-form">

                                <form method="post" action="sendemail.php" class="donate-form-1">
                                    <ul class="clearfix">
                                        <li class="select-box left">
                                            <select class="selectpicker" name="donation">
                                                <option value="*">On Time Donation</option>
                                                <option value=".category-1">On Time Donation 01</option>
                                                <option value=".category-2">On Time Donation 02</option>
                                                <option value=".category-3">On Time Donation 03</option>
                                                <option value=".category-4">On Time Donation 04</option>
                                                <option value=".category-5">On Time Donation 05</option>
                                            </select>
                                        </li>
                                        <li class="select-box">
                                            <select class="selectpicker" name="amount">
                                                <option value="*">Amount $</option>
                                                <option value=".category-1">100$</option>
                                                <option value=".category-2">200$</option>
                                                <option value=".category-3">500$</option>
                                                <option value=".category-4">1000$</option>
                                                <option value=".category-5">5000$</option>
                                            </select>
                                        </li>
                                        <li class="select-box right">
                                            <select class="selectpicker" name="subject">
                                                <option value="*">Funds Type</option>
                                                <option value=".category-1">Funds Type 01</option>
                                                <option value=".category-2">Funds Type 02</option>
                                                <option value=".category-3">Funds Type 03</option>
                                                <option value=".category-4">Funds Type 04</option>
                                                <option value=".category-5">Funds Type 05</option>
                                            </select>
                                        </li>
                                    </ul>

                                    <div class="button-box">
                                        <button class="btn-one btn-one-style2" type="submit" name="submit-form">
                                            <span class="txt"><i class="arrow1 fa fa-check-circle"></i>donate
                                                now</span>
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Donate Form Area-->



        <!--Start Team Style1 Area-->
        <section class="team-style1-area">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="inner">
                            <h3>We Change Your Life & World</h3>
                        </div>
                        <div class="outer"><img src="assets/images/icon/loveicon.png" alt=""></div>
                    </div>
                    <h2>Meet Our Volunteers</h2>
                </div>

                <div class="row">
                    <!--Start Single Team Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-team-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/team/team-v1-1.jpg" alt="" />
                                    <div class="icon">
                                        <span class=""></span>
                                    </div>
                                </div>
                                <div class="overly-box">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shape"><img src="assets/images/shape/thm-shape-4.png" alt="">
                                </div>
                            </div>
                            <div class="title-holder text-center">
                                <h3><a href="#">Scott William</a></h3>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Style1-->

                    <!--Start Single Team Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-team-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/team/team-v1-2.jpg" alt="" />
                                    <div class="icon">
                                        <span class=""></span>
                                    </div>
                                </div>
                                <div class="overly-box">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shape"><img src="assets/images/shape/thm-shape-4.png" alt="">
                                </div>
                            </div>
                            <div class="title-holder text-center">
                                <h3><a href="#">Liam Irvines</a></h3>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Style1-->

                    <!--Start Single Team Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-team-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/team/team-v1-3.jpg" alt="" />
                                    <div class="icon">
                                        <span class=""></span>
                                    </div>
                                </div>
                                <div class="overly-box">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shape"><img src="assets/images/shape/thm-shape-4.png" alt="">
                                </div>
                            </div>
                            <div class="title-holder text-center">
                                <h3><a href="#">Diana Leslie</a></h3>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Style1-->

                    <!--Start Single Team Style1-->
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-team-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/team/team-v1-4.jpg" alt="" />
                                    <div class="icon">
                                        <span class=""></span>
                                    </div>
                                </div>
                                <div class="overly-box">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shape"><img src="assets/images/shape/thm-shape-4.png" alt="">
                                </div>
                            </div>
                            <div class="title-holder text-center">
                                <h3><a href="#">Tania Vandy</a></h3>
                                <p>Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--End Single Team Style1-->

                </div>

            </div>
        </section>
        <!--End Team Style1 Area-->

        <!--Start events Style1 Area-->
        <section class="event-style1-area">
            <div class="custom-container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="event-style1_image-box"
                            style="background-image: url(assets/images/resources/event-style1-image.jpg);">

                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="event-style1_content-box">
                            <div class="sec-title">
                                <div class="sub-title martop0">
                                    <div class="inner">
                                        <h3>Help With Featured Cause</h3>
                                    </div>
                                </div>
                                <h2>Join Upcoming Events<br>Replays & Webinars</h2>
                            </div>

                            <div class="inner-content">
                                <div class="event-style1-carousel owl-carousel owl-theme owl-nav-style-one">
                                    <!--Start Single Event Style1-->
                                    <div class="single-event-style1">
                                        <div class="date-box">
                                            <div class="left">
                                                <h2>25</h2>
                                            </div>
                                            <div class="right">
                                                <h3>MAR</h3>
                                            </div>
                                        </div>
                                        <div class="meta-info">
                                            <p>Organized By: <a href="#">LoveIcon</a></p>
                                        </div>
                                        <div class="title">
                                            <h2><a href="events-details.html">Sports Event: Funding<br>the Innocent
                                                    People</a></h2>
                                        </div>
                                        <div class="border-box"></div>
                                        <div class="event-time">
                                            <div class="icon">
                                                <span class="flaticon-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>16:00 EST - Melbourne, AUS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Event Style1-->
                                    <!--Start Single Event Style1-->
                                    <div class="single-event-style1">
                                        <div class="date-box">
                                            <div class="left">
                                                <h2>17</h2>
                                            </div>
                                            <div class="right">
                                                <h3>APR</h3>
                                            </div>
                                        </div>
                                        <div class="meta-info">
                                            <p>Organized By: <a href="#">LoveIcon</a></p>
                                        </div>
                                        <div class="title">
                                            <h2><a href="events-details.html">For the Loving Country:<br> Decade of
                                                    Support</a></h2>
                                        </div>
                                        <div class="border-box"></div>
                                        <div class="event-time">
                                            <div class="icon">
                                                <span class="flaticon-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>15:00 EST - Newyork, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Event Style1-->

                                    <!--Start Single Event Style1-->
                                    <div class="single-event-style1">
                                        <div class="date-box">
                                            <div class="left">
                                                <h2>25</h2>
                                            </div>
                                            <div class="right">
                                                <h3>MAR</h3>
                                            </div>
                                        </div>
                                        <div class="meta-info">
                                            <p>Organized By: <a href="#">LoveIcon</a></p>
                                        </div>
                                        <div class="title">
                                            <h2><a href="events-details.html">Sports Event: Funding<br>the Innocent
                                                    People</a></h2>
                                        </div>
                                        <div class="border-box"></div>
                                        <div class="event-time">
                                            <div class="icon">
                                                <span class="flaticon-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>16:00 EST - Melbourne, AUS</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Event Style1-->
                                    <!--Start Single Event Style1-->
                                    <div class="single-event-style1">
                                        <div class="date-box">
                                            <div class="left">
                                                <h2>17</h2>
                                            </div>
                                            <div class="right">
                                                <h3>APR</h3>
                                            </div>
                                        </div>
                                        <div class="meta-info">
                                            <p>Organized By: <a href="#">LoveIcon</a></p>
                                        </div>
                                        <div class="title">
                                            <h2><a href="events-details.html">For the Loving Country:<br> Decade of
                                                    Support</a></h2>
                                        </div>
                                        <div class="border-box"></div>
                                        <div class="event-time">
                                            <div class="icon">
                                                <span class="flaticon-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>15:00 EST - Newyork, USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Single Event Style1-->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End events Style1 Area-->

        <!--Start Testimonial style1 Area-->
        <section class="testimonial-style1-area">
            <div class="testimonial-style1-area_bg"
                style="background-image: url(assets/images/pattern/thm-pattern-1.png);"></div>
            <div class="container">
                <div class="testimonial-style1-content">
                    <div class="testimonial-style1_carousel owl-carousel owl-theme">
                        <!--Start Single Testimonial Style1-->
                        <div class="single-testimonial-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/testimonial/testimonial-v1-1.png" alt="">
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="quote">
                                    <span class="flaticon-right-quotes-symbol"></span>
                                </div>
                                <div class="text">
                                    <h3>Power to create opportunities</h3>
                                    <p>Nori grape silver beet broccoli kombu beet greens parsley bean potato quandong
                                        celery. Bunya nuts black-eyed pea prairie jícama turnip leek lentil turnip
                                        greens parsnip salsify sea.</p>
                                </div>
                                <div class="client-info">
                                    <h4>Johnny Thomas</h4>
                                    <span>California, USA</span>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial Style1-->
                        <!--Start Single Testimonial Style1-->
                        <div class="single-testimonial-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/testimonial/testimonial-v1-1.png" alt="">
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="quote">
                                    <span class="flaticon-right-quotes-symbol"></span>
                                </div>
                                <div class="text">
                                    <h3>Power to create opportunities</h3>
                                    <p>Nori grape silver beet broccoli kombu beet greens parsley bean potato quandong
                                        celery. Bunya nuts black-eyed pea prairie jícama turnip leek lentil turnip
                                        greens parsnip salsify sea.</p>
                                </div>
                                <div class="client-info">
                                    <h4>Johnny Thomas</h4>
                                    <span>California, USA</span>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial Style1-->
                        <!--Start Single Testimonial Style1-->
                        <div class="single-testimonial-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/testimonial/testimonial-v1-1.png" alt="">
                                </div>
                            </div>
                            <div class="text-holder">
                                <div class="quote">
                                    <span class="flaticon-right-quotes-symbol"></span>
                                </div>
                                <div class="text">
                                    <h3>Power to create opportunities</h3>
                                    <p>Nori grape silver beet broccoli kombu beet greens parsley bean potato quandong
                                        celery. Bunya nuts black-eyed pea prairie jícama turnip leek lentil turnip
                                        greens parsnip salsify sea.</p>
                                </div>
                                <div class="client-info">
                                    <h4>Johnny Thomas</h4>
                                    <span>California, USA</span>
                                </div>
                            </div>
                        </div>
                        <!--End Single Testimonial Style1-->


                    </div>

                </div>
            </div>
        </section>
        <!--End Testimonial Style1 Area-->


        <!--Start Blog Style1 Area-->
        <section class="blog-style1-area">
            <div class="thm-shape1 float-bob"><img src="assets/images/shape/thm-shape-2.png" alt=""></div>
            <div class="container">
                <div class="sec-title text-center">
                    <div class="sub-title">
                        <div class="inner">
                            <h3>We Change Your Life &amp; World</h3>
                        </div>
                        <div class="outer"><img src="assets/images/icon/loveicon.png" alt=""></div>
                    </div>
                    <h2>News & Happenings</h2>
                </div>
                <div class="row text-right-rtl">
                    <!--Start Single blog Style1-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v1-1.jpg" alt="">
                                    <div class="overlay-icon">
                                        <a href="blog-single.html"><span class="flaticon-plus"></span></a>
                                    </div>
                                </div>
                                <div class="date-box">
                                    <h2>03</h2>
                                    <p>MAR</p>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    <a href="blog-single.html">Rise of Global Charity in Modern World</a>
                                </h3>
                                <div class="text">
                                    <p>Nostrud tem exrcitation duis laboris nisi ut aliquip sed duis aute cupidata con
                                        proident sunt culpa.</p>
                                </div>
                                <ul class="meta-info">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Malay
                                            D’soza</a></li>
                                    <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">597
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single blog Style1-->
                    <!--Start Single blog Style1-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v1-2.jpg" alt="">
                                    <div class="overlay-icon">
                                        <a href="blog-single.html"><span class="flaticon-plus"></span></a>
                                    </div>
                                </div>
                                <div class="date-box style2">
                                    <h2>25</h2>
                                    <p>May</p>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    <a href="blog-single.html">How to become a Good Volunteer Today</a>
                                </h3>
                                <div class="text">
                                    <p>Nostrud tem exrcitation duis laboris nisi ut aliquip sed duis aute cupidata con
                                        proident sunt culpa.</p>
                                </div>
                                <ul class="meta-info">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Andrea
                                            Kay</a></li>
                                    <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">1.3k
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single blog Style1-->
                    <!--Start Single blog Style1-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="assets/images/blog/blog-v1-3.jpg" alt="">
                                    <div class="overlay-icon">
                                        <a href="blog-single.html"><span class="flaticon-plus"></span></a>
                                    </div>
                                </div>
                                <div class="date-box style3">
                                    <h2>19</h2>
                                    <p>Apr</p>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    <a href="blog-single.html">Empower the Dropout Innocents is Key</a>
                                </h3>
                                <div class="text">
                                    <p>Nostrud tem exrcitation duis laboris nisi ut aliquip sed duis aute cupidata con
                                        proident sunt culpa.</p>
                                </div>
                                <ul class="meta-info">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Jelly
                                            Bean</a></li>
                                    <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">10k
                                            Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single blog Style1-->

                </div>

            </div>
        </section>
        <!--End Blog Style1 Area-->


        <!--Start Partner Area-->
        <section class="partner-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="top-box">
                            <div class="shape wow zoomIn" data-wow-delay="0ms" data-wow-duration="3500ms">
                                <img class="zoom-fade" src="assets/images/shape/thm-shape-8.png" alt="">
                            </div>
                            <div class="title">
                                <h2>Become Support Partner</h2>
                                <h4>Provide financing support to help individuals build livelihoods</h4>
                            </div>
                            <div class="btn-box">
                                <a class="btn-one" href="contact.html"><span class="txt"><i
                                            class="arrow1 fa fa-check-circle"></i>get in touch</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="partner-box partner-carousel owl-carousel owl-theme owl-dot-style1">
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-1.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-2.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-3.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-4.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->

                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-1.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-2.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-3.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-4.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->

                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-1.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-2.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-3.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->
                    <!--Start Single Partner Logo Box-->
                    <li class="single-partner-logo-box">
                        <a href="#"><img src="assets/images/brand/brand-logo-4.png" alt="Awesome Image"></a>
                    </li>
                    <!--End Single Partner Logo Box-->

                </ul>
            </div>
        </section>
        <!--End Partner Area-->

        @include('frontend.layouts.footer')

        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </button>

    </div>

    @include('frontend.layouts.script')

</body>

</html>
