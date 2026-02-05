 <!--=====Footer start=======-->
    <footer class="footer-area padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-footer mr50 hadding2">
                        <div class="site-logo home1-site-logo">
                            <a href="#">
                                <img src="{{ asset($settings['site_main_logo']) }}" style="height: 150px" alt="" />
                            </a>
                        </div>
                        <div class="space30"></div>
                        <div class="hadding9">
                            <p>
                                {{ $settings['site_information'] }}
                            </p>
                        </div>
                    </div>
                    <div class="space24"></div>
                    <div class="social social9">
                        <ul>
                            @foreach ($socials as $item)
                            <li><a href="{{ $item->link }}"><i class="{{ $item->icon }}"></i></a></li>
                        @endforeach
                        </ul>
                    </div>

                </div>
                <div class="col-lg col-sm-6 col-6 hadding2">
                    <div class="single-footer single-footer9">
                        <h3>
                            Explore
                        </h3>
                        <div>
                            <ul>
                                <li><a href="{{ route('frontend.about') }}"><span><i class="fa-solid fa-plane"></i></span> About</a>
                                </li>
                                <li><a href="{{ route('frontend.service') }}"><span><i class="fa-solid fa-plane"></i></span> Service</a>
                                </li>
                                <li><a href="{{ route('frontend.blog') }}"><span><i class="fa-solid fa-plane"></i></span> Blog</a></li>
                                <li><a href="{{ route('frontend.abroad') }}"><span><i class="fa-solid fa-plane"></i></span> Countries</a>
                                </li>
                                <li><a href="{{ route('frontend.contact') }}"><span><i class="fa-solid fa-plane"></i></span>
                                        Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm-6 col-6 hadding2">
                    <div class="single-footer single-footer9">
                        <h3>
                           Country
                        </h3>
                        <div>
                            <ul>
                                @foreach ($footer_countries_1 as $country)
                                <li><a href="{{ route('frontend.abroadsingle', $country->slug) }}"><span><i class="fa-solid fa-plane"></i></span> {{ $country->title }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 hadding2">
                    <div class="single-footer-contact single-footer single-footer2">
                        <h3>
                            Get in touch
                        </h3>
                        <div class="padding-left20">
                            <div class="hadding1">
                                <p style="color: #181A1C;">{{ $settings['contact_location'] ?? 'asmita' }}</p>
                            </div>

                            <div class="contact-icon-box2">
                                <div class="contact-icon">
                                    <img src="{{asset("frontend/assets/img/icons/contact9-icon2.svg")}}" alt="">
                                </div>
                                <div class="contact-icon-h">
                                    <a href="tel:921-888-0022">{{ $settings['contact_phone'] ?? '+123456789' }}</a>
                                </div>
                            </div>

                            <div class="contact-icon-box2">
                                <div class="contact-icon">
                                    <img src="{{asset('frontend/assets/img/icons/contact9-icon1.svg')}}" alt="">
                                </div>
                                <div class="contact-icon-h">
                                    <a href="mailto:{{ $settings['contact_email'] ?? 'asmita' }}">{{ $settings['contact_email'] ?? 'asmita' }}</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row align-items-center copyright2">
                <div class="col-lg-12 text-center hadding1">
                    <p>
                        © {{ date('Y') }}
                        {!! $settings['site_copyright'] ?? 'u00a9 Destination Marker. All rights reserved' !!}
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!--=====Footer end=======-->
