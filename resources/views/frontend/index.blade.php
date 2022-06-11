@extends('frontend.layout.main')
@section('title',"Home")
@section('content')

<section id="marketing_message">
    <div class="container-fluid">
        <img class="img-fluid" src="{{asset('frontend/image/background/National-Portal-Card-PM605c6e0b26125.jpeg')}}" alt="">
        <marquee class="marketing_message_text" behavior="scroll" direction="">
            <a href="#">
                নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে নিয়ম মেনে মাস্ক ব্যবহার করুন। আতঙ্কিত না হয়ে বরং সচেতন থাকুন। ভিজিট করুন corona.gov.bd
            </a>
        </marquee>
    </div>
</section>

<section id="notice">
    <div class="container-fluid">
        <div class="card notice_card rounded-0 shadow-1">
            <div class="card-body">
                <div class="row">

                    <div class="col-md-2 col-lg-2 col-xl-2"></div>

                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                        <h4>{{__('home.notice')}}</h4>
                        <ul class="text-dark notices">
                            <li class="p-1 border-0"><span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span><a href="">ছুটির নোটিশ বুদ্ধ পূর্ণিমা (বৈশাখী পূর্ণিমা) .....</a></li>
                            <li class="p-1 border-0"><span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span><a href=""> ২০২০-২০২১ সালের এইচ.এস.সি. (বি.এম.) পরীক্ষার্থীদের ইউনিক আইডি তথ্য ফরম জমা সংক্র .....</a></li>
                            <li class="p-1 border-0"><span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span><a href=""> ২০২০-২০২১ শিক্ষাবর্ষের স্নাতক (সম্মান)-১ম বর্ষ ২০২১ সালের পরীক্ষার্থীদের ফরমপূরণ .....</a></li>
                            <li class="p-1 border-0"><span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span><a href=""> ২০২১-২০২২ শিক্ষাবর্ষের একাদশ শ্রেণির (সাধারণ) শিক্ষার্থীদের রেজিষ্ট্রেশন যাচাই-ব .....</a></li>
                            <li class="p-1 border-0"><span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span><a href=""> ২০২২ সালের উচ্চ মাধ্যমিক পরীক্ষার্থীদের ইউনিক আইডি তথ্য ফরমে ভুল সংক্রান্ত নোটিশ .....</a></li>
                        </ul>
                        <div class="row d-flex justify-content-end px-4">
                            <a class="btn btn-sm btn-secondary px-3 py-2" href="#">{{__('home.allnotice')}}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section id="board" class="mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Campus')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/campus.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Goals-and-Objectives')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Institutional-infrastructure')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.At-a-glance')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Explanation')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.History-of-College')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.About-Admission')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/admission512x512.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Application-of-Admission')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Students-Uniform')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Rules-and-Regulations')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Admission-Fee-&-session-charge')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.College-Administration')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/scholarship.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Administrative-Structure')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Academic-Council')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Citizen\'s-charter')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.College-Others-Committees')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Teachers-&-Staffs')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/faculty-icon-7.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Our-Teachers')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Our-Staffs')}}</a>
                                </li>

                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Academic-Paper')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/academic_paper.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Academic-Calendar')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Academic-Syllabus')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Exam-Routine')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Form-Fill-up-Examination-Committee')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Class-Routine')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Form-Download')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/notice&download.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Board-Form')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Incometax-Form')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Stipend-Form')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.University-Form')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Passport-Form')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Co-Curricular-Activity')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/Examination_ex.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Badhon')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Rover-Scouts')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Girls-guide')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('Red-Crescent')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Club')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.BNCC')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Result')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/GPA-512.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.HSC(General)')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.HSC(B.M.T)')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Degree(Pass)')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Degree(Honours)')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.BOU')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Internal-Examination')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Integrity-Plan')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/resources-.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Integrity-Plan')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Order-Notification')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Report')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Integrity Award')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Gallery')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/gallery-44-267592.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Photo-Gallery')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Video-Gallery')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Courses')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/course-list.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Higher-Secondary')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Higher-Secondary (BM)')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Degree-Pass)')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Bachelor-(Honors)')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.H.S.C,-Degree-(BOU)')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Miscellaneous')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/miscellaneous.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Holiday-List')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Medical-Center')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.In-house-Training')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Publications')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.National-Pay-scale')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Office-Order-Notification')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/mark-document.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Teachers/staffs-Notice')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Condolence-congratulatory-message')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Office-Order')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Letter-of-No-Objection')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="cl-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-2">
                <div class="card rounded-0 shadow-1">
                    <div class="card-body border-0 white-bg border-none">
                        <h4>{{__('home.Annual-Performance-Agreement')}}</h4>
                        <div class="row">
                        <div class="col-5 col-sm-5 col-md-4 col-lg-4 col-xl-4">
                            <img class="img-fluid" src="{{asset('frontend/image/background/contractpaper.png')}}" alt="">
                        </div>
                        <div class="col-7 col-sm-7 col-md-8 col-lg-8 col-xl-8">
                            <ul>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Notice')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Policies-Agreements')}}</a>
                                </li>
                                <li>
                                    <span class="text-success"><i class="fas fa-caret-right"></i>&nbsp;</span>
                                    <a class="gray-color" href="#">{{__('home.Notification')}}</a>
                                </li>
                            </ul>
                        </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="gellary">
    <div class="container-fluid mt-2">
        <div class="card rounded-0 border-0">
            <div class="card-body p-0">
                <h4>{{__('home.Video-Gallery')}}</h4>
                <hr>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card">
                            <iframe width="100%" height="355px"  src="https://www.youtube-nocookie.com/embed/XFG0i1cv2zY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="card">
                            <iframe width="100%" height="355px" src="https://www.youtube-nocookie.com/embed/XFG0i1cv2zY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="location">
    <div class="container-fluid mt-2">
        <div class="card rounded-0 border-0">
            <div class="card-body p-0">
                <h4>{{__('home.Our-Location')}}</h4>
                <hr>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3638.4961123936005!2d90.39894841480458!3d24.224421176419636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375676c56cba3bb1%3A0x6472b51ad4d7c3d1!2sPear%20Ali%20College!5e0!3m2!1sen!2sbd!4v1654076308696!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
