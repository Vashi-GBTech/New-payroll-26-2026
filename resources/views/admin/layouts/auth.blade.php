<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/backend/css/login.css') }}">
    @yield('style')
</head>
<body id="kt_body">
    <!-- Premium Background Effects -->
    <div class="bg-gradient"></div>
    <div class="bg-grid"></div>

    <main class="login-wrapper">
        <div class="login-card">
            @yield('content')
        </div>
    </main>

    <script src="{{asset('assets/backend/js/custom/authentication/sign-in/general.js')}}"></script>
    @yield('script')
</body>
</html>