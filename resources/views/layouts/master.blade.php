<!doctype html>
<html lang="en">
<head>
    <!--meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>@yield('title')</title-->
    @yield('meta')
    @include('includes.head')
</head>
<body>
    @include('includes.header')


<div class="wrapper">
    @yield('content')
</div>

@include('includes.footer')

@include('includes.scripts')

</body>
</html>