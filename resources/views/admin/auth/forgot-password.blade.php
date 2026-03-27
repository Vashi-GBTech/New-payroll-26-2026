<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold Berries - Forgot Password</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Styled CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend/css/login.css') }}">
</head>
<body>
    <!-- Premium Background Effects -->
    <div class="bg-gradient"></div>
    <div class="bg-grid"></div>

    <main class="login-wrapper">
        <div class="login-card">
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
        </div>
    </main>
</body>
</html>
