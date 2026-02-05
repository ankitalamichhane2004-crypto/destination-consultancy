@section('seo')
    @include('frontend.seo', [
        'name' => $services->seo_title ?? '',
        'title' => $services->seo_title ?? $services->title,
        'description' => $services->meta_description ?? '',
        'keyword' => $services->meta_keywords ?? '',
        'schema' => $services->seo_schema ?? '',
        'created_at' => $services->created_at,
        'updated_at' => $services->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <div class="page-hero-area _relative about-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>{{ $services->title ?? 'About Us' }}</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="{{ route('frontend.home') }}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>{{ $services->title ?? 'About Us' }}</p>
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


    <!--=====service details start=======-->

    <div class="service-details-all sp3"  style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 m-auto">
                    <div class="sidebar-all-content">
                        <article>
                            <div class="img5 img100">
                                <img src="{{ $services->image ?? asset('frontend/assets/img/image/service-details-img1.png') }}"
                                    alt="">
                            </div>
                            <div class="space24"></div>
                            <div class="hadding2">
                                <h1>{{ $services->short_description }}</h1>
                                <div class="space16"></div>
                                <p>{!! $services->description !!}</p>
                            </div>
                        </article>
                        <div class="space50"></div>
                    </div>
                </div>
                <!--=====service start=======-->
                <div class="pages-service sp4" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 m-auto text-center">
                                <div class="hadding2">
                                    <span class="span">Services</span>
                                    <div class="space16"></div>
                                    <h1>Checkout More Services</h1>
                                </div>
                            </div>
                        </div>
                        <div class="space30"></div>
                        <div class="row">
                            @foreach ($more_services as $item)
                                <div class="col-lg-4 col-md-6">
                                    <div class="service9-box text-center" data-aos="fade-up" data-aos-duration="700">
                                        <div class="service9-img img5 img100">
                                            <img src="{{ asset($item->image) }}" alt="">
                                        </div>
                                        <div class="serivce9-icon text-center">
                                            <h4><img src="assets/img/icons/service9-icon1.svg" alt="">
                                                <span>{{ $item->title }}</span> </h4>
                                        </div>
                                        <div class="space16"></div>
                                        <a href="{{ route('frontend.singleservice', $item->slug) }}"
                                            class=" stretched-link"></a>
                                        <a href="{{ route('frontend.singleservice', $item->slug) }}"
                                            class="learn-more9 font-f-3">Read more <span><i
                                                    class="fa-solid fa-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--=====service end=======-->
            </div>
        </div>
    </div>
    <!--=====service details end=======-->
@endsection
