@extends('admin.master')

@if (isset($editModeData))
    @section('title', 'Edit Volunteer')
    @section('toolbarTitle', 'Edit Volunteer')
@else
    @section('title', 'Create Volunteer')
    @section('toolbarTitle', 'Create Volunteer')
@endif

@section('main-content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div class="card mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1"
                                        fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1"
                                        fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1"
                                        fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1"
                                        fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                            <span class="card-label fw-bolder fs-3 mb-1"> {{ isset($editModeData) ? 'Edit' : 'Create' }}
                                Volunteer</span>
                        </span>
                    </h3>
                    <div class="card-toolbar">
                        <a href="{{ route('admin.volunteer.index') }}" class="btn btn-sm btn-light-success">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="5" y="5" width="5" height="5" rx="1"
                                            fill="#000000"></rect>
                                        <rect x="14" y="5" width="5" height="5" rx="1"
                                            fill="#000000" opacity="0.3"></rect>
                                        <rect x="5" y="14" width="5" height="5" rx="1"
                                            fill="#000000" opacity="0.3"></rect>
                                        <rect x="14" y="14" width="5" height="5" rx="1"
                                            fill="#000000" opacity="0.3"></rect>
                                    </g>
                                </svg>
                            </span>
                            Manage Volunteer
                        </a>
                    </div>
                </div>
                <hr>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">

                    @include('message')

                    <!--begin::Form-->
                    <form class="form" id="kt_volunteer_form" method="POST" enctype="multipart/form-data"
                        action="{{ isset($editModeData) ? route('admin.volunteer.update', $editModeData->id) : route('admin.volunteer.store') }}">
                        @csrf

                        @isset($editModeData)
                            @method('PUT')

                            <input type="text" hidden name="volunteer_id" value="{{ $editModeData->id }}">
                        @endisset

                        <div class="row mb-5">

                            <div class="col-md-6 fv-row mb-5">
                                <label class="required fs-5 fw-bold mb-2">Name</label>
                                <input type="text"
                                    class="form-control form-control-solid @error('name') is-invalid @enderror"
                                    placeholder="Enter name" name="name"
                                    value="{{ $editModeData->name ?? old('name') }}" />
                                @error('name')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 fv-row mb-5">
                                <label class="required fs-5 fw-bold mb-2">Designation</label>
                                <input type="text"
                                    class="form-control form-control-solid @error('name') is-invalid @enderror"
                                    placeholder="Enter designation" name="designation"
                                    value="{{ $editModeData->designation ?? old('designation') }}" />
                                @error('designation')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 fv-row mb-5">
                                <label class="required fs-5 fw-bold mb-2">Facebook Link</label>
                                <input type="text"
                                    class="form-control form-control-solid @error('facebook_link') is-invalid @enderror"
                                    placeholder="Enter facebook link" name="facebook_link"
                                    value="{{ $editModeData->facebook_link ?? old('facebook_link') }}" />
                                @error('facebook_link')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 fv-row mb-5">
                                <label class="required fs-5 fw-bold mb-2">Instagram Link</label>
                                <input type="text"
                                    class="form-control form-control-solid @error('instagram_link') is-invalid @enderror"
                                    placeholder="Enter instagram link" name="instagram_link"
                                    value="{{ $editModeData->instagram_link ?? old('instagram_link') }}" />
                                @error('instagram_link')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 fv-row mb-5">
                                <label class="required fs-5 fw-bold mb-2">Twitter Link</label>
                                <input type="text"
                                    class="form-control form-control-solid @error('twitter_link') is-invalid @enderror"
                                    placeholder="Enter twitter link" name="twitter_link"
                                    value="{{ $editModeData->twitter_link ?? old('twitter_link') }}" />
                                @error('twitter_link')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 fv-row mb-5">
                                <label class="required fs-5 fw-bold mb-2">Profile Image</label>
                                <input type="file"
                                    class="form-control form-control-solid @error('profile_img') is-invalid @enderror"
                                    name="profile_img" />

                                @isset($editModeData->profile_img)
                                    <a target="_blank"
                                        href="{{ asset('uploads/volunteer/' . $editModeData->profile_img) }}">View
                                        Profile Image</a>
                                @endisset

                                @error('profile_img')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 fv-row mb-5">
                                <label class="required fs-5 fw-bold mb-2">Active</label>
                                <select name="status"
                                    class="form-select form-select-solid @error('status') is-invalid @enderror"
                                    data-control="select2" data-hide-search="true" data-placeholder="Active">
                                    <option {{ isset($editModeData) && $editModeData->status == 'YES' ? 'selected' : '' }}
                                        value="YES">
                                        YES</option>
                                    <option {{ isset($editModeData) && $editModeData->status == 'NO' ? 'selected' : '' }}
                                        value="NO">NO
                                    </option>
                                </select>
                                @error('status')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer flex-center">
                            <button type="submit" class="btn custom_button_bg_color">
                                <span class="indicator-label">Submit</span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--begin::Body-->
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection

@section('page_scripts')
    <script>
        var i;

        i = document.querySelector("#kt_volunteer_form");

        $(i.querySelector('[name="date"]')).flatpickr({
            dateFormat: "Y-m-d"
        });
    </script>
@endsection
