@extends('admin.layouts.admin')

@section('title')
    {{ __('Dashboard') }}
@endsection

@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .fc-event {
            font-size: 0.7rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .text-muted {
            color: #76c2b4 !important;
        }
    </style>
@endsection

@section('breadcrumb')
    @php
        $hour = now()->hour;
        if ($hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour < 17) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }
    @endphp
    <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">{{ __($greeting) }} {{ Auth::user()->name }}</h1>
@endsection

@section('content')
    <div class="row mt-10 calender_card">
        <div class="col-md-4">
            <div class="card mb-5 mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column"> {{ __('HMIS Platform') }} </h3>
                </div>
                <div class="card-body py-3">
                    <div class="align-items-start gap-4" >
                        <div class="d-flex flex-column">
                            <span class="text-muted fs-7 mb-1">{{ __('Patient Management System') }}</span>
                            <span class="text-muted fs-7 mb-1">{{ __('Electronic Health Records (EHR)') }}</span>
                            <div><span class="text-muted fs-7 mb-1">{{ __('Appointment & Staff Management') }}</span></div>
                            <div class="mt-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 col-12 mb-4">
            <div class="card h-100">
                <div class="card-header border-0 pt-4">
                    <h3 class="card-title mb-0">{{ __('Pharmacy') }}</h3>
                    <small class="text-muted">{{ __('') }}</small>
                </div>
                <div class="card-body py-3">
                    <div class="align-items-start gap-4" >
                        <div class="d-flex flex-column">
                            <span class="text-muted fs-7 mb-1">{{ __('Medicine Inventory Management') }}</span>
                            <span class="text-muted fs-7 mb-1">{{ __('Prescription Handling') }}</span>
                            <div><span class="text-muted fs-7 mb-1">{{ __('Billing & Stock Alerts') }}</span></div>
                            <div class="mt-5"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Help Section -->

</div>

@endsection

@section('scripts')
    <script src="{{ asset('assets/backend/js/custom/comman.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/dashboard.js') }}"></script>
    <script src="{{ asset('assets/backend/js/jquery-date.js') }}"></script>
    <!-- FullCalendar JS -->
    <script src="{{ asset('assets/backend/js/calender/index.global.min.js') }}"></script>
    <script> const getHolidayDetailsURL = "{{ url('admin/dashboard/get-holiday-details') }}"; </script>
@endsection



