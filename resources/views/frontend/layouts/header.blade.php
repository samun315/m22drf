<header class="main-header header-style-one">

    {{-- @include('frontend.layouts.top_header') --}}

    <!--Start Header-->
    <div class="header">
        <div class="container">
            <div class="outer-box clearfix">
                <div class="header-left clearfix pull-left">
                    <div class="logo">
                        <a href="/">
                            <img style="width: 208px; height:54px"
                                src="{{ asset('assets/frontend/logo/m22-header-logo.jpg') }}" alt="Logo"
                                title="">
                        </a>
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
                                    <li class="{{ request()->is('/') ? 'current' : '' }}"><a href="/">Home</a>
                                    </li>
                                    <li class="{{ request()->is('about-us') ? 'current' : '' }}"><a
                                            href="/about-us">About Us</a>
                                    </li>
                                    <li class="{{ request()->is('project') ? 'current' : '' }}"><a
                                            href="/project">Project</a>
                                    </li>
                                    <li class="{{ request()->is('events') ? 'current' : '' }}"><a
                                            href="{{ route('frontend.events') }}">Event</a>
                                    </li>
                                    <li class="{{ request()->is('blog') ? 'current' : '' }}"><a href="/blog">Blog</a>
                                    </li>
                                    <li class="{{ request()->is('contact-us') ? 'current' : '' }}"><a
                                            href="{{ route('frontend.contactUs') }}">Contact Us</a>
                                    </li>
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
                    <a href="/" class="img-responsive">
                        <img style="width: 208px; height:54px"
                            src="{{ asset('assets/frontend/logo/m22-header-logo.jpg') }}" alt=""
                            title=""></a>
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
            <div class="nav-logo"><a href="index.html"><img style="width: 208px; height:54px"
                        src="{{ asset('assets/frontend/logo/m22-header-logo.jpg') }}" alt=""
                        title=""></a>
            </div>
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
