@extends('frontend.master')

@section('frontend_title', 'How we help')

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
                            <h2>How We Help?</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">How We Help</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <section class="team-style2-area bg-white">
        <div class="container">
            <!--End Single Team Style2-->
            <div class="row">
                <div class="col-xl-12 text-justify bg-white">
                    <h1>HOW WE HELP?</h1>
                    {{-- <p style="font-family:Georgia,serif; font-size:18px">
                        {!! $chairman_message->about_your_self !!}
                    </p> --}}
                    <ul style="list-style-type:circle">
                        <li>M22 Doctors’ Foundation Sponsor, implement & Monitor all of its charity programs through a
                            “Social -Entrepreneur” or “Community Volunteer Group” & They will operate the assigned projects.
                        </li>
                    </ul>

                    <p style="font-family:Georgia,serif; font-size:18px">SELECTION CRITERIA OF THE “Social Entrepreneur or
                        Community Volunteer Group”:</p>

                    <ul>
                        <li>Motivated by the vision of our foundation.</li>
                        <li>Must be a trustworthy person or group bearing a good track record among the Neighbors and
                            locality.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!--Start About Style2 Area-->
    <section class="about-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                </div>
            </div>
        </div>
    </section>
    <!--End About Style2 Area-->
@endsection
