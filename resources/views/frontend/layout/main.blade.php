<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('frontend.layout.include.style')
</head>
<body>
<div class="container container-sm container-md container-lg container-xl">
    @include('frontend.layout.include.header')
<div class="row">
    <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 p-0">
        @yield('content')
    </div>
    <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-0">
        @include('frontend.layout.include.sidebar')
    </div>
</div>
@include('frontend.layout.include.footer')
</div>

    @include('frontend.layout.include.script')
</body>
</html>
