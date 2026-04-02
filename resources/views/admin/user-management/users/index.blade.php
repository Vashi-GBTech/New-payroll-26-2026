@extends('admin.layouts.admin')
@section('title') {{ __('Employee Management')}} @endsection

@section('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/comman.css') }}">
@endsection

@section('breadcrumb')
    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">{{ __('Employee Details')}}</h1>
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{url('/dashboard')}}" class="text-muted text-hover-primary">{{ __('Dashboard')}}</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-200 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-dark">{{ __('Employee Details')}}</li>
    </ul>
@endsection

@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
        <div class="col-sm-12">
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} </p>
        </div>
        @endif
    @endforeach

    @if ($errors->any())
        <div class="col-sm-12">
            @foreach ($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="row">
        <div class="col-3">
            <div class="alert alert-success text-center border border-success">
                <h5 class="alert-heading">{{ __('Total Employee')}}</h5>
                <p class="mb-0" id="completeValue"></p>
            </div>
        </div>
        
    </div>

    <div class="card mt-4">
        <div class="card-header border-0 pt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                        </svg>
                    </span>
                    <input type="text" data-kt-table-filter="search" class="form-control w-250px ps-15" placeholder="Search department" />
                </div>
            </div>
            <div class="card-toolbar">
                <a href="{{ route('user.create') }}" class="btn btn-primary mx-3">
                    {{ __('Add Employee')}}
                </a>
                <a id="userEcelDownloadId" onclick="excelSampleDownload(event, 'user/excel-sample-download', 'userUploadBtnId')" class="btn btn-success mx-3"> {{ __('Excel Download') }} </a>
                <input type="file" id="userExcelFile" accept=".xlsx, .xls" style="display:none" />
                <button id="userUploadBtnId" onclick="triggerUserCreateExcelFile(event, 'user/bulk-upload', 'userEcelDownloadId', 'userExcelFile')" class="btn btn-success mx-3"> {{ __('Excel Upload')}} </button>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table">
                <thead>
                    <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="text-center min-w-125px">{{ __('Id')}}</th>
                        <th class="text-center min-w-125px">{{ __('Name')}}</th>
                        <th class="text-center min-w-125px">{{ __('Role')}}</th>
                        <th class="text-center min-w-125px">{{ __('Action')}}</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/custom/comman.js') }}"></script>
@endsection