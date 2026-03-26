@extends('admin.layouts.auth')
@section('title', 'Payroll Management System')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('assets/backend/css/comman.css') }}">
@endsection
@section('content')
<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-right justify-content-lg-end p-5">
	<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-5">
		<div class="w-md-500px">
			<form class="form" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('admin.auth') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="text-center mb-11">
                    <img alt="Logo" src="{{ asset('assets/backend/images/gbtech.png')}} " class="mb-5" style="height: 100px;" />
					<div class="fs-1 fw-bolder text-dark mb-3">{{ __('Welcome to Payroll Management Platform')}}</div>
				</div>

				<div class="" id="loginDiv">
					<div class="fv-row mb-3">
						<input type="text" placeholder="Login Id" id="Login" name="login" autocomplete="off" class="form-control bg-transparent" />
					</div>
					<div class="fv-row mb-3">
						<input type="password" placeholder="Password" id="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
					</div>
				</div>

				<div class="d-flex justify-content-between">
					<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
						<span class="indicator-label">{{ __('Sign In')}}</span>
						<span class="indicator-progress">{{ __('Please wait...')}}
							<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
					</button>
					<a class="btn btn-info " id="forget-password" href="{{ url('forget/password') }}">{{ __('Forget Password?')}}</a>
				</div>
			</form>
			<?php $date = date('Y'); ?>
			<br><br>
			<div>
				<p class="text-center mt-5 mb-0">{{ __('Copyright')}} &copy; {{ $date }} <a href="https://www.technostacks.com/" target="_blank" class="text-primary text-hover-primary">{{ __('GBTech Solutions')}}</a>. {{ __('All rights reserved.')}}</p>
			</div>
		</div>
	</div>
</div>

@endsection

