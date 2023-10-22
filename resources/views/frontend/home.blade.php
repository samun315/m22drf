@extends('frontend.master')

@section('frontend_title', 'Home')

@section('frontend_main_content')

    <!-- Start Main Slider -->
    @include('frontend.layouts.slider')
    <!-- End Main Slider -->

    <!--Start Features Style1 Area-->
    <section class="features-style1-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="inner">
                        <h3>We Change Your Life & World</h3>
                    </div>
                    <div class="outer"><img src="assets/frontend/images/icon/loveicon.png" alt=""></div>
                </div>
                <h2>Charity With Difference</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="features-style1_box">
                        <div class="thm-shape1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="3500ms">
                            <img class="rotate-me" src="assets/frontend/images/shape/thm-shape-1.png" alt="">
                        </div>
                        <div class="row">
                            <!--Start Features Style1 Single-->
                            <div class="col-xl-4 col-lg-4 text-center" data-aos="fade-up" data-aos-easing="linear"
                                data-aos-duration="500">
                                <div class="features-style1_single">
                                    <div class="icon-holder">
                                        <div class="inner">
                                            <img src="assets/frontend/images/icon/features/feature-v1-1.png" alt="">
                                        </div>
                                        <div class="shape1 zoominout">
                                            <img src="assets/frontend/images/icon/features/shape-1.png" alt="">
                                        </div>
                                        <div class="shape-bg">
                                            <img src="assets/frontend/images/icon/features/feature-v1-1-bg.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Get Inspire And Help</h3>
                                        <p>Nostrud temp exercitation duis laboris nisi utm aliquip sed duis aute.
                                        </p>
                                        <div class="btns-box">
                                            <a class="btn-one" href="/about-us"><span class="txt"><i
                                                        class="arrow1 fa fa-check-circle"></i>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Features Style1 Single-->

                            <!--Start Features Style1 Single-->
                            <div class="col-xl-4 col-lg-4 text-center" data-aos="fade-up" data-aos-easing="linear"
                                data-aos-duration="600">
                                <div class="features-style1_single style2">
                                    <div class="icon-holder">
                                        <div class="inner">
                                            <img src="assets/frontend/images/icon/features/feature-v1-2.png" alt="">
                                        </div>
                                        <div class="shape1 zoominout">
                                            <img src="assets/frontend/images/icon/features/shape-1.png" alt="">
                                        </div>
                                        <div class="shape-bg">
                                            <img src="assets/frontend/images/icon/features/feature-v1-2-bg.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Send Us Donations</h3>
                                        <p>Nostrud temp exercitation duis laboris nisi utm aliquip sed duis aute.
                                        </p>
                                        <div class="btns-box">
                                            <a class="btn-one" href="/about-us"><span class="txt"><i
                                                        class="arrow1 fa fa-check-circle"></i>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Features Style1 Single-->

                            <!--Start Features Style1 Single-->
                            <div class="col-xl-4 col-lg-4 text-center" data-aos="fade-up" data-aos-easing="linear"
                                data-aos-duration="500">
                                <div class="features-style1_single style3">
                                    <div class="icon-holder">
                                        <div class="inner">
                                            <img src="assets/frontend/images/icon/features/feature-v1-3.png" alt="">
                                        </div>
                                        <div class="shape1 zoominout">
                                            <img src="assets/frontend/images/icon/features/shape-1.png" alt="">
                                        </div>
                                        <div class="shape-bg">
                                            <img src="assets/frontend/images/icon/features/feature-v1-3-bg.png"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Become A Volunteer</h3>
                                        <p>Nostrud temp exercitation duis laboris nisi utm aliquip sed duis aute.
                                        </p>
                                        <div class="btns-box">
                                            <a class="btn-one" href="/about-us"><span class="txt"><i
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
    @if (isset($featured_project))
        <section class="causes-style1-area">
            <div class="causes-style1-area_bg"
                style="background-image: url(assets/frontend/images/pattern/thm-pattern-1.png);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="causes-style1_image-box">
                            <div class="shape wow slideInLeft" data-wow-delay="0ms" data-wow-duration="3500ms">
                                <img class="zoom-fade" src="assets/frontend/images/shape/thm-shape-7.png" alt="">
                            </div>
                            <div class="causes-style1_image2">
                                <img src="assets/frontend/images/resources/causes-style1_image-2.jpg" alt="">
                            </div>
                            <div class="main">
                                <img style="width: 430px; height:430px"
                                    src="{{ asset('uploads/project/' . $featured_project->banner_img) }}" alt="">
                            </div>
                            <div class="causes-style1_image3">
                                <img src="assets/frontend/images/resources/causes-style1_image-3.jpg" alt="">
                            </div>
                            <div class="causes-style1_image4">
                                <img src="assets/frontend/images/resources/causes-style1_image-4.jpg" alt="">
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
                                <h2> {{ $featured_project->title }}</h2>
                            </div>
                            <div class="inner-content">
                                <div class="text-box">
                                    <p>
                                        {{ \Illuminate\Support\Str::limit(strip_tags($featured_project->details), 200) }}
                                    </p>
                                </div>

                                <div class="progress-levels">
                                    <!--Skill Box-->
                                    <div class="progress-box wow">
                                        <div class="inner count-box">
                                            <div class="bar">
                                                <div class="bar-innner">
                                                    <div class="bar-fill" data-percent="65" title="Book"></div>
                                                </div>
                                                <div class="text">Achieved:
                                                    {{ number_format($featured_project->achieved, 2) }}</div>
                                                <div class="text">Target:
                                                    {{ number_format($featured_project->budget, 2) }}</div>
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
                                    <button class="btn-one" data-toggle="modal" data-target="#myModal">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate
                                            Now</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!--End Causes Style1 Area-->

    <!--Start Cause Style2 Area-->
    <section class="cause-style2-area">
        <div class="thm-shape1 float-bob"><img src="assets/frontend/images/shape/thm-shape-2.png" alt=""></div>
        <div class="thm-shape2 zoom-fade"><img src="assets/frontend/images/shape/thm-shape-3.png" alt=""></div>
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="inner">
                        <h3>We Change Your Life & World</h3>
                    </div>
                    <div class="outer"><img src="assets/frontend/images/icon/loveicon.png" alt=""></div>
                </div>
                <h2>Projects & Donations</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="theme_carousel cause2-carousel owl-dot-style1 owl-theme owl-carousel"
                        data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": false, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" } , "992":{ "items" : "2" }, "1200":{ "items" : "3" }}}'>

                        @foreach ($projects as $project)
                            <div class="single-cause-style1">
                                <div class="img-holder">
                                    <img style="width: 380px; height:370px"
                                        src="{{ asset('uploads/project/' . $project->banner_img) }}" alt="project">
                                </div>
                                <div class="text-holder">
                                    <h3>
                                        <a
                                            href="{{ route('frontend.projectDetails', $project->id) }}">{{ $project->title }}</a>
                                    </h3>
                                    <p>
                                        {{ \Illuminate\Support\Str::limit(strip_tags($project->details), 200) }}
                                    </p>

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
                                                        <p>Achieved<span>Tk {{ $project->achieved }}</span></p>
                                                        <p>Target<span>Tk {{ $project->budget }}</span></p>
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
                                        <button class="btn-one" data-toggle="modal" data-target="#myModal"><span
                                                class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate
                                                Now</span></button>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Cause Style2 Area-->


    <!--Start Fact Counter Area-->
    <section class="fact-counter-area">
        <div class="fact-counter-area_bg"
            style="background-image: url(assets/frontend/images/parallax-background/fact-counter-area_bg.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7">
                    <div class="fact-counter_box">
                        <ul class="clearfix">
                            <li class="single-fact-counter wow slideInLeft" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <div class="outer-box">
                                    <div class="shape1"><img src="assets/frontend/images/shape/thm-shape-5.png"
                                            alt=""></div>
                                    <div class="shape2 zoominout"><img src="assets/frontend/images/shape/thm-shape-6.png"
                                            alt=""></div>
                                    <div class="top">
                                        <div class="icon-box">
                                            <div class="icon"><img
                                                    src="assets/frontend/images/icon/fact-counter/fact-counter-1.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="count-outer count-box">
                                            <span class="dolor-sign">$</span><span class="count-text" data-speed="3000"
                                                data-stop="98.5">0</span><span>K</span>
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
                                    <div class="shape1"><img src="assets/frontend/images/shape/thm-shape-5.png"
                                            alt=""></div>
                                    <div class="shape2 zoominout"><img src="assets/frontend/images/shape/thm-shape-6.png"
                                            alt=""></div>
                                    <div class="top">
                                        <div class="icon-box">
                                            <div class="icon"><img
                                                    src="assets/frontend/images/icon/fact-counter/fact-counter-2.png"
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
                                    <div class="shape1"><img src="assets/frontend/images/shape/thm-shape-5.png"
                                            alt=""></div>
                                    <div class="shape2 zoominout"><img src="assets/frontend/images/shape/thm-shape-6.png"
                                            alt=""></div>
                                    <div class="top">
                                        <div class="icon-box">
                                            <div class="icon"><img
                                                    src="assets/frontend/images/icon/fact-counter/fact-counter-3.png"
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
                                    <div class="shape1"><img src="assets/frontend/images/shape/thm-shape-5.png"
                                            alt=""></div>
                                    <div class="shape2 zoominout"><img src="assets/frontend/images/shape/thm-shape-6.png"
                                            alt=""></div>
                                    <div class="top">
                                        <div class="icon-box">
                                            <div class="icon"><img
                                                    src="assets/frontend/images/icon/fact-counter/fact-counter-4.png"
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
                    <div class="outer"><img src="assets/frontend/images/icon/loveicon.png" alt=""></div>
                </div>
                <h2>Our Mission & Goals</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="mission-goals-content clearfix">
                        <div class="thm-shape1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="3500ms">
                            <img class="rotate-me" src="assets/frontend/images/shape/thm-shape-1.png" alt="">
                        </div>
                        <div class="thm-shape2"><img src="assets/frontend/images/shape/thm-shape-5.png" alt="">
                        </div>

                        @if (isset($mission_vision->image))
                            <div class="mission-goals-image-box"
                                style="background-image: url({{ asset('uploads/mission_vision/' . $mission_vision->image) }});">
                            </div>
                        @endif

                        <div class="text-holder">
                            <div class="top">
                                <div class="icon">
                                    <img src="assets/frontend/images/shape/thm-shape-4.png" alt="">
                                </div>
                                <div class="title">
                                    <h3>
                                        @if (isset($mission_vision->title))
                                            {{ $mission_vision->title }}
                                        @endif
                                    </h3>
                                </div>
                            </div>
                            <div class="text">
                                <p>
                                    @if (isset($mission_vision->description))
                                        {!! $mission_vision->description !!}
                                    @endif
                                </p>
                            </div>
                            <ul class="clearfix">
                                <li>
                                    <div class="icon">
                                        <span class="flaticon-house-insurance"></span>
                                        <div class="shape"><img
                                                src="assets/frontend/images/shape/mission-goal-shape-1.png"
                                                alt="">
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
                                                src="assets/frontend/images/shape/mission-goal-shape-2.png"
                                                alt="">
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
                                                src="assets/frontend/images/shape/mission-goal-shape-3.png"
                                                alt="">
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
        <div class="donate-form-area_bg" style="background-image: url(assets/frontend/images/pattern/thm-pattern-3.png);">
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

                            <div method="post" action="#" class="donate-form-1">
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
                                    <button class="btn-one btn-one-style2" data-toggle="modal" data-target="#myModal">
                                        <span class="txt"><i class="arrow1 fa fa-check-circle"></i>donate
                                            now</span>
                                    </button>
                                </div>

                            </div>

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
                    <div class="outer"><img src="assets/frontend/images/icon/loveicon.png" alt=""></div>
                </div>
                <h2>Meet Our Volunteers</h2>
            </div>

            <div class="row">

                @foreach ($member_details as $member_detail)
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="single-team-style1">
                            <div class="img-holder">
                                <div class="inner">
                                    <img style="width: 263px; height:263px"
                                        src="{{ asset('uploads/member/' . $member_detail->passport_photo) }}"
                                        alt="Volunteer" />
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
                                <div class="shape"><img src="assets/frontend/images/shape/thm-shape-4.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="title-holder text-center">
                                <h3><a href="javascript:void(0)">{{ $member_detail->user_name }}</a></h3>
                                <p>{{ $member_detail->present_job }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        style="background-image: url(assets/frontend/images/resources/event-style1-image.jpg);">

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

                                @foreach ($events as $event)
                                    <div class="single-event-style1">
                                        <div class="date-box">
                                            <div class="left">
                                                <h2>{{ date('d', strtotime($event->date)) }}</h2>
                                            </div>
                                            <div class="right">
                                                <h3>{{ date('M', strtotime($event->date)) }}</h3>
                                            </div>
                                        </div>
                                        <div class="meta-info">
                                            <p>Organized By: <a href="#">M22 Charity</a></p>
                                        </div>
                                        <div class="title">
                                            <h2>
                                                <a href="{{ route('frontend.eventDetails', $event->id) }}">
                                                    {{ $event->title }}
                                                </a>
                                            </h2>
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
                                @endforeach

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
            style="background-image: url(assets/frontend/images/pattern/thm-pattern-1.png);"></div>
        <div class="container">
            <div class="testimonial-style1-content">
                <div class="testimonial-style1_carousel owl-carousel owl-theme">
                    <!--Start Single Testimonial Style1-->
                    <div class="single-testimonial-style1">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/frontend/images/testimonial/testimonial-v1-1.png" alt="">
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
                                <img src="assets/frontend/images/testimonial/testimonial-v1-1.png" alt="">
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
                                <img src="assets/frontend/images/testimonial/testimonial-v1-1.png" alt="">
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
        <div class="thm-shape1 float-bob"><img src="assets/frontend/images/shape/thm-shape-2.png" alt=""></div>
        <div class="container">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <div class="inner">
                        <h3>We Change Your Life &amp; World</h3>
                    </div>
                    <div class="outer"><img src="assets/frontend/images/icon/loveicon.png" alt=""></div>
                </div>
                <h2>News & Happenings</h2>
            </div>
            <div class="row text-right-rtl">

                @foreach ($blogs as $blog)
                    <?php $blog_detail = strip_tags($blog->details);
                    $blog_details = \Illuminate\Support\Str::limit($blog_detail, 200); ?>

                    <div class="col-xl-4 col-lg-4">
                        <div class="single-blog-style1 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img style="width: 360px; height:300px"
                                        src="{{ asset('uploads/blog/' . $blog->banner_img) }}" alt="">
                                    <div class="overlay-icon">
                                        <a href="{{ route('frontend.blogDetails', $blog->id) }}"><span
                                                class="flaticon-plus"></span></a>
                                    </div>
                                </div>
                                <div class="date-box">
                                    <h2>{{ date('d', strtotime($blog->date)) }}</h2>
                                    <p>{{ date('M', strtotime($blog->date)) }}</p>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    <a href="{{ route('frontend.blogDetails', $blog->id) }}">
                                        {{ $blog->title }}
                                    </a>
                                </h3>
                                <div class="text">
                                    <p>
                                        {{ $blog_details }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                            <img class="zoom-fade" src="assets/frontend/images/shape/thm-shape-8.png" alt="">
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

                @foreach ($partners as $partner)
                    <li class="single-partner-logo-box">
                        <a href="javascript:void(0)"><img style="width: 250px; height:130px"
                                src="{{ asset('uploads/partner/' . $partner->image) }}" alt="Partner Logo"></a>
                    </li>
                @endforeach

            </ul>
        </div>
    </section>
    <!--End Partner Area-->

    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Donate Now</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form action="{{ route('frontend.projectDonationRequestStore') }}" method="POST">

                    @csrf

                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" required class="form-control" name="name" placeholder="Enter name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>

                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="text" required class="form-control" name="phone_number"
                                placeholder="Enter phone number">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" name="address" rows="3"></textarea>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
