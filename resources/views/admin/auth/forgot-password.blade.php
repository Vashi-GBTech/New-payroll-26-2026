@extends('admin.layouts.auth')
@section('title') 
    {{ __('Forgot Password') }}
@endsection

@section('style')

@endsection

@section('content')
    <!-- Logo Section -->
    <div class="logo-container">
        <img src="{{ asset('assets/frontend/images/GBtechlogo.jpg') }}" alt="Gold Berries Logo" class="logo-img">
    </div>

    <!-- Header Area -->
    <div class="login-header">
        <h1>Reset Your Password</h1>
        <p style="color: var(--color-grey-light); font-size: 0.85rem; margin-top: 0.5rem; text-align: center;">Enter your email address and we'll send you instructions to reset your password.</p>
    </div>

    <!-- Decorative Rule -->
    <div class="rule">
        <div class="rule-line"></div>
        <div class="rule-dot"></div>
        <div class="rule-line"></div>
    </div>

    <!-- Forgot Password Form -->
    <form action="{{ route('forget.password.submit') }}" method="POST" class="form">
        @csrf
        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email Address</label>
            <div class="input-container">
                <span class="input-icon">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                    </svg>
                </span>
                <input type="email" id="email" name="email" placeholder="you@company.com" required autocomplete="email">
            </div>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-login" style="margin-top: 1rem;">Send Reset Link</button>

        <!-- Back to Login -->
        <div style="text-align: center; margin-top: 1.5rem;">
            <a href="{{ route('login') }}" style="color: var(--color-gold); text-decoration: none; font-size: 0.85rem; font-weight: 500;">← Back to Sign In</a>
        </div>
    </form>
@endsection

@section('script')

@endsection
