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
                            <h2>Event Details</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">Event Details</li>
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
                <div class="col-xl-12">
                    <div class="blog-details-content">

                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <img src="{{ asset('uploads/event/' . $event->banner_img) }}" alt="">
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    {{ $event->title }}
                                </h3>
                                <div class="meta-box">
                                    <div class="author-thumb">
                                        <img src="{{ asset('assets/frontend/images/blog/author-thumb-1.jpg') }}"
                                            alt="">
                                    </div>
                                    <ul class="meta-info">
                                        <li><a href="#">M22 Charity</a></li>
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>
                                            <a href="javascript:void(0)">
                                                {{ date('F j, Y', strtotime($event->date)) }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>
                                        {!! $event->details !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Cause Details Area-->
@endsection
