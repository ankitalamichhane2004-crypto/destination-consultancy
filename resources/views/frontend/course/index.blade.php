@section('seo')
    @include('frontend.seo', [
        'name' => $course_page->seo_title ?? '',
        'title' => $course_page->seo_title ?? $course_page->title,
        'description' => $course_page->meta_description ?? '',
        'keyword' => $course_page->meta_keywords ?? '',
        'schema' => $course_page->seo_schema ?? '',
        'created_at' => $course_page->created_at,
        'updated_at' => $course_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
    <div class="page-hero-area _relative about-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Our Courses </h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="{{ route('frontend.home') }}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====course start=======-->
    <div class="visa-explore sp3"  style="background-color: #FFF8F6;">
        <div class="container">
            <div class="space30"></div>
            <div class="row">

                @foreach ($course as $course)
                    <div class="col-lg-6 col-md-6">
                        <div class="mb-4 position-relative" data-aos="fade-up" data-aos-duration="700">
                            <div class="explore-box explore-box9">
                                <div class="explore-box-hadding hadding1">
                                    <h3>
                                        <a href="{{ route('frontend.coursesingle', $course->slug) }}"
                                            class="stretched-link"></a>
                                        <a href="{{ route('frontend.coursesingle', $course->slug) }}" class="font-f-2">
                                            {{ Str::limit($course->title, 60) }}
                                        </a>
                                    </h3>
                                    <div class="space16"></div>
                                    <p class="font-f-2">
                                        {{ Str::limit($course->short_description ?? strip_tags($course->description), 150) }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

    <!--=====course end=======-->
@endsection
