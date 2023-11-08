@extends('frontend.master')

@section('frontend_title', 'Our Valued Members')

@section('frontend_main_content')


    <!--Start breadcrumb area-->
    <section class="breadcrumb-area" style="background-image: url(assets/frontend/images/breadcrumb/breadcrumb-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content text-center">
                        <div class="parallax-scene parallax-scene-1">
                            <div data-depth="0.20" class="parallax-layer shape wow zoomInRight" data-wow-duration="2000ms">
                                <div class="shape1">
                                    <img class="float-bob" src="assets/frontend/images/shape/breadcrumb-shape1.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="parallax-scene parallax-scene-1">
                            <div data-depth="0.20" class="parallax-layer shape wow zoomInRight" data-wow-duration="2000ms">
                                <div class="shape2">
                                    <img class="zoominout" src="assets/frontend/images/shape/breadcrumb-shape2.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="title">
                            <h2>Our Valued Members</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">Our Valued Members</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <section class="team-style2-area">
        <div class="container">
            <div class="row">
                <!--Start Single Team Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-team-style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/team/team-v2-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="title-holder">
                            <h4>Scott William</h4>
                            <p>CEO &amp; Founder</p>
                        </div>
                    </div>
                </div>
                <!--End Single Team Style2-->
                <!--Start Single Team Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-team-style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/frontend/images/team/team-v2-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="title-holder">
                            <h4>Diana Leslie</h4>
                            <p>Senior Manager</p>

                        </div>
                    </div>
                </div>
                <!--End Single Team Style2-->
                <!--Start Single Team Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-team-style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="assets/images/team/team-v2-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="title-holder">
                            <h4>Liam Irvines</h4>
                            <p>Volunteer Head</p>

                        </div>
                    </div>
                </div>
                <!--End Single Team Style2-->
            </div>
        </div>
    </section>

    <!--Start About Style2 Area-->
    <section class="about-style2-area pd120-0-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                </div>
            </div>
        </div>
    </section>
    <!--End About Style2 Area-->
@endsection
