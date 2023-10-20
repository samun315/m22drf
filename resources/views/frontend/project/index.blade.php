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
                            <h2>Latest Projects</h2>
                        </div>
                        <div class="border-box"></div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><span class="flaticon-right-arrow"></span></li>
                                <li class="active">Latest Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->

    <!--Start Blog Page One-->
    <section class="blog-page-one">
        <div class="container">

            @include('message')

            <div class="row text-right-rtl">

                @foreach ($results as $row)
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-cause-style1">
                            <div class="img-holder">
                                @if (isset($row->banner_img))
                                    <img style="width: 360px; height:351px"
                                        src="{{ asset('uploads/project/' . $row->banner_img) }}" alt="Banner Image">
                                @else
                                    <img style="width: 360px; height:351px"
                                        src="assets/frontend/images/causes/causes-v1-1.jpg" alt="Banner Image">
                                @endif

                            </div>
                            <div class="text-holder">
                                <h3>
                                    <a href="{{ route('frontend.projectDetails', $row->id) }}">
                                        {{ \Illuminate\Support\Str::limit($row->title, 30) }}
                                    </a>
                                </h3>
                                <p>
                                    {{ \Illuminate\Support\Str::limit(strip_tags($row->details), 80) }}
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
                                                    <p>Achieved<span>৳ {{ number_format($row->achieved, 2) }}</span></p>
                                                    <p>Target<span>৳ {{ number_format($row->budget, 2) }}</span></p>
                                                </div>
                                                <div class="skill-percent">
                                                    <span class="count-text" data-speed="3000" data-stop="50">0</span>
                                                    <span class="percent">%</span>
                                                    <p class="outer-text">Pledged So Far</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns-box">
                                    <button class="btn-one" data-toggle="modal" data-target="#myModal">
                                        <span class="txt">
                                            <i class="arrow1 fa fa-check-circle"></i>
                                            Donate Now
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <!-- Display pagination links -->
                    {{ $results->links('vendor.pagination.bootstrap-4') }}
                </div>
            </div>
        </div>

    </section>
    <!--End Blog Page One-->

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
