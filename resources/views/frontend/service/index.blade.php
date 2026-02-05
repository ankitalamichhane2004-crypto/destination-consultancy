@section('seo')
    @include('frontend.seo', [
        'name' => $service_page->seo_title ?? '',
        'title' => $service_page->seo_title ?? $service_page->title,
        'description' => $service_page->meta_description ?? '',
        'keyword' => $service_page->meta_keywords ?? '',
        'schema' => $service_page->seo_schema ?? '',
        'created_at' => $service_page->created_at,
        'updated_at' => $service_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <!--==================================================-->
    <!-- Start advisar Breadcumb Area -->
    <!--==================================================-->
    {{-- <div class="breadcumb-area d-flex" style="
      background: url('{{ asset($service_page->banner_image ?? '') }}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 text-center">
                    <div class="breadcumb-content">
                        <div class="breadcumb-title">
                            <h4>{{ $service_page->title ?? 'About Us' }}</h4>
                        </div>
                        <ul>
                            <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                            <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $service_page->title ?? 'About Us' }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="page-hero-area _relative about-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>{{ $service_page->title ?? 'About Us' }}</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="{{ route('frontend.home') }}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>{{ $service_page->title ?? 'About Us' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="page-hero-element1 aniamtion-key-2" src="assets/img/shapes/page-header-element1.svg" alt="">
        <img class="page-hero-element2 aniamtion-key-3" src="assets/img/shapes/page-header-element2.svg" alt="">
        <img class="page-hero-element3 aniamtion-key-1" src="assets/img/shapes/page-header-element1.svg" alt="">
        <img class="page-hero-element4 aniamtion-key-2" src="assets/img/shapes/page-header-element2.svg" alt="">
    </div>
    <!--=====service start=======-->

    <div class="service9 sp3"  style="background-color: #FFF8F6;">
        <div class="container">
                     <div class="space30"></div>
            <div class="row">
                @foreach ($services as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="service9-box text-center position-relative" data-aos="fade-up" data-aos-duration="700">
                            <div class="service9-img img5 img100">
                                <img src="{{ asset($item->image) }}" alt=" " height="380px">
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
                    {{-- <div class="text-center" data-aos="fade-up" data-aos-duration="900">
                        <a href="service.html" class="theme-btn18 font-f-7">View All Services</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!--=====service end=======-->
@endsection
