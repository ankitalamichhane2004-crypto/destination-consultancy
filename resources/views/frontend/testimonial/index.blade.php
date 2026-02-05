@section('seo')
    @include('frontend.seo', [
        'name' => $testimonial_page->seo_title ?? '',
        'title' => $testimonial_page->seo_title ?? $testimonial_page->title,
        'description' => $testimonial_page->meta_description ?? '',
        'keyword' => $testimonial_page->meta_keywords ?? '',
        'schema' => $testimonial_page->seo_schema ?? '',
        'created_at' => $testimonial_page->created_at,
        'updated_at' => $testimonial_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')

@section('content')

  <div class="page-hero-area _relative about-banner" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto text-center">
                <div class="page-hero-hadding">
                    <h1>Our Testimonials </h1>
                    <div class="space16"></div>
                    <div class="page-hero-p">
                        <a href="{{ route('frontend.home') }}">Home</a>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                        <p>Testimonial</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <div class="testimonial9 _relative sp3" style="background-color: #FFF8F6;">
        <div class="container">
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
        </div>
    </div>
@endsection
