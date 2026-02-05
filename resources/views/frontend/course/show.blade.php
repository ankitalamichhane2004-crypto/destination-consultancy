@section('seo')
    @include('frontend.seo', [
        'name' => $coursesingle->seo_title ?? '',
        'title' => $coursesingle->seo_title ?? $coursesingle->title,
        'description' => $coursesingle->meta_description ?? '',
        'keyword' => $coursesingle->meta_keywords ?? '',
        'schema' => $coursesingle->seo_schema ?? '',
        'created_at' => $coursesingle->created_at,
        'updated_at' => $coursesingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<div class="page-hero-area _relative about-banner">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 m-auto text-center">
              <div class="page-hero-hadding">
                  <h1>{{ $coursesingle->title ?? 'Page Title' }}</h1>
                  <div class="space16"></div>
                  <div class="page-hero-p">
                      <a href="{{ route('frontend.home') }}">Home</a>
                      <span><i class="fa-solid fa-angle-right"></i></span>
                      <a href="{{ route('frontend.course') }}">Course</a>
                      <span><i class="fa-solid fa-angle-right"></i></span>
                      <p>{{ $coursesingle->title ?? '' }}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
    <!--=====pages hero end=======-->
    <!--=====service details start=======-->
    <div class="service-details-all sp3" style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="sidebar-all-content">
                        <article>
                            <div class="img5 img100">
                                <img src="{{ asset($coursesingle->image) }}" alt=""
                                    style="height: 440px; object-fit: cover">
                            </div>
                            <div class="space24"></div>
                            <div class="hadding2">
                                <h1>{{ $coursesingle->title }}</h1>
                                <div class="space16"></div>
                                {!! $coursesingle->description !!}
                            </div>
                        </article>
                        <div class="space20"></div>
                        <div class="space50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--=====service details end=======-->
    <!--=====countries start=======-->
    <div class="countries sp4" style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding22">
                        <span>Courses</span>
                        <div class="space16"></div>
                        <h1>Checkout More Courses</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($courses as $course)
                <div class="col-lg-6 col-md-6">
                    <div class="mb-4 position-relative" data-aos="fade-up" data-aos-duration="700">

                        <a href="{{ route('frontend.coursesingle', $course->slug) }}" class="stretch-link"></a>

                        <div class="explore-box explore-box9">
                            <div class="explore-box-hadding hadding1">
                                <h3>
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
    </div>
    <!--=====countries end=======-->
    <!--=====cta start=======-->
    <div class="cta2" style="background-color: #fe6032;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="cta2-hadding2">
                        <h1>We're Committed to Making your Visa Application Process</h1>
                        <div class="space16"></div>
                        <p>Visa Consulting doesn't just handle the paperwork; they genuinely care about their clients'
                            success. My consultant not only helped with the application visa consulting.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                </div>
            </div>
        </div>
    </div>
    <!--=====cta end=======-->
@endsection
