<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Link file .css compilato. asset legge i file direttamente dalla cartella public--}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('pageTitle')</title>
</head>
<body>
    @include('partials.header')
    <main>
        @yield('pageContents')
    </main>
    @include('partials.footer')
</body>
</html>