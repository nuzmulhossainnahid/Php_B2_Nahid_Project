<!DOCTYPE html>
<html>

<head>
    @include('font.includes.meta')
    <title>Urdan - @yield('title')</title>
    @include('font.includes.style')
</head>




<body>
<div class="main-wrapper main-wrapper-2">
    @include('font.includes.header')

    @yield('body')

    @include('font.includes.fotter')
</div>
    @include('font.includes.script')

</body>

</html>