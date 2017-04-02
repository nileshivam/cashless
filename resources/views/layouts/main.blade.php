<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('meta')
    @include('includes.head')
    @yield('styles')
</head>
<body>
@include('includes.header')
<div id="main">
    <div class="wrapper">
        <aside id="left-sidebar-nav">
            @yield('left-content')
        </aside>

        @yield('right-content')
        <aside id="right-sidebar-nav">
        </aside>
    </div>
</div>
@include('includes.scripts')
@yield('scripts')
@include('includes.footer')
</body>
</html>

