<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::to('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/page-center.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/prism.css') }}">
    @yield('styles')
</head>
<body>
@include('partials.header')
<div class="wrapper">
    @yield('content')
</div>
@include('partials.footer')
<script src="{{ URL::to('js/app.js') }}" type="application/javascript"></script>
<script src="{{ URL::to('js/materialize.js') }}" type="application/javascript"></script>
<script src="{{ URL::to('js/materialize.min.js') }}" type="application/javascript"></script>
<script src="{{ URL::to('js/plugins.js') }}" type="application/javascript"></script>
<script src="{{ URL::to('js/prism.js') }}" type="application/javascript"></script>
<script src="{{ URL::to('js/jquery-1.11.2.js') }}" type="application/javascript"></script>
<script src="{{ URL::to('js/bootstrap.min.js') }}" type="application/javascript"></script>
<script src="{{ URL::to('js/raphael-min.js') }}" type="application/javascript"></script>
@yield('scripts')
</body>
</html>