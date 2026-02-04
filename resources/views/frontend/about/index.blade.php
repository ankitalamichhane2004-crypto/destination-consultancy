@section('seo')
    @include('frontend.seo', [
    'name' => $about_us->seo_title ?? '',
    'title' => $about_us->seo_title ?? $about_us->title,
    'description' => $about_us->meta_description ?? '',
    'keyword' => $about_us->meta_keywords ?? '',
    'schema' => $about_us->seo_schema ?? '',
    'created_at' => $about_us->created_at,
    'updated_at' => $about_us->updated_at,
])
@endsection
@extends('layouts.frontend.master')

@section('content')
      <!--==================================================-->
      <!-- Start advisar Breadcumb Area -->
      <!--==================================================-->

      {{-- <div class="breadcumb-area d-flex" style="
        background: url('{{ asset($about_us->banner_image ?? '') }}');">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-12 text-center">
                      <div class="breadcumb-content">
                          <div class="breadcumb-title">
                              <h4>{{ $about_us->title ?? 'About Us' }}</h4>
                          </div>
                          <ul>
                              <li><a href="{{ route('frontend.home') }}"><i class="bi bi-house-door-fill"></i> Home </a></li>
                              <li class="rotates"><i class="bi bi-slash-lg"></i>{{ $about_us->title ?? 'About Us' }}</li>
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
                                      <h1>{{ $about_us->title ?? 'About Us' }}</h1>
                                          <div class="space16"></div>
                                              <div class="page-hero-p">
                                                  <a href="{{ route('frontend.home') }}">Home</a>
                                                  <span><i class="fa-solid fa-angle-right"></i></span>
                                                  <p>{{ $about_us->title ?? 'About Us' }}</p>
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

      <!--==================================================-->
      <!-- End advisar Breadcumb Area -->
      <!--==================================================-->



      <!--==================================================-->
      <!-- Start advisar About Area Style Two-->
      <!--==================================================-->

      <!-- new design-->
       <!--=====about start=======-->


        <!--=====about end=======-->
      <div class="about9 sp3" style="background-color: #FFF8F6;">
          <div class="container">
              <div class="row">
                  <div class="col-lg-5">
                      <div class="about9-images">
                          <div class="about9-img1 img5" data-aos="zoom-out" data-aos-duration="700">
                              <img src="{{ asset($about_us->banner_image ?? 'frontend/assets/img/bg/page-bg.png') }}" alt="">
                          </div>
                          {{-- <div class="video-play-box" data-aos="zoom-out" data-aos-duration="700">
                              <div class="about9-img2 img5">
                                  <img src="assets/img/image/about9-img2.png" alt="">
                              </div>
                              <div class="video-play-btn9">
                                  <a id="play-video" class="video-play-button popup-youtube"
                                      href="https://www.youtube.com/watch?v=Y8XpQpW5OVY">
                                      <span></span>
                                  </a>
                              </div>
                          </div> --}}
                      </div>
                  </div>
                  <div class="col-lg-7">
                      <div class="hadding9 about9-hadding">
                          <span class="span font-f-3" data-aos="fade-left"
                              data-aos-duration="700">{{ $about_us->title }}</span>
                          <div class="space16"></div>
                          <h1 class="font-f-3" data-aos="fade-left" data-aos-duration="900">
                              {{ $about_us->short_description }}</h1>
                          <div class="space24"></div>
                          <div data-aos="fade-left" data-aos-duration="1000">{!! $about_us->description !!}</div>

                          {{-- <div class="about9-icon-boxs">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="about9-icon-box" data-aos="fade-left" data-aos-duration="700">
                                          <div class="about9-icon">
                                              <img src="assets/img/icons/about9-icon1.svg" alt="">
                                          </div>
                                          <div class="about9-icon-hadding">
                                              <h4><a href="#" class="font-f-3">Payment strategy</a></h4>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6">
                                      <div class="about9-icon-box" data-aos="fade-left" data-aos-duration="900">
                                          <div class="about9-icon">
                                              <img src="assets/img/icons/about9-icon2.svg" alt="">
                                          </div>
                                          <div class="about9-icon-hadding">
                                              <h4><a href="#" class="font-f-3">Risk management</a></h4>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6">
                                      <div class="about9-icon-box" data-aos="fade-left" data-aos-duration="800">
                                          <div class="about9-icon">
                                              <img src="assets/img/icons/about9-icon3.svg" alt="">
                                          </div>
                                          <div class="about9-icon-hadding">
                                              <h4><a href="#" class="font-f-3">Market Insight</a></h4>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-6">
                                      <div class="about9-icon-box" data-aos="fade-left" data-aos-duration="700">
                                          <div class="about9-icon">
                                              <img src="assets/img/icons/about9-icon4.svg" alt="">
                                          </div>
                                          <div class="about9-icon-hadding">
                                              <h4><a href="#" class="font-f-3">E-commerce solution</a></h4>
                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </div> --}}


                          <div class="space30"></div>
                          <div class="" data-aos="fade-left" data-aos-duration="800">
                              <a href="{{ route('frontend.service') }}" class="theme-btn18 font-f-7">View Our Services</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!--=====about end=======-->



            <!--=====team start=======-->

            <div class="team4 sp3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto text-center">
                        <div class="hadding9">
                            <span class="font-f-3 span" data-aos="fade-up" data-aos-duration="700">Our team</span>
                            <div class="space16"></div>
                            <h1 class="font-f-3" data-aos="fade-up" data-aos-duration="900">Our Expert Team Member
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="space60"></div>
                <div class="row">
                    @foreach ($teams as $team)

                        <div class="col-lg-3 col-md-6">
                            <div class="space30"></div>
                            <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="700">
                                <div class="team4-img-box">
                                    <div class="team4-img img50 img100">
                                        <img src="{{ $team->image ?? asset('frontend/assets/img/image/team4-img1.png') }}" alt="">
                                    </div>
                                    {{-- <ul class="team4-icons team4-icons9">
                                        <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                        </li>
                                        <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                    </ul> --}}
                                </div>
                                <div class="hadding9">
                                    <h4><a href="team-details.html" class="font-f-3">{{ $team->name }}</a></h4>
                                    <div class="space8"></div>
                                    <p class="font-f-3">{{ $team->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>

            <!--=====team end=======-->

            <!--=====Contact start=======-->


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
                                    <button type="submit" style="border: none;" class="theme-btn18 font-f-3">Send</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="hadding9 contact1-hadding">
                        <span class="font-f-2 span" data-aos="fade-left" data-aos-duration="700">{{ $settings['contactform_title'] ?? 'Contact Us' }}</span>
                        <div class="space16"></div>
                        <h1 class="font-f-3" data-aos="fade-left" data-aos-duration="900"> {{ $settings['contactform_description'] ?? 'Our dedicated team of
                            experts is ready to assist you with all your visa-related needs.' }}</h1>
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
                                <a href="tel:{{ $settings['site_phone'] }}" class="font-f-3">{{ $settings['site_phone'] }}</a>
                            </div>
                        </div>

                        <div class="contact-icon-box" data-aos="fade-left" data-aos-duration="700">
                            <div class="contact-icon">
                                <img src="assets/img/icons/contact9-icon3.svg" alt="">
                            </div>
                            <div class="contact-icon-h">
                                <a href="mailto:{{ $settings['site_email'] }}" class="font-f-3">{{ $settings['site_email'] }}</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <!--=====contact end=======-->


        <!--=====cta start=======-->

        {{-- <div class="cta2" style="background-color: #13AAA1;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7">
                <div class="cta2-hadding2">
                  <h1>We're Committed to Making your Visa Application Process</h1>
                  <div class="space16"></div>
                  <p>Visa Consulting doesn't just handle the paperwork; they genuinely care about their clients' success. My consultant not only helped with the application visa consulting.</p>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="cta2-form">
                  <div class="cta2-input">
                    <input type="Enter Your Email" placeholder="Enter Your Email">
                  </div>
                    <button class="theme-btn5 cta2-button font-f-7">Subscribe Now</button>
                </div>
              </div>
            </div>
          </div>
        </div> --}}

@endsection
