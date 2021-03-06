<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="ey8pzx5tPhEEecte7DaLj3WObQafSpC2nqHRjydeurg" />

    <title>Socialite OAuth</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .text-center {
            text-align: center;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 1.5rem 0;
            color: black;
        }

        .footer-flex {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .mx-2 {
            margin: 0 4px;
        }

        a.link {
            color: #1a202c;
            text-decoration: none;
        }

        a.link:hover {
            color: #4299e1;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Socialite OAuth
            </div>
        </div>
    </div>

    <h2 class="text-center">Welcome to Socialite OAuth</h2>
    <footer class="footer">
        <div class="mx-2 footer-flex">&copy; 2020 No Right Reserved. Everything is Open Source.</div>
        <br>
        <div class="footer-flex">
            <span>By: <a class="link" href="https://github.com/aliadhillon">Ali A. Dhillon</a></span>
            <a class="mx-2 link" href="/terms">Terms of Service</a>
            <a class="mx-2 link" href="/privacy">Privacy Policy</a>
        </div>
    </footer>
</body>

</html>