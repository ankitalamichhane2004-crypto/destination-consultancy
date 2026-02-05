@extends('layouts.frontend.master')
@section('content')
    <div class="paginacontainer">
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
    </div>
    <!--=====hero area start=======-->
    <div class="hero-area2 _relative"
        style="background-image: url({{ asset('frontend/assets/img/bg/header9-bg.png') }}); min-height: 800px; background-position: center; background-repeat: no-repeat; background-size: cover; display: flex; align-items: center;">
        <div class="container">
            <div class="space80"></div>
            @if ($sliders)
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="main-hadding9">
                            <span class="span">{{ $sliders->short_description }}</span>
                            <div class="space16"></div>
                            <h1 class="font-f-3">{{ $sliders->title }}</h1>
                            <div class="space24"></div>
                            <div class="font-f-7">{!! $sliders->description !!}</div>
                            <div class="space32"></div>
                            {{-- <form action="#">
                            <div class="hero9-inputs">
                                <input type="email" placeholder="Enter Your Email">
                                <div class="hero9-input-button">
                                    <button class="font-f-7 theme-btn18">Explore Visa</button>
                                </div>
                            </div>
                        </form> --}}
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="hero2-all-images hero2-all-images-m text-end">
                            <div class="hero9-img1">
                                <img src="{{ asset('frontend/assets/img/bg/hero9-main-img-shape.png') }}" alt="">
                            </div>
                            <div class="hero9-img2">
                                <img src="{{ asset($sliders->image) }}" alt="">
                            </div>
                            <div class="hero9-shape1">
                                <img src="{{ asset('frontend/assets/img/shapes/hero9-shape1.svg') }}" alt="">
                            </div>
                            <div class="hero9-shape2 aniamtion-key-1">
                                <img src="{{ asset('frontend/assets/img/shapes/hero9-shape2.svg') }}" alt="">
                            </div>
                            <div class="hero9-shape3 aniamtion-key-2">
                                <img src="{{ asset('frontend/assets/img/shapes/hero9-shape3.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <img class="hero9-shape5 aniamtion-key-2" src="{{ asset('frontend/assets/img/shapes/hero9-shape4.svg') }}"
            alt="">
        <img class="hero9-shape4 aniamtion-key-2" src="{{ asset('frontend/assets/img/shapes/hero9-shape5.svg') }}"
            alt="">
    </div>
    <!--=====hero area end=======-->
    <!--=====about start=======-->
    <div class="about9 sp3" style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about9-images">
                        <div class="about9-img1 img5" data-aos="zoom-out" data-aos-duration="700">
                            <img src="{{ asset($about_us->banner_image) }}" alt="">
                        </div>
                        {{-- <div class="video-play-box" data-aos="zoom-out" data-aos-duration="700">
                            <div class="about9-img2 img5">
                                <img src="assets/img/image/about9-img2.png" alt="">
                            </div>
                            <div class="video-play-btn9">
                                <a id="play-video" class="video-play-button popup-youtube"
                                    href="https://www.youtube.com/watch?v=Y8XpQpW5OVY">
                                    <span></span>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hadding9 about9-hadding">
                        <span class="span font-f-3" data-aos="fade-left"
                            data-aos-duration="700">{{ $about_us->title }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-left" data-aos-duration="900">
                            {{ $about_us->short_description }}</h1>
                        <div class="space24"></div>
                        <div data-aos="fade-left" data-aos-duration="1000">{!! $about_us->description !!}</div>
                        <div class="space30"></div>
                        <div class="" data-aos="fade-left" data-aos-duration="800">
                            <a href="{{ route('frontend.about') }}" class="theme-btn18 font-f-7">View Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====about end=======-->
    <!--=====service start=======-->
    <div class="service9 sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding9">
                        <span class="span font-f-3" data-aos="fade-up"
                            data-aos-duration="700">{{ $settings['services_title'] ?? '' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-up" data-aos-duration="900">
                            {{ $settings['services_subtitle'] ?? '' }}</h1>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="service9-box text-center position-relative" data-aos="fade-up" data-aos-duration="700">
                            <div class="service9-img img5 img100">
                                <img src="{{ asset($item->image) }}" alt="" height="380px">
                            </div>
                            <div class="serivce9-icon text-center">
                                <h4><a href="{{ route('frontend.singleservice', $item->slug) }}"><img
                                            src="assets/img/icons/service9-icon1.svg" alt="">
                                        <span>{{ $item->title }}</span> </a></h4>
                            </div>
                            <div class="space16"></div>
                            <a href="{{ route('frontend.singleservice', $item->slug) }}" class=" stretched-link"></a>
                            <a href="{{ route('frontend.singleservice', $item->slug) }}" class="learn-more9 font-f-3">Read
                                more
                                <span><i class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up" data-aos-duration="900">
                        <a href="{{ route('frontend.service') }}" class="theme-btn18 font-f-7">View All Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====service end=======-->
    <!--=====choose start=======-->
    @php
        $whyus1 = $why_choose_us->get(0);
        $whyus2 = $why_choose_us->get(1);
        $whyus3 = $why_choose_us->get(2);
        $whyus4 = $why_choose_us->get(3);
        $whyus5 = $why_choose_us->get(4);
        $whyus6 = $why_choose_us->get(5);
    @endphp
    <div class="choose2 sp3 _relative" style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding9">
                        <span class="font-f-3 span" data-aos="fade-up"
                            data-aos-duration="700">{{ $settings['whyChooseUs_title'] ?? '' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-up" data-aos-duration="900">
                            {{ $settings['whyChooseUs_subtitle'] ?? '' }}</h1>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    @if ($whyus1)
                        <div class="" data-aos="fade-right" data-aos-duration="700">
                            <div class="choose2-box3 choose2-left">
                                <div class="choose2-text-box3 choose2-text-box9">
                                    <h4><a href="#" class="font-f-4">{{ $whyus1->title }}</a></h4>
                                    <div class="space12"></div>
                                    <div class="font-f-4">{!! $whyus1->description !!} </div>
                                </div>
                                <div class="choose2-icon-box3 choose2-icon-box9">
                                    <img src="{{ asset($whyus1->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($whyus2)
                        <div class="" data-aos="fade-right" data-aos-duration="900">
                            <div class="choose2-box3 choose2-right">
                                <div class="choose2-text-box3 choose2-text-box9">
                                    <h4><a href="#" class="font-f-4">{{ $whyus2->title }}</a></h4>
                                    <div class="space12"></div>
                                    <div class="font-f-3">{!! $whyus2->description !!} </div>
                                </div>
                                <div class="choose2-icon-box3 choose2-icon-box9">
                                    <img src="{{ asset($whyus2->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($whyus3)
                        <div class="" data-aos="fade-right" data-aos-duration="1100">
                            <div class="choose2-box3 choose2-left">
                                <div class="choose2-text-box3 choose2-text-box9">
                                    <h4><a href="#" class="font-f-3">{{ $whyus3->title }}</a></h4>
                                    <div class="space12"></div>
                                    <div class="font-f-3">{!! $whyus3->description !!}</div>
                                </div>
                                <div class="choose2-icon-box3 choose2-icon-box9">
                                    <img src="{{ asset($whyus3->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="choose2-main-image" data-aos="zoom-out" data-aos-duration="700">
                        <div class="choose2-image img50">
                            <img src="{{ asset($why_us->banner_image) }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    @if ($whyus4)
                        <div class="" data-aos="fade-left" data-aos-duration="700">
                            <div class="choose2-box4 choose2-box9 choose2-right">
                                <div class="choose2-text-box4 choose2-text-box9">
                                    <h4><a href="#" class="font-f-3">{{ $whyus4->title }}</a></h4>
                                    <div class="space12"></div>
                                    <div class="font-f-3">{!! $whyus4->description !!} </div>
                                </div>
                                <div class="choose2-icon-box4 choose2-icon-box9">
                                    <img src="{{ asset($whyus4->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($whyus5)
                        <div class="" data-aos="fade-left" data-aos-duration="700">
                            <div class="choose2-box4 choose2-box9 choose2-left">
                                <div class="choose2-text-box4 choose2-text-box9">
                                    <h4><a href="#" class="font-f-3">{{ $whyus5->title }}</a></h4>
                                    <div class="space12"></div>
                                    <div class="font-f-3">{!! $whyus5->description !!}</div>
                                </div>
                                <div class="choose2-icon-box4 choose2-icon-box9">
                                    <img src="{{ asset($whyus5->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                    @if ($whyus6)
                        <div class="" data-aos="fade-left" data-aos-duration="700">
                            <div class="choose2-box4 choose2-box9 choose2-right">
                                <div class="choose2-text-box4 choose2-text-box9">
                                    <h4><a href="#" class="font-f-3">{{ $whyus6->title }}</a></h4>
                                    <div class="space12"></div>
                                    <div class="font-f-3">{!! $whyus6->description !!}</div>
                                </div>
                                <div class="choose2-icon-box4 choose2-icon-box9">
                                    <img src="{{ asset($whyus6->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <img class="service2-shape1 aniamtion-key-2" src="assets/img/shapes/choose9-shape2.svg" alt="">
        <img class="service2-shape2 aniamtion-key-2" src="assets/img/shapes/choose9-shape1.svg" alt="">
    </div>

    <!--=====choose end=======-->

    <!--=====explore start=======-->
    @php
        $leftCourses = $courses->slice(0, 2); // first 2
        $rightCourses = $courses->slice(2, 2); // next 2
    @endphp
    <div class="visa-explore sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <div class="hadding9">
                        <span class="font-f-3 span" data-aos="fade-up" data-aos-duration="700">
                            {{ $settings['courses_title'] ?? '' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-up" data-aos-duration="900">
                            {{ $settings['courses_subtitle'] ?? '' }}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    @foreach ($leftCourses as $item)
                        <div class="" data-aos="fade-up" data-aos-duration="700">
                            <div class="explore-box explore-box9">
                                {{-- <span class="font-f-2">Step 01</span> --}}
                                <div class="explore-box-hadding hadding1">
                                    <h3>
                                        <a href="{{ route('frontend.coursesingle', $item->slug) }}"
                                            class="stretched-link"></a>

                                        <a href="{{ route('frontend.coursesingle', $item->slug) }}"
                                            class="font-f-2">{{ $item->title }}</a>
                                    </h3>
                                    <div class="space16"></div>
                                    <p class="font-f-2">{{ $item->short_description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="space30"></div>
                    @foreach ($rightCourses as $item)
                        <div class="" data-aos="fade-up" data-aos-duration="700">
                            <div class="explore-box explore-box9">
                                {{-- <span class="font-f-2">Step 02</span> --}}
                                <div class="explore-box-hadding hadding1">
                                    <h3>
                                        <a href="{{ route('frontend.coursesingle', $item->slug) }}"
                                            class="stretched-link"></a>
                                        <a href="{{ route('frontend.coursesingle', $item->slug) }}"
                                            class="font-f-2">{{ $item->title }}</a>
                                    </h3>
                                    <div class="space16"></div>
                                    <p class="font-f-2">{{ $item->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up" data-aos-duration="900">
                        <a href="{{ route('frontend.course') }}" class="theme-btn18 font-f-7">View All courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====explore end=======-->

    <!--=====countries start=======-->

    <div class="countries8 sp3" style="background-color: #FDF9F9;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="hadding9 text-center">
                        <span class="span font-f-3" data-aos="fade-up"
                            data-aos-duration="700">{{ $settings['countries_title'] ?? '' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-up" data-aos-duration="800">
                            {{ $settings['countries_subtitle'] ?? '' }}</h1>
                    </div>
                </div>
            </div>
            <div class="space30"></div>
            <div class="row">
                @foreach ($countries as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="countries8-box text-center" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ route('frontend.abroadsingle', $item->slug) }}" class="stretched-link"></a>
                            <div class="countries8-box-img img100">
                                <img src="{{ asset($item->image) }}" style="height:450px; object-fit: cover" alt="">
                            </div>
                            <div class="hadding8-w countries8-box-hadding countries9-box-hadding">
                                <h4><a href="{{ route('frontend.abroadsingle', $item->slug) }}"
                                        class="font-f-3">{{ $item->title }}</a></h4>
                                <div class="space16"></div>
                                <p class="font-f-3">{{ $item->short_description }}</p>
                                <div class="space16"></div>

                                <a href="{{ route('frontend.abroadsingle', $item->slug) }}"
                                    class="learn-more8-w font-f-3">Read more <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="space40"></div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up" data-aos-duration="900">
                        <a href="{{ route('frontend.abroad') }}" class="theme-btn18 font-f-7">View All Countries</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=====countries end=======-->

    <!--=====team start=======-->
    @php
        $team1 = $teams->get(0);
        $team2 = $teams->get(1);
        $team3 = $teams->get(2);
        $team4 = $teams->get(3);
    @endphp
    <div class="team4 sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding9">
                        <span class="font-f-3 span" data-aos="fade-up"
                            data-aos-duration="700">{{ $settings['teams_title'] ?? '' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-up" data-aos-duration="900">
                            {{ $settings['teams_subtitle'] ?? '' }}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                @if ($team1)
                    <div class="col-lg-3 col-md-6">
                        <div class="space30"></div>
                        <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="700">
                            <div class="team4-img-box">
                                <div class="team4-img img50 img100">
                                    <img src="{{ asset($team1->image) }}" alt="">
                                </div>
                                {{-- <ul class="team4-icons team4-icons9">
                                    <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="hadding9">
                                <h4><a href="#" class="font-f-3">{{ $team1->name }}</a></h4>
                                <div class="space8"></div>
                                <p class="font-f-3">{{ $team1->position }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team2)
                    <div class="col-lg-3 col-md-6">

                        <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="900">
                            <div class="team4-img-box">
                                <div class="team4-img img50 img100">
                                    <img src="{{ asset($team2->image) }}" alt="">
                                </div>
                                {{-- <ul class="team4-icons team4-icons9">
                                    <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="hadding9">
                                <h4><a href="#" class="font-f-3">{{ $team2->name }}</a></h4>
                                <div class="space8"></div>
                                <p class="font-f-3">{{ $team2->position }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team3)
                    <div class="col-lg-3 col-md-6">
                        <div class="space30"></div>
                        <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="700">
                            <div class="team4-img-box">
                                <div class="team4-img img50 img100">
                                    <img src="{{ asset($team3->image) }}" alt="">
                                </div>
                                {{-- <ul class="team4-icons team4-icons9">
                                    <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="hadding9">
                                <h4><a href="#" class="font-f-3">{{ $team3->name }}</a></h4>
                                <div class="space8"></div>
                                <p class="font-f-3">{{ $team3->position }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team4)
                    <div class="col-lg-3 col-md-6">
                        <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="900">
                            <div class="team4-img-box">
                                <div class="team4-img img50 img100">
                                    <img src="{{ asset($team4->image) }}" alt="">
                                </div>
                                {{-- <ul class="team4-icons team4-icons9">
                                    <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="hadding9">
                                <h4><a href="#" class="font-f-3">{{ $team4->name }}</a></h4>
                                <div class="space8"></div>
                                <p class="font-f-3">{{ $team4->position }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!--=====team end=======-->
    <!--=====Testimonial start=======-->
    <div class="testimonial9 _relative sp3" style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding9">
                        <span class="font-f-3 span" data-aos="fade-up"
                            data-aos-duration="700">{{ $settings['testioninal_title'] ?? '' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-up" data-aos-duration="900">
                            {{ $settings['testioninal_subtitle'] ?? '' }}</h1>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                <div class="testimonial-slider owl-carousel" data-aos="fade-up" data-aos-duration="900">
                    @foreach ($testimonials as $item)
                        <div class="testimonial1-box">
                            {{-- <div class="testimonial-top-img">
                            <img src="assets/img/icons/google.svg" alt="">
                        </div> --}}
                            <div class="space24"></div>
                            <div class="hadding1">
                                <p class="font-f-3">{!! $item->description !!}</p>
                                <div class="space30"></div>
                                <div class="testimonial1-bottom">
                                    <div class="testimonial1-img img50">
                                        <img src="{{ asset($item->image) }}" alt="">
                                    </div>
                                    <div class="testimonial1-bottom-hadding">
                                        <h5><a href="#" class="font-f-3">{{ $item->name }}</a></h5>
                                        <div class="space4"></div>
                                        <p class="font-f-3">{{ $item->position }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up" data-aos-duration="900">
                        <a href="{{ route('frontend.testimonial') }}" class="theme-btn18 font-f-7">View All
                            Testimonial</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====Testimonial end=======-->
    <!--=====blog start=======-->
    <div class="blog-post-all sp3">
        <div class="container">
               <div class="row">
                <div class="col-lg-6 m-auto text-center">
                    <div class="hadding9">
                        <span class="span font-f-3" data-aos="fade-up"
                            data-aos-duration="700">{{ $settings['blogs_title'] ?? '' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-up" data-aos-duration="900">
                            {{ $settings['blogs_subtitle'] ?? '' }}</h1>
                    </div>
                </div>
            </div>
            <div class="space60"></div>
            <div class="row">
                @foreach ($blogs as $item)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{ route('frontend.blogsingle', $item->slug) }}" class="stretched-card-link">
                            <div class="single-blog-post single-blog-post2">
                                <div class="blog-post-img img100">
                                    <img src="{{ $item->image ? asset($item->image) : asset('frontend/assets/img/blog/default.png') }}"
                                        alt="{{ $item->title }}" style="height: 280px; object-fit: cover">
                                </div>
                                <div class="hadding2 blog-post-hadding">
                                    <h3 class="weight-600 blog-heading">
                                        {{ Str::limit($item->title, 40) }}
                                    </h3>
                                    <div class="space8"></div>
                                    <p>{{ Str::limit($item->short_description ?? strip_tags($item->description), 120) }}
                                    </p>
                                    <div class="blog-post-border"></div>
                                    <ul class="blog-post-icons">
                                        <li>
                                            <img src="{{ asset('frontend/assets/img/icons/blog-post-icon1.svg') }}"
                                                alt="">
                                            {{ $item->created_at->format('d M Y') }}
                                        </li>
                                        {{-- <li>
                                        <img src="{{ asset('frontend/assets/img/icons/blog-post-icon2.svg') }}" alt="">
                                        {{ $blog->comments_count ?? 0 }} Comments
                                    </li> --}}
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="space40"></div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" data-aos="fade-up" data-aos-duration="900">
                        <a href="{{ route('frontend.blog') }}" class="theme-btn18 font-f-7">View All Blogs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====blog end=======-->
    <!--=====contact start=======-->
    <div class="contact1 sp3" style="background-color: #FFFBFB;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact1-form-all" data-aos="zoom-out" data-aos-duration="700">
                        <div class="hadding1">
                            <h1 class="font-f-3">Contact Us</h1>
                        </div>
                        <form action="{{ route('frontend.contact.submit') }}" class="font-f-3" method="POST">
                            @csrf
                            <div class="contact3-form">
                                <div class="contact-from-input">
                                    <input name="name" type="text" placeholder="Your Name">
                                    <input name="phone" type="number" placeholder="Your Phone ">
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="contact-from-input contact-from-input2">
                                    <input name="email" type="text" placeholder="Your Email">
                                </div>
                                {{-- <div class="contact-from-input">
                                    <select class="wide">
                                        <option value="">Select Services</option>
                                        <option value="">Tourist Visa</option>
                                        <option value="">Work Visa</option>
                                        <option value="">Student Visa</option>
                                    </select>
                                </div> --}}
                                <div class="contact-from-input">
                                    <textarea cols="30" rows="3" placeholder="Additional Details" name="message"></textarea>
                                </div>
                                <div class="space20"></div>
                                <div>
                                    <button type="submit" style="border: none;"
                                        class="theme-btn18 font-f-3">Send</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hadding9 contact1-hadding">
                        <span class="font-f-2 span" data-aos="fade-left"
                            data-aos-duration="700">{{ $settings['contactform_title'] ?? 'Contact Us' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-left" data-aos-duration="900">
                            {{ $settings['contactform_description'] ??
                                'Our dedicated team of
                                                                                                                                                                                                                                experts is ready to assist you with all your visa-related needs.' }}
                        </h1>
                        <div class="contact-icon-box" data-aos="fade-left" data-aos-duration="1100">
                            <div class="contact-icon">
                                <img src="assets/img/icons/contact9-icon1.svg" alt="">
                            </div>
                            <div class="contact-icon-h">
                                <a href="#" class="font-f-3">{{ $settings['site_location'] }} </a>
                            </div>
                        </div>

                        <div class="contact-icon-box" data-aos="fade-left" data-aos-duration="900">
                            <div class="contact-icon">
                                <img src="assets/img/icons/contact9-icon2.svg" alt="">
                            </div>
                            <div class="contact-icon-h">
                                <a href="tel:{{ $settings['site_phone'] }}"
                                    class="font-f-3">{{ $settings['site_phone'] }}</a>
                            </div>
                        </div>

                        <div class="contact-icon-box" data-aos="fade-left" data-aos-duration="700">
                            <div class="contact-icon">
                                <img src="assets/img/icons/contact9-icon3.svg" alt="">
                            </div>
                            <div class="contact-icon-h">
                                <a href="mailto:{{ $settings['site_email'] }}"
                                    class="font-f-3">{{ $settings['site_email'] }}</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====contact end=======-->





    <!--=====cta start=======-->
    {{-- <div class="cta1 _relative" style="background-color: #181A1C;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center m-auto">
                    <div class="hadding1-w text-center">
                        <h1 class="font-f-3">Unlock Your Global Opportunities: Visa Consulting Services Await</h1>
                        <div class="space16"></div>
                        <p class="font-f-3">Are you dreaming of studying, working, or settling abroad? Don't let visa
                            complexities stand in your way! Our Visa Consulting experts are here to guide you through
                            the entire process, making your journey to a foreign land smooth and hassle-free.
                        </p>
                        <div class="space32"></div>
                        <a href="about.html" class="theme-btn19 font-f-3">Discover Your Visa Path Today!</a>
                    </div>
                </div>
            </div>
        </div>
        <img class="cta1-shape1 aniamtion-key-2" src="assets/img/icons/cta-shape1.svg" alt="">
        <img class="cta1-shape2 aniamtion-key-2" src="assets/img/icons/cta-shape2.svg" alt="">
    </div> --}}

    <!--=====cta end=======-->
@endsection
