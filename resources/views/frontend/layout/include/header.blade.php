   <!-- header-start -->
   <header id="home">
    <div class="header-area">
        <!-- header-top -->
        <div class="header-top bg-dark p-2 d-flex justify-content-end">
            @if (app()->getlocale() == "bn")

            <a href="{{route('lenguageChange',['locale'=>"en"])}}" class="text-light">English</a>
            @else
            <a href="{{route('lenguageChange',['locale'=> "bn"])}}" class="text-light">Bangla</a>
            @endif
        </div>
        <!-- /end header-top -->

        <!-- slider -->
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('/frontend/img/52614b366ea5aae.jpg')}}"
                        alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/frontend/img/pm6088f78c45897.jpg')}}"
                        alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('/frontend/img/19961325bb691bb7.jpg')}}"
                        alt="Third slide">
                </div>
                <h1 class="test">{{__('home.collage-name')}}</h1>
            </div>
        </div>
        <!-- slider-end -->

        <!-- header-bottom -->
        <div class="header-bottom-area" style="transition: .6s;">

            <div class="row align-items-center">
                <div class="col-4 d-lg-none">
                    {{__('home.SelectMenu')}}
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-8">
                    <div class="main-menu">
                        <nav id="mobile-menu" style="display: block;">
                            <ul>
                                <li><a href="#"><i class="fa fa-home"></i></a></li>
                                <li>
                                    <a href="#home">{{__('home.Campus')}}</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="index.html">Home style 1</a>
                                        </li>
                                        <li>
                                            <a href="index_2.html">Home style 2</a>
                                        </li>
                                        <li>
                                            <a href="index_3.html">Home style 3</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#about">{{__('home.AdmissionRelated')}}</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="about_us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="advisors.html">Advisors</a>
                                        </li>
                                        <li>
                                            <a href="advisors_details.html">Advisors Details</a>
                                        </li>
                                        <li>
                                            <a href="faq.html">FAQ</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#about">{{__('home.Courses')}}</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="events_01.html">Events 01</a>
                                        </li>
                                        <li>
                                            <a href="events_02.html">Events 02</a>
                                        </li>
                                        <li>
                                            <a href="event_details.html">Events Details</a>
                                        </li>
                                        <li>
                                            <a href="shop_pages.html">Shop</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="course_01.html">{{__('home.Management')}}</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="course_01.html">Courses 01</a>
                                        </li>
                                        <li>
                                            <a href="course_02.html">Courses 02</a>
                                        </li>
                                        <li>
                                            <a href="course_03.html">Courses 03</a>
                                        </li>
                                        <li>
                                            <a href="course_details.html">Course Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="events_01.html">{{__('home.AcademicPaper')}}</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="grid_news.html">Blog 3 Column</a>
                                        </li>
                                        <li>
                                            <a href="standard_blog.html">Blog Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="news_details.html">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact_us.html">{{__('home.Student')}}</a>
                                </li>
                                <li>
                                    <a href="contact_us.html">{{__('home.TheResult')}}</a>
                                </li>
                                <li>
                                    <a href="contact_us.html">{{__('home.Gallery')}}</a>
                                </li>
                                <li>
                                    <a href="contact_us.html">{{__('home.Communication')}}</a>
                                </li>
                                <li>
                                    <a href="contact_us.html">{{__('home.SMSPanel')}}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mobile-menu"></div>
                </div>
            </div>

        </div>
        <!-- /end header-bottom -->
    </div>
</header>
<!-- header-end -->
