@section('seo')
    @include('frontend.seo', [
        'name' => $abroad_page->seo_title ?? '',
        'title' => $abroad_page->seo_title ?? $abroad_page->title,
        'description' => $abroad_page->meta_description ?? '',
        'keyword' => $abroad_page->meta_keywords ?? '',
        'schema' => $abroad_page->seo_schema ?? '',
        'created_at' => $abroad_page->created_at,
        'updated_at' => $abroad_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
      <!--=====pages hero start=======-->
      <div class="page-hero-area _relative about-banner"  >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Countries We Offer</h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="{{ route('frontend.home') }}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Countries</p>
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
      <!--=====pages hero end=======-->
      <div class="countrie3 sp3 _relative"  style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row">
                @foreach($abroadstudies as $country)
                    <div class="col-lg-4 col-md-6">
                        <a href="{{route('frontend.abroadsingle',$country->slug)}}" class="stretched-card-link">
                            <div class="countrie3-box">
                                <div class="countrie3-img img100 img5">
                                    <img src="{{ asset($country->image) }}" alt="{{ $country->name }}" class="country-img" style="height: 280px; object-fit:cover;">
                                </div>
                                <div class="countrie3-hadding">
                                    <h2 class="" style="color: white; font-size: 22px">
                                        {{ $country->title }}
                                    </h2>
                                    <div class="space16"></div>
                                    <p>{{ Str::limit($country->short_description, 120) }}</p>
                                    <div class="space16"></div>
                                    <span class="w-learn-more">
                                        Read More <i class="fa-solid fa-arrow-right"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="space50"></div>
        </div>
    </div>
@endsection



