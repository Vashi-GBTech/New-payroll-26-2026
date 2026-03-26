<!DOCTYPE html>
<html lang="en">
<head>
    <base href="../../../" />
    <title>
        @section('title')
        @show
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/backend/images/gbtech.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{asset('assets/backend/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/backend/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/backend/css/style.css')}}" rel="stylesheet" type="text/css" />
    @section('header')
    @show
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", themeMode);
        }
    </script>
    <style>
        body {
            background: linear-gradient(135deg, #1a2b5c 0%, #263e7f 50%, #d4a45c 100%);
            background-attachment: fixed;
            min-height: 100vh;
        }

        [data-theme="dark"] body {
            background: linear-gradient(135deg, #0f1929 0%, #1a2b5c 50%, #8b6f47 100%);
        }
        
        .app-blank {
            background: transparent;
        }
    </style>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column justify-content-center align-items-center flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center align-items-center">
                @section('content')
                @show
            </div>
        </div>
    </div>
    <script>
        var hostUrl = "assets/";
    </script>
    <script src="{{asset('assets/backend/plugins/global/plugins.bundle.js')}}"></script>
    <script src="{{asset('assets/backend/js/scripts.bundle.js')}}"></script>
    <script src="{{asset('assets/backend/js/custom/authentication/sign-in/general.js')}}"></script>
    @section('footer')
    @show
</body>

</html>