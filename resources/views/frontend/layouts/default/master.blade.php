<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=1">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=1">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=1">
    <link rel="manifest" href="/site.webmanifest?v=1">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=1" color="#ff0000">
    <link rel="shortcut icon" href="/favicon.ico?v=1">
    <meta name="apple-mobile-web-app-title" content="Authentic">
    <meta name="application-name" content="Authentic">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
          integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Authentic — Учим слова и фразы</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ mix('css/index.css') }}">
    @yield('styles')

</head>
<body>
<div id="app">
{{--    <hello-world></hello-world>--}}
</div>
@include('frontend.widgets.navbar.master')

@yield('header')

@yield('content')

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
                href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
    </div>
</footer>

@yield('scripts')
<script>
    /* Get the documentElement (<html>) to display the page in fullscreen */
    const elem = document.documentElement;

    const fullscreenToggle = document.getElementById('fullscreenToggle');


    // fullscreenToggle.addEventListener('click', function (e) {
    //     e.preventDefault();
    //     toggleFullscreen(e.currentTarget);
    // }, false);

    function toggleFullscreen(toggle) {
        if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement) {

            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullscreen) {
                document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
            }
            if (!toggle.classList.contains('e-fullscreenToggle--expanded')) {
                toggle.classList.add('e-fullscreenToggle--expanded');
            }

        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            }
            if (toggle.classList.contains('e-fullscreenToggle--expanded')) {
                toggle.classList.remove('e-fullscreenToggle--expanded');
            }
        }
    }
</script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

