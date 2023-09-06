@extends('frontend.master')

@section('frontend_main_content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(/assets/frontend/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content text-center">
                        <div class="parallax-scene parallax-scene-1">
                            <div data-depth="0.20" class="parallax-layer shape wow zoomInRight" data-wow-duration="2000ms">
                                <div class="shape1">
                                    <img class="float-bob"
                                        src="{{ asset('assets/frontend/images/shape/breadcrumb-shape1.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="parallax-scene parallax-scene-1">
                            <div data-depth="0.20" class="parallax-layer shape wow zoomInRight" data-wow-duration="2000ms">
                                <div class="shape2">
                                    <img class="zoominout"
                                        src="{{ asset('assets/frontend/images/shape/breadcrumb-shape2.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h2>Blog Details</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">Blog Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Cause Details Area-->
    <section class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="blog-details-content">

                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <img src="assets/frontend/images/blog/blog-details-1.jpg" alt="">
                            </div>
                            <div class="text-holder">
                                <div class="categories">
                                    <h6>Education</h6>
                                </div>
                                <h3 class="blog-title">Rise of Global Charity in Modern<br> World and Many Benefits
                                </h3>
                                <div class="meta-box">
                                    <div class="author-thumb">
                                        <img src="assets/frontend/images/blog/author-thumb-1.jpg" alt="">
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#">Malay D’soza</a></li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i> <a href="#">March 25,
                                                2021</a></li>
                                        <li><i class="fa fa-comment-o" aria-hidden="true"></i> <a href="#">597
                                                Comments</a></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed don eiusmod
                                        tempor laboret dolore magn aliqua. Ut eniml minim veniam qus nostrud
                                        exercitation ullam nisiut aliquip consequat. Duis aute rure dolor
                                        reprehenderits. Lorem ipsum dolor sit amet, consectetur adipisicing elit sed
                                        do eiusmod tempor.
                                    </p>
                                    <p class="martop25">Nostrud exercitation ullamco laboris nisi ut aliquip exea
                                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                        cupidatats.
                                    </p>
                                </div>

                                <!--Start Blog Details Text 1-->
                                <div class="blog-details-text-1">
                                    <div class="blog-details-title">
                                        <h3>Why Donate with LoveIcon</h3>
                                        <div class="blog-details-title-shape wow zoomIn animated"
                                            data-wow-duration="2000ms">
                                            <img class="zoom-fade"
                                                src="assets/frontend/images/shape/cause-details-title-shape.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <p>Nostrud tem exrcitation duis laboris nisiut aliquip sedy duis aut cupidata
                                        proident sunt culpa adipisicing elit sed eiusmod tempor incididunt.</p>

                                    <div class="cause-details-featured-box">
                                        <div class="row">

                                            <div class="col-xl-6">
                                                <div class="single-box">
                                                    <div class="icon">
                                                        <img src="assets/frontend/images/icon/cause/cause-1.png"
                                                            alt="">
                                                        <div class="icon-bg">
                                                            <img src="assets/frontend/images/icon/cause/cause-1-bg.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <h3>A Real Change</h3>
                                                        <p>Nostrud fact aliquip exrcation nisiut temp sed dui auty.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="single-box">
                                                    <div class="icon">
                                                        <img src="assets/frontend/images/icon/cause/cause-3.png"
                                                            alt="">
                                                        <div class="icon-bg">
                                                            <img src="assets/frontend/images/icon/cause/cause-3-bg.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <h3>Donate and Help</h3>
                                                        <p>Nostrud fact aliquip exrcation nisiut temp sed dui auty.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="single-box">
                                                    <div class="icon">
                                                        <img src="assets/frontend/images/icon/cause/cause-4.png"
                                                            alt="">
                                                        <div class="icon-bg">
                                                            <img src="assets/frontend/images/icon/cause/cause-4-bg.png"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="text">
                                                        <h3>Fully Inspiration</h3>
                                                        <p>Nostrud fact aliquip exrcation nisiut temp sed dui auty.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="img-box">
                                                    <img src="assets/frontend/images/blog/blog-details-2.jpg"
                                                        alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Details Text 1-->

                                <!--Start Blog Details Text 2-->
                                <div class="blog-details-text-2">
                                    <div class="blog-details-title">
                                        <h3>The Challenge</h3>
                                        <div class="blog-details-title-shape wow zoomIn animated"
                                            data-wow-duration="2000ms">
                                            <img class="zoom-fade"
                                                src="assets/frontend/images/shape/cause-details-title-shape.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <p>Nostrud tem exrcitation duis laboris nisi ut aliquip sedy duis aut cupidata
                                        proident sunt culpa. Consectetur adipisicing elit sed eiusm sod tempor
                                        incididunt aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                    </p>
                                </div>
                                <!--End Blog Details Text 2-->

                                <!--Start Blog Details Text 3-->
                                <div class="blog-details-text-3">
                                    <div class="blog-style3-text-holder">
                                        <div class="quote-icon"><span class="flaticon-right-quotes-symbol"></span>
                                        </div>
                                        <h2 class="blog-title">
                                            <a href="blog-single.html">No One Has Ever Become Poor<br> By Giving,
                                                Feed the Poor &amp; Hungry</a>
                                        </h2>
                                        <div class="name">
                                            <h5>John T. Smith</h5>
                                        </div>
                                    </div>
                                </div>
                                <!--End Blog Details Text 3-->

                                <!--Start Blog Details Text 4-->
                                <div class="blog-details-text-4">
                                    <p>Laboret dolore magn aliqua. Ut eniml minim veniam qus nostrud exercitation
                                        ullam nisiut aliquip consequat. Duis aute rure dolor reprehenderits. Nostrud
                                        exercitation ullamco laboris nisi ut aliquip exea consequat. Duis aute irure
                                        dolor in reprehenderit in voluptate velit esse ipsum cillum doloreys.</p>
                                </div>
                                <!--End Blog Details Text 3-->

                                <!--Start Post Tag Share Box-->
                                <div class="post-tag-share-box">
                                    <div class="tag-box">
                                        <ul>
                                            <li><a href="#">food</a></li>
                                            <li><a href="#">donation</a></li>
                                            <li><a href="#">water</a></li>
                                        </ul>
                                    </div>
                                    <div class="share-box">
                                        <div class="title">
                                            <h6>share</h6>
                                        </div>
                                        <div class="share-button">
                                            <a href="#"><i class="fa fa-share" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--End Post Tag Share Box-->
                            </div>
                        </div>

                        <div class="author-box-holder">
                            <div class="inner-box">
                                <div class="img-box">
                                    <img src="assets/frontend/images/blog/author.jpg" alt="Awesome Image">
                                </div>
                                <div class="text-box">
                                    <h3>Smith Hayden <span>(Author)</span></h3>
                                    <p>Nostrud aliquip exrcitation laboris nisiut temp duis autey
                                        Lorem unt ipsum sit amet elit dolor tempor incididunt but
                                        labore set dolore magna aliqua veniam.
                                    </p>
                                    <div class="author-social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="comments-box-one">
                            <div class="title">
                                <h2>Comments</h2>
                            </div>
                            <div class="inner">
                                <!--Start Single Review Box-->
                                <div class="single-comments-box">
                                    <div class="img_box">
                                        <div class="inner">
                                            <img src="{{ asset('assets/frontend/images/resources/review-1.png') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <div class="inner">
                                            <div class="top">
                                                <div class="left">
                                                    <h4>Johnson Stainter</h4>
                                                    <span>March 31, 2021 at 12:58 am</span>
                                                </div>
                                                <div class="right">
                                                    <div class="btns-box">
                                                        <a class="btn-one" href="about.html">
                                                            <span class="txt"><i
                                                                    class="arrow1 fa fa-check-circle"></i>reply</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>Laboret dolore magn aliqua. Ut eniml minim veniam qus nostrud
                                                    exercitation nisiut aliquip consequat. Duis aute rure dolor
                                                    reprehenderits.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Review Box-->
                                <!--Start Single Review Box-->
                                <div class="single-comments-box">
                                    <div class="img_box">
                                        <div class="inner">
                                            <img src="{{ asset('assets/frontend/images/resources/review-2.png') }}"
                                                alt="Image">
                                        </div>
                                    </div>
                                    <div class="text_box">
                                        <div class="inner">
                                            <div class="top">
                                                <div class="left">
                                                    <h4>Tina Shane</h4>
                                                    <span>March 31, 2021 at 12:58 am</span>
                                                </div>
                                                <div class="right">
                                                    <div class="btns-box">
                                                        <a class="btn-one" href="about.html">
                                                            <span class="txt"><i
                                                                    class="arrow1 fa fa-check-circle"></i>reply</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text">
                                                <p>Laboret dolore magn aliqua. Ut eniml minim veniam qus nostrud
                                                    exercitation nisiut aliquip consequat. Duis aute rure dolor
                                                    reprehenderits.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End Single Review Box-->
                            </div>
                        </div>

                        <!--Start Reply Form Box-->
                        <div class="reply-form-box">
                            <div class="title">
                                <h2>Leave a Reply</h2>
                            </div>
                            <form id="review-form" action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="fname" placeholder="Full Name" required="">
                                            <div class="icon"><span class="flaticon-user"></span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="email" name="email" placeholder="Email" required="">
                                            <div class="icon"><span class="flaticon-opened"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-box">
                                            <textarea name="review" placeholder="Message" required=""></textarea>
                                            <div class="icon"><span class="fa fa-pencil"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn-one" type="submit">
                                            <span class="txt"><i class="arrow1 fa fa-check-circle"></i>post
                                                comment</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Reply Form Box-->

                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="sidebar-content-box">
                        <!--Start Single Sidebar Box-->
                        <div class="single-sidebar-box">
                            <div class="sidebar-author-box text-center">
                                <div class="img-holder">
                                    <img src="{{ asset('assets/frontend/images/resources/sidebar-author-1.png') }}"
                                        alt="">
                                </div>
                                <div class="title-holder">
                                    <h3>Saima Hayden</h3>
                                    <p>Nostrud aliquip exrcitation laboris<br>nisiut temp duis autey. Lorem
                                        unt<br>ipsum sit amet elit dolor.</p>
                                </div>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Single Sidebar Box-->
                        <!--Start Single Sidebar Box-->
                        <div class="single-sidebar-box">
                            <div class="single-sidebar_search_box">
                                <div class="title">
                                    <h3>Search</h3>
                                </div>
                                <div class="sidebar-search-box wow fadeInUp animated animated animated"
                                    data-wow-delay="0.1s" data-wow-duration="1200ms"
                                    style="visibility: visible; animation-duration: 1200ms; animation-delay: 0.1s; animation-name: fadeInUp;">
                                    <form class="search-form" action="#">
                                        <input placeholder="Keyword" type="text">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--End Single Sidebar Box-->
                        <!--Start Single Sidebar Box-->
                        <div class="single-sidebar-box">
                            <div class="sidebar-categories">
                                <div class="title">
                                    <h3>Categories</h3>
                                </div>
                                <ul class="sidebar-categories-box">
                                    <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Charity
                                            for
                                            Poor</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Feed the
                                            People</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Donations:
                                            How to?</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Duties &
                                            Resposibility</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle" aria-hidden="true"></i>Food
                                            Supply
                                            Chains</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Single Sidebar Box-->

                        <!--Start Single Sidebar Box-->
                        <div class="single-sidebar-box">
                            <div class="sidebar-campaigns">
                                <div class="title">
                                    <h3>Recent News</h3>
                                </div>
                                <ul class="recent-campaigns recent-news">
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/campaigns-1.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <h4><a href="#">Help with Global<br> Charity</a></h4>
                                                <p>March 9, 2021</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/campaigns-2.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <h4><a href="#">School Education<br> in Africa</a></h4>
                                                <p>March 9, 2021</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/campaigns-3.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="title-box">
                                                <h4><a href="#">Make Homes for<br> Peoples</a></h4>
                                                <p>March 9, 2021</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--End Single Sidebar Box-->

                        <!--Start Single Sidebar Box-->
                        <div class="single-sidebar-box">
                            <div class="projects-gallery-box">
                                <div class="title">
                                    <h3>Projects Gallery</h3>
                                </div>
                                <ul class="gallery">
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/gallery-1.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="causes-details.html">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/gallery-2.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="causes-details.html">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/gallery-3.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="causes-details.html">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/gallery-4.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="causes-details.html">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/gallery-5.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="causes-details.html">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <div class="img-box">
                                                <img src="{{ asset('assets/frontend/images/sidebar/gallery-6.jpg') }}"
                                                    alt="Awesome Image">
                                                <div class="overlay-content">
                                                    <a href="causes-details.html">
                                                        <span class="fa fa-link"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--End Single Sidebar Box-->

                        <!--Start Single Sidebar Box-->
                        <div class="single-sidebar-box">
                            <div class="sidebar-slogan-box"
                                style="background-image: url(/assets/frontend/images/sidebar/sidebar-slogan-img.jpg);">
                                <div class="icon">
                                    <img src="{{ asset('assets/frontend/images/icon/thm-logo1.png') }}" alt="" />
                                </div>
                                <p>Small Donations Bigger Impact</p>
                                <h2>Education Health<br>for Every Child</h2>
                                <div class="btn-box">
                                    <div class="hand"><img src="{{ asset('assets/frontend/images/shape/hand.png') }}"
                                            alt=""></div>
                                    <a class="btn-one" href="causes-details.html">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>donate now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--End Single Sidebar Box-->

                        <!--Start Single Sidebar Box-->
                        <div class="single-sidebar-box">
                            <div class="sidebar-tag-box">
                                <div class="title">
                                    <h3>Tags Cloud</h3>
                                </div>
                                <ul>
                                    <li><a href="#">healthy</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">donation</a></li>
                                    <li><a href="#">Charity</a></li>
                                    <li><a href="#">water</a></li>
                                    <li><a href="#">Shelters</a></li>
                                    <li><a href="#">medical facility</a></li>
                                    <li><a href="#">help</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Single Sidebar Box-->


                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--End Cause Details Area-->
@endsection
