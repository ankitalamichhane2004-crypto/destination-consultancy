@section('seo')
    @include('frontend.seo', [
        'name' => $blog_page->seo_title ?? '',
        'title' => $blog_page->seo_title ?? $blog_page->title,
        'description' => $blog_page->meta_description ?? '',
        'keyword' => $blog_page->meta_keywords ?? '',
        'schema' => $blog_page->seo_schema ?? '',
        'created_at' => $blog_page->created_at,
        'updated_at' => $blog_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')
    <div class="page-hero-area _relative about-banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Our Blog </h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="{{ route('frontend.home') }}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Blog</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-post-all sp3"  style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row">
                @foreach ($blog as $blog)
                <div class="col-lg-4 col-md-6">
                    <a href="{{ route('frontend.blogsingle', $blog->slug) }}" class="stretched-card-link">
                        <div class="single-blog-post single-blog-post2">
                            <div class="blog-post-img img100">
                                <img src="{{ $blog->image ? asset($blog->image) : asset('frontend/assets/img/blog/default.png') }}"
                                    alt="{{ $blog->title }}" style="height: 280px; object-fit: cover">
                            </div>
                            <div class="hadding2 blog-post-hadding">
                                <h3 class="weight-600 blog-heading">
                                    {{ Str::limit($blog->title, 40) }}
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

            <div class="space40"></div>

        </div>
    </div>
@endsection
