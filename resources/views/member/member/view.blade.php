@extends('admin.master')

@section('title', 'Member Information')
@section('toolbarTitle', 'Member Information')

@section('main-content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div class="d-flex flex-column flex-xl-row">
                <!--begin::Sidebar-->
                <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                    <!--begin::Card-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Card body-->
                        <div class="card-body pt-15">
                            <!--begin::Summary-->
                            <div class="d-flex flex-center flex-column mb-5">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-200px mb-7">

                                    @if (isset($member->passport_photo))
                                        <img src=" {{ asset('uploads/member/' . $member->passport_photo) }}" alt="image">
                                    @else
                                        <img src="assets/backend/media/avatars/blank.png" alt="image">
                                    @endif

                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <a href="#"
                                    class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1">{{ $member->user_name }}</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="fs-5 fw-bold text-muted mb-6">{{ $member->present_job }}</div>
                                <!--end::Position-->
                            </div>
                            <!--end::Summary-->
                            <div class="separator separator-dashed my-3"></div>
                            <!--begin::Details content-->
                            <div>
                                <div class="py-5 fs-6">

                                    <div class="fw-bolder mt-5">Phone Number</div>
                                    <div class="text-gray-600">
                                        {{ $member->user_phone_number }}
                                    </div>

                                    <div class="fw-bolder mt-5">Email</div>
                                    <div class="text-gray-600">
                                        {{ $member->user_email }}
                                    </div>

                                    <div class="fw-bolder mt-5">Date of Birth</div>
                                    <div class="text-gray-600">
                                        {{ $member->date_of_birth }}
                                    </div>

                                    <div class="fw-bolder mt-5">Spouse Name</div>
                                    <div class="text-gray-600">
                                        {{ $member->spouse_name }}
                                    </div>

                                    <div class="fw-bolder mt-5">Member Status</div>
                                    <div class="text-gray-600">
                                        {{ $member->member_status }}
                                    </div>

                                    <div class="fw-bolder mt-5">Executive Status</div>
                                    <div class="text-gray-600">
                                        {{ $member->executive_status }}
                                    </div>
                                </div>
                            </div>
                            <!--end::Details content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->

                </div>
                <!--end::Sidebar-->
                <!--begin::Content-->
                <div class="flex-lg-row-fluid ms-lg-15">
                    <!--begin:::Tab content-->
                    <div class="tab-content" id="myTabContent">
                        <!--begin:::Tab pane-->
                        <div class="tab-pane fade show active" id="kt_customer_view_overview_tab" role="tabpanel">

                            <!--begin::Card-->
                            <div class="card pt-4 mb-6 mb-xl-9">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bolder mb-0">Member Information</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div id="kt_customer_view_payment_method" class="card-body pt-0">
                                    <!--begin::Option-->
                                    <div class="py-0">

                                        <div class="fs-6 ps-10">

                                            <div class="fw-bolder mt-5">About your self</div>
                                            <div class="text-gray-600">
                                                {!! $member->about_your_self !!}
                                            </div>

                                            <div class="fw-bolder mt-5">Present Address</div>
                                            <div class="text-gray-600">
                                                {{ $member->present_address }}
                                            </div>

                                            <div class="fw-bolder mt-5">Permanent Address</div>
                                            <div class="text-gray-600">
                                                {{ $member->permanent_address }}
                                            </div>

                                            <div class="fw-bolder mt-5">Village Address</div>
                                            <div class="text-gray-600">
                                                {{ $member->village_address }}
                                            </div>

                                            <div class="fw-bolder mt-5">Personal Charity</div>
                                            <div class="text-gray-600">
                                                {{ $member->personal_charity }}
                                            </div>

                                            <div class="fw-bolder mt-5">Philosopy Life</div>
                                            <div class="text-gray-600">
                                                {{ $member->philosopy_life }}
                                            </div>
                                            <div class="fw-bolder mt-5">Children Details</div>
                                            <div class="text-gray-600">
                                                {{ $member->children_details }}
                                            </div>

                                            <div class="fw-bolder mt-5">Extra Curicular Activities</div>
                                            <div class="text-gray-600">
                                                {{ $member->extra_curicular_activities }}
                                            </div>

                                            <div class="fw-bolder mt-5">Lifetime Achievement</div>
                                            <div class="text-gray-600">
                                                {{ $member->lifetime_achievement }}
                                            </div>

                                            <div class="fw-bolder mt-5">Special Occasions</div>
                                            <div class="text-gray-600">
                                                {{ $member->special_occasions }}
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->

                            {{-- <div class="card pt-2 mb-6 mb-xl-9">
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
                                                    data-bs-target="#kt_landing_projects_latest">Student</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6"
                                                    href="#" data-bs-toggle="tab"
                                                    data-bs-target="#kt_landing_projects_web_design">Doctor</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6"
                                                    href="#" data-bs-toggle="tab"
                                                    data-bs-target="#kt_landing_projects_mobile_apps">Family</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Tabs wrapper-->
                                    <!--begin::Tabs content-->
                                    <div class="tab-content">
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane fade show active" id="kt_landing_projects_latest">
                                            <!--begin::Row-->
                                            <div class="row g-10">
                                                <!--begin::Col-->
                                                <div class="col-lg-4">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay h-lg-100"
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->student_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->student_photo) }})">
                                                        </div>
                                                        <!--end::Image-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <div class="col-lg-4">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay h-lg-100"
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->doctor_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->doctor_photo) }})">
                                                        </div>
                                                        <!--end::Image-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <div class="col-lg-4">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay h-lg-100"
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->family_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->family_photo) }})">
                                                        </div>
                                                        <!--end::Image-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
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
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->doctor_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->doctor_photo) }})">
                                                        </div>
                                                        <!--end::Image-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-lg-4">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay h-lg-100"
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->family_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->family_photo) }})">
                                                        </div>
                                                        <!--end::Image-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-lg-4">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay h-lg-100"
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->student_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->student_photo) }})">
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
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->family_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->family_photo) }})">
                                                        </div>
                                                        <!--end::Image-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-lg-4">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay h-lg-100"
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->student_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->student_photo) }})">
                                                        </div>
                                                        <!--end::Image-->
                                                    </a>
                                                    <!--end::Item-->
                                                </div>
                                                <!--begin::Col-->
                                                <div class="col-lg-4">
                                                    <!--begin::Item-->
                                                    <a class="d-block card-rounded overlay h-lg-100"
                                                        data-fslightbox="lightbox-projects"
                                                        href="{{ asset('uploads/member/' . $member->doctor_photo) }}">
                                                        <!--begin::Image-->
                                                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px"
                                                            style="background-image:url({{ asset('uploads/member/' . $member->doctor_photo) }})">
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
                            </div> --}}

                        </div>
                    </div>
                    <!--end:::Tab content-->
                </div>
                <!--end::Content-->


            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
