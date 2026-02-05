@extends('layouts.frontend.master')
@section('seo')
    @include('frontend.seo', [
        'name' => $contact_page->seo_title ?? '',
        'title' => $contact_page->seo_title ?? $contact_page->title,
        'description' => $contact_page->meta_description ?? '',
        'keyword' => $contact_page->meta_keywords ?? '',
        'schema' => $contact_page->seo_schema ?? '',
        'created_at' => $contact_page->created_at,
        'updated_at' => $contact_page->updated_at,
    ])
@endsection
{{--
<div class="col-lg-6">
    <div class="section_title">
        <h4>{{ $settings['contact_form_title'] ?? '' }}</h4>

        <h1>{{ $settings['contact_form_subtitle'] ?? '' }}</h1>
        <p>{{ $settings['contact_form_description'] ?? '' }}</p>
    </div>
    <div class="contact_main_info">
        <div class="call-do-action-info">
            <div class="call-do-social_icon">
                <i class="fas fa-phone-alt"></i>
            </div>
            <div class="call_info">
                <p>Call us Anytime</p>
                <h3>{{ $settings['contact_phone'] ?? '+123456789' }}</h3>
            </div>
        </div>
        <div class="call-do-action-info">
            <div class="call-do-social_icon">
                <i class="fas fa-envelope-open"></i>
            </div>
            <div class="call_info">
                <p>Email us Anytime</p>
                <h3>{{ $settings['contact_email'] ?? 'asmita' }}</h3>
            </div>
        </div>
        <div class="call-do-action-info">
            <div class="call-do-social_icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="call_info">
                <p>Our Locations</p>
                <span>{{ $settings['contact_location'] ?? 'asmita' }}</span>
            </div>
        </div>
    </div>
</div> --}}
@section('content')
    <div class="page-hero-area _relative about-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1>Contact Us </h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="index1.html">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Contact Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====contact start=======-->
    <div class="contact7"  style="background-color: #FFF8F6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="hadding2 contact7-hadding">
                        <span class="span">{{ $settings['contact_form_title'] ?? '' }}</span>
                        <div class="space16"></div>
                        <h1>{{ $settings['contact_form_subtitle'] ?? '' }}</h1>
                        <div class="space16"></div>
                        <p>{{ $settings['contact_form_description'] ?? '' }} </p>
                        <div class="space8"></div>
                        <form action="{{ route('frontend.contact.submit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="contact7-form">
                                <div class="contact7-input">
                                    <input name="name" type="text" placeholder="Your Name*">
                                </div>
                                <div class="contact7-input">
                                    <input name="email" type="email" placeholder="Email Address*">
                                </div>
                                <div class="contact7-input">
                                    <textarea name="phone" cols="30" rows="3" placeholder="Write a Message*"></textarea>
                                </div>
                                <div class="space32"></div>
                                <button class="theme-btn5 font-f-7">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="contact-map contact-map2">
                        <div class="img100 img5" style="z-index: 9; position: relative;">
                            <img src="{{ asset('frontend/assets/img/image/contact-page.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="contact7-icon-box contact7-icon-box2">
                        <div class="contact7-icon">
                            <img src="{{ asset('frontend/assets/img/icons/location.png') }}" alt="">
                        </div>
                        <div class="contact7-iocn-hadding">
                            <h4><a href="#">Office Address</a></h4>
                            <div class="space6"></div>
                            <a href="#">{{ $settings['contact_location'] ?? 'asmita' }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact7-icon-box contact7-icon-box2">
                        <div class="contact7-icon">
                            <img src="{{ asset('frontend/assets/img/icons/email.png') }}" alt="">
                        </div>
                        <div class="contact7-iocn-hadding">
                            <h4><a href="#">Contact Number</a></h4>
                            <div class="space6"></div>
                            {{ $settings['contact_phone'] ?? '+123456789' }}

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact7-icon-box contact7-icon-box2">
                        <div class="contact7-icon">
                            <img src="{{ asset('frontend/assets/img/icons/email1.png') }}" alt="">
                        </div>
                        <div class="contact7-iocn-hadding">
                            <h4><a href="#">Email Address</a></h4>
                            <div class="space6"></div>
                            {{ $settings['contact_email'] ?? 'asmita' }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map-page">
        <iframe
            src="{{ $settings['site_location_url'] ?? '' }}" width="600"
            height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--=====contact end=======-->
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
