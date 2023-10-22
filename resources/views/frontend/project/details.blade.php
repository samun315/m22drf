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
                            <h2>Project Details</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">Project Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Cause Details Area-->
    {{-- <section class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="blog-details-content">
                        <div class="cause-details-image-box">
                            <img src="{{ asset('uploads/project/' . $project->banner_img) }}" alt="">
                            <div class="category">
                                <h6>{{ $project->category_name }}</h6>
                            </div>
                        </div>
                        <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <img src="assets/frontend/images/blog/blog-details-1.jpg" alt="">
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                    {{ $project->title }}
                                </h3>
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li><i class="fa fa-calendar" aria-hidden="true"></i>
                                            <a href="javascript:void(0)">
                                                {{ date('F j, Y', strtotime($project->deadline)) }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>
                                        {!! $project->details !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Cause Details Area-->

    <!--Start Cause Details Area-->
    <section class="cause-details-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8">
                    <div class="cause-details_content">
                        <div class="cause-details-image-box">
                            <img src="assets/images/causes/cause-details-image-1.jpg" alt="">
                            <div class="category">
                                <h6>health & Education</h6>
                            </div>
                        </div>

                        <div class="donate-form-box donate-form-box--style2">
                            <div class="top-title">
                                <h2>Contribute for the Educational &<br> Health Programs Globally</h2>
                            </div>

                            <div class="progress-levels progress-levels-style2">
                                <!--Skill Box-->
                                <div class="progress-box wow animated" style="visibility: visible;">
                                    <div class="inner count-box">
                                        <div class="bar">
                                            <div class="bar-innner">
                                                <div class="bar-fill" data-percent="52" title="Book"></div>
                                            </div>
                                        </div>
                                        <div class="bottom-box">
                                            <div class="rate-box">
                                                <p>Achieved<span>$25,00</span></p>
                                                <p>Target<span>$5,000</span></p>
                                            </div>
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000" data-stop="52"></span>
                                                <span class="percent">%</span>
                                                <p class="outer-text">Pledged So Far</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="donation_wrapper">
                                <div class="bottom-box">
                                    <div class="btns">
                                        <a class="btn-one" href="#" target="_blank" rel="nofollow">
                                            <span class="txt"><i class="arrow1 fa fa-check-circle"></i>Donate
                                                Now</span>
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="cause-details-text-box-1">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt
                                laboret dolore magna aliqua. Ut enim minim veniam quis nostrud exercitation ullamco
                                laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor reprehenderitn
                                voluptate velit
                                esse cillum dolore lu fugiat nulla pariatur. Excepteur sint ocaecat cupidatat non
                                proident sun
                                culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </div>
                        <div class="cause-details-text-box-2">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                lauds
                                tium totam rem aperiam, eaque ipsa quae ab illo inventore veritatist quasi
                                architecto beatae
                                vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.
                            </p>
                        </div>
                        <div class="cause-details-text-box-3">
                            <div class="cause-details-title">
                                <h3>Why Donate with LoveIcon</h3>
                                <div class="cause-details-title-shape wow zoomIn" data-wow-duration="2000ms">
                                    <img class="zoom-fade" src="assets/images/shape/cause-details-title-shape.png"
                                        alt="">
                                </div>
                            </div>
                            <p>Nostrud tem exrcitation duis laboris nisi ut aliquip sedy duis aut cupidata proident
                                sunt culpa.
                                Consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
                            <div class="cause-details-featured-box">
                                <div class="row">

                                    <div class="col-xl-6">
                                        <div class="single-box">
                                            <div class="icon">
                                                <img src="assets/images/icon/cause/cause-1.png" alt="">
                                                <div class="icon-bg">
                                                    <img src="assets/images/icon/cause/cause-1-bg.png" alt="">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h3>A Real Change</h3>
                                                <p>Nostrud fact aliquip exrcation nisiut temp sed dui auty.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="single-box">
                                            <div class="icon">
                                                <img src="assets/images/icon/cause/cause-2.png" alt="">
                                                <div class="icon-bg">
                                                    <img src="assets/images/icon/cause/cause-2-bg.png" alt="">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h3>With Big Strength</h3>
                                                <p>Nostrud fact aliquip exrcation nisiut temp sed dui auty.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="single-box">
                                            <div class="icon">
                                                <img src="assets/images/icon/cause/cause-3.png" alt="">
                                                <div class="icon-bg">
                                                    <img src="assets/images/icon/cause/cause-3-bg.png" alt="">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h3>Donate and Help</h3>
                                                <p>Nostrud fact aliquip exrcation nisiut temp sed dui auty.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6">
                                        <div class="single-box">
                                            <div class="icon">
                                                <img src="assets/images/icon/cause/cause-4.png" alt="">
                                                <div class="icon-bg">
                                                    <img src="assets/images/icon/cause/cause-4-bg.png" alt="">
                                                </div>
                                            </div>
                                            <div class="text">
                                                <h3>Fully Inspiration</h3>
                                                <p>Nostrud fact aliquip exrcation nisiut temp sed dui auty.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="cause-details-text-box-4">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="text-box">
                                        <div class="cause-details-title">
                                            <h3>The Challenge</h3>
                                            <div class="cause-details-title-shape wow zoomIn" data-wow-duration="2000ms">
                                                <img class="zoom-fade"
                                                    src="assets/images/shape/cause-details-title-shape.png"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="text1">
                                            <p>Nostrud tem exrcitation duis laboris nisi ut aliquip sedy duis aute
                                                cupidata proident sunt
                                                culpa. Consectetur adipisicing elit sed eiusm
                                                sod tempor incididunt.
                                            </p>
                                        </div>
                                        <div class="text2">
                                            <p>Nostrud tem exrcitation duis laboris nisi ut aliquip sedy duis aute
                                                cupidata proident sunt
                                                culpa. Consectetur adipisicing elit sed eiusm
                                                sod tempor incididunt.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="img-box">
                                        <img src="assets/images/causes/cause-details-image-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="cause-details-text-box-5">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem acusantium doloremque
                                lauds tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="sidebar-content-box">

                        <!--Start Single Sidebar Box-->
                        <div class="single-sidebar-box">
                            <div class="sidebar-campaigns">
                                <div class="title">
                                    <h3>Upcoming Project</h3>
                                </div>
                                <ul class="recent-campaigns">

                                    @foreach ($upcoming_projects as $upcoming_project)
                                        <li>
                                            <div class="inner">
                                                <div class="img-box">
                                                    <img src="assets/images/sidebar/campaigns-1.jpg" alt="Awesome Image">
                                                    <div class="overlay-content">
                                                        <a href="#"><i class="fa fa-link"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="title-box">
                                                    <h4><a href="#">Help with Global<br> Charity</a></h4>
                                                    <div class="btns">
                                                        <a href="#">View Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

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
