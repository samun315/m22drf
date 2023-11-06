@extends('admin.master')

@section('title', 'View Gallery')
@section('toolbarTitle', 'View Gallery')

@section('main-content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                <!--begin::Row-->
                <div class="row g-6 g-xl-9">
                    <div class="card pt-2 mb-6 mb-xl-9">
                        <div class="card-body p-lg-20">
                            <!--begin::Heading-->
                            <div class="text-center mb-5 mb-lg-10">
                                <!--begin::Title-->
                                <h3 class="fs-2hx text-dark mb-5" id="portfolio"
                                    data-kt-scroll-offset="{default: 100, lg: 150}">Gallery</h3>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Tabs wrapper-->
                            <div class="d-flex flex-center mb-5 mb-lg-15">
                                <!--begin::Tabs-->
                                <ul class="nav border-transparent flex-center fs-5 fw-bold">
                                    <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active"
                                            href="#" data-bs-toggle="tab"
                                            data-bs-target="#kt_landing_all_latest">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
                                            data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">Doctor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#"
                                            data-bs-toggle="tab"
                                            data-bs-target="#kt_landing_projects_mobile_apps">Family</a>
                                    </li>
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Tabs wrapper-->
                            <!--begin::Tabs content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade show active" id="kt_landing_all_latest">
                                    <!--begin::Row-->
                                    <div class="row g-10">

                                        @foreach ($galleries as $all_gallery)
                                            <div class="col-lg-4">
                                                <a class="d-block card-rounded overlay h-lg-100"
                                                    data-fslightbox="lightbox-projects" href="">
                                                    <figure class="figure">
                                                        <img src="{{ asset('uploads/member/' . $all_gallery->student_photo) }}"
                                                            class="figure-img img-fluid rounded"
                                                            alt="A generic square placeholder image with rounded corners in a figure.">
                                                        <figcaption class="figure-caption text-right">A caption for the
                                                            above
                                                            image.</figcaption>
                                                    </figure>
                                                </a>
                                            </div>
                                        @endforeach

                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_landing_projects_web_design">
                                    <!--begin::Row-->
                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects" href="">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url()">
                                                </div>
                                                <!--end::Image-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects" href="">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url()">
                                                </div>
                                                <!--end::Image-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects" href="">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url()">
                                                </div>
                                                <!--end::Image-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Tab pane-->
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_landing_projects_mobile_apps">

                                    <div class="row g-10">
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects" href="">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url()">
                                                </div>
                                                <!--end::Image-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects" href="">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url()">
                                                </div>
                                                <!--end::Image-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--begin::Col-->
                                        <div class="col-lg-4">
                                            <!--begin::Item-->
                                            <a class="d-block card-rounded overlay h-lg-100"
                                                data-fslightbox="lightbox-projects" href="">
                                                <!--begin::Image-->
                                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                    style="background-image:url()">
                                                </div>
                                                <!--end::Image-->
                                            </a>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                </div>
                                <!--end::Tab pane-->

                            </div>
                            <!--end::Tabs content-->
                        </div>
                    </div>


                </div>
                <!--end::Row-->
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
