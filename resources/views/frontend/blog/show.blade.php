@section('seo')
    @include('frontend.seo', [
        'name' => $blogsingle->seo_title ?? '',
        'title' => $blogsingle->seo_title ?? $blogsingle->title,
        'description' => $blogsingle->meta_description ?? '',
        'keyword' => $blogsingle->meta_keywords ?? '',
        'schema' => $blogsingle->seo_schema ?? '',
        'created_at' => $blogsingle->created_at,
        'updated_at' => $blogsingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
<div class="page-hero-area _relative about-banner">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 m-auto text-center">
              <div class="page-hero-hadding">
                  <h1>{{ $blogsingle->title ?? 'Page Title' }}</h1>
                  <div class="space16"></div>
                  <div class="page-hero-p">
                      <a href="{{ route('frontend.home') }}">Home</a>
                      <span><i class="fa-solid fa-angle-right"></i></span>
                      <p>{{ $blogsingle->title ?? '' }}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
    <!--=====pages hero end=======-->
    <!--=====service details start=======-->
    <div class="service-details-all sp3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="sidebar-all-content">
                        <article>
                            <div class="img5 img100">
                                <img src="{{ asset($blogsingle->image) }}" alt=""
                                    style="height: 440px; object-fit: cover">
                            </div>
                            <div class="space24"></div>
                            <div class="hadding2">
                                <h1>{{ $blogsingle->title }}</h1>
                                <div class="space16"></div>
                                {!! $blogsingle->description !!}
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
    <div class="countries sp4">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="hadding22">
                        <span>Blog</span>
                        <div class="space16"></div>
                        <h1>Checkout More Courses</h1>
                    </div>
                </div>
            </div>
            <div class="row">
              @foreach ($blogs as $blog)
              <div class="col-lg-4 col-md-6">
                  <a href="{{ route('frontend.blogsingle', $blog->slug) }}" class="stretched-card-link">
                      <div class="single-blog-post single-blog-post2">
                          <div class="blog-post-img img100">
                              <img src="{{ $blog->image ? asset($blog->image) : asset('frontend/assets/img/blog/default.png') }}"
                                  alt="{{ $blog->title }}" style="height: 280px; object-fit: cover">
                          </div>
                          <div class="hadding2 blog-post-hadding">
                              <h3 class="weight-600 blog-heading">
                                  {{ Str::limit($blog->title, 50) }}
                              </h3>
                              <div class="space8"></div>
                              <p>{{ Str::limit($blog->short_description ?? strip_tags($blog->description), 120) }}</p>
                              <div class="blog-post-border"></div>
                              <ul class="blog-post-icons">
                                  <li>
                                      <img src="{{ asset('frontend/assets/img/icons/blog-post-icon1.svg') }}" alt="">
                                      {{ $blog->created_at->format('d M Y') }}
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
