@extends('admin.master')

@section('title', 'All files')
@section('toolbarTitle', 'Files')

@section('main-content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">

            <div class="row gy-5 g-xl-8">
                {{-- @foreach ($folders as $folder) --}}
                <div class="col-xl-3">
                    <a href="{{route('admin.files.index')}}"><img src="{{asset('assets/images/excel-icon.png')}}" height="100px" width="120px"></a>
                    {{-- <p>{{$folder->name}}</p> --}}
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
        <!--end::Container-->
    </div>
@endsection
