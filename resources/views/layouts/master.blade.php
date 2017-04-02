<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('meta')
    @yield('styles')
    @include('includes.head')
</head>
<body>
    @include('includes.header')
    <div id="main">
        <div class="wrapper">
            @yield('content')
        </div>
    </div>
    @include('includes.scripts')
    @yield('scripts')
    @include('includes.footer')
</body>
</html>