@extends('admin.master')

@section('title', 'Admin Dashboard')
@section('toolbarTitle', 'Dashboard')

@section('main-content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <div class="row gy-5 g-xl-8">
                <div class="col-xl-3">
                    <a href="{{ route('admin.project.index') }}" class="card bg-success hoverable card-xl-stretch mb-xl-8">
                        <div class="card-body">
                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">Total Project</div>
                            <div class="fw-bold text-white">

                                @if (isset($project))
                                    {{ $project }}
                                @else
                                    0
                                @endif

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3">
                    <a href="{{ route('admin.event.index') }}" class="card bg-primary hoverable card-xl-stretch mb-xl-8">
                        <div class="card-body">
                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">Total Event</div>
                            <div class="fw-bold text-white">
                                @if (isset($event))
                                    {{ $event }}
                                @else
                                    0
                                @endif
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3">
                    <a href="{{ route('admin.blog.index') }}" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                        <div class="card-body">
                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">Total Blog</div>
                            <div class="fw-bold text-white">
                                0
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-3">
                    <a href="#" class="card bg-info hoverable card-xl-stretch mb-xl-8">
                        <div class="card-body">
                            <div class="text-white fw-bolder fs-2 mb-2 mt-5">Total User</div>
                            <div class="fw-bold text-white">
                                @if (isset($user))
                                    {{ $user }}
                                @else
                                    0
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
