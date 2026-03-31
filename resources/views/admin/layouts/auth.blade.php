<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('assets/backend/css/google_font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/login.css') }}">
    @yield('style')
</head>
<body id="kt_body">
    <div class="bg-gradient"></div>
    <div class="bg-grid"></div>
    <main class="login-wrapper">
        <div class="login-card">
            @yield('content')
        </div>
    </main>
    <script src="{{ asset('assets/backend/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{ asset('assets/backend/js/scripts.bundle.js')}}"></script>
    <script src="{{ asset('assets/backend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/backend/js/sweetalert.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/comman.js') }}"></script>
	<script src="{{ asset('assets/backend/js/custom/authentication/sign-in/general.js')}}"></script>
    <script>
        function showAndHidePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.innerHTML = `
                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                    <line x1="1" y1="1" x2="23" y2="23"></line>
                `;
            } else {
                passwordInput.type = 'password';
                eyeIcon.innerHTML = `
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                `;
            }
        }
    </script>
    @yield('script')
</body>
</html>