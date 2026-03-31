@extends('admin.layouts.auth')


@section('title') 
    {{ __('Login') }}
@endsection


@section('style')

@endsection


@section('content')
    <!-- Logo Section -->
    <div class="logo-container">
        <!-- <img src="{{ asset('assets/frontend/images/GBtechlogo.jpg') }}" alt="Gold Berries Logo" class="logo-img"> -->
    </div>

    <!-- Login Header Area -->
    <div class="login-header">
        <h1>Sign In to Your Account</h1>
    </div>

    <!-- Decorative Rule -->
    <div class="rule">
        <div class="rule-line"></div>
        <div class="rule-dot"></div>
        <div class="rule-line"></div>
    </div>

    <!-- Login Form -->
    <form action="{{ route('admin.auth') }}" method="POST" class="form" id="kt_sign_in_form">
        @csrf
        <div class="form-group">
            <label for="email">{{ __('Email Address')}}</label>
            <div class="input-container">
                <span class="input-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                </span>
                <input type="text" id="login" name="login" placeholder="enter your email/phone/username" autocomplete="email">
            </div>
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">{{ __('Password')}}</label>
            <div class="input-container">
                <span class="input-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="11" width="18" height="11" rx="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                </span>
                <input type="password" id="password" name="password" placeholder="Enter your password" autocomplete="current-password">
                <button type="button" class="show-password" onclick="showAndHidePassword()">
                    <svg id="eye-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="form-options">
            <label class="remember-me">
                <input type="checkbox" name="remember" id="remember">
                <span>{{ __('Remember me')}}</span>
            </label>
            <a href="{{ route('forget.password') }}" class="forgot-password">{{ __('Forgot password?')}}</a>
        </div>
        <button type="submit" id="kt_sign_in_submit" class="btn-login">{{ __('Sign In')}} </button>
    </form>
@endsection

@section('script')

@endsection
