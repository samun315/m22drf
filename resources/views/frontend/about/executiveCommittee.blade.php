@extends('frontend.master')

@section('frontend_title', 'Executive Committee')

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
                            <h2>Executive Committee</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">Executive Committee</li>
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
            @foreach ($committees as  $committee)

            <div class="row">
                <!--Start Single Team Style2-->
                <div class="col-xl-4 col-lg-4">

                </div>
                <!--End Single Team Style2-->
                <!--Start Single Team Style2-->
                <div class="col-xl-4 col-lg-4">
                    <div class="single-team-style2">
                        <div class="img-holder">
                            <div class="inner">
                                <img src="{{ asset('uploads/member/' . $committee->passport_photo) }}"
                                    alt="Photo">
                            </div>
                        </div>
                        <div class="title-holder">
                            <h4>{{ $committee->user_name }}</h4>
                            <p>{{ $committee->present_job }}</p>
                        </div>
                    </div>
                </div>
                <!--End Single Team Style2-->
                <!--Start Single Team Style2-->
                <div class="col-xl-4 col-lg-4">

                </div>
                <!--End Single Team Style2-->
                <div class="row">
                    <div class="col-xl-12 text-justify bg-white">
                        <p style="font-family:Georgia,serif; font-size:18px">
                            {!! $committee->about_your_self !!}
                        </p>
                    </div>
                </div>
            </div>
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
            @endforeach
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
