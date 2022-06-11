<!-- CSS here -->
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/fontawesome-all.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/default.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
@if (app()->getlocale() == "bn")
<style>
    body{
        font-family: SutonnyOMJ;
        font-size: 16px !important;
    }
    h1,h2,h3,h4,h5 p,a{
        font-family:SutonnyOMJ !important ;
    }
    .main-menu ul li a{
        font-size: 19px;
    }
</style>
@else

<style>
    body{
        font-size: 14px !important;
    }
    .main-menu ul li a{
        font-size: 14px ;
    }
</style>
@endif
