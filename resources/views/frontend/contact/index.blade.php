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


@section('content')
  <div class="page-hero-area _relative about-banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto text-center">
                    <div class="page-hero-hadding">
                        <h1> Contact Us </h1>
                        <div class="space16"></div>
                        <div class="page-hero-p">
                            <a href="{{ route('frontend.home') }}">Home</a>
                            <span><i class="fa-solid fa-angle-right"></i></span>
                            <p>Contact us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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


@endsection
