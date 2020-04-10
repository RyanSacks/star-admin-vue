<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Favicon -->
{{--        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">--}}

        <!-- Star Admin CSS -->
        <link href="{{ asset('css/app.98cb89f904799948025dc748ae69bae7.css') }}" rel=stylesheet>

    </head>
    <body>
    <div id="app"></div>

    <!-- Star Admin JS -->
    <script type=text/javascript src={{ asset('js/manifest.b16671f03ac74f05c6b7.js') }}></script>
    <script type=text/javascript src={{ asset('js/vendor.06ab76a0f05e1e612c1a.js') }}></script>
    <script type=text/javascript src={{ asset('js/app.b0003de75b73c19bfcc3.js') }}></script>
    </body>
</html>
