  <!--=====HEADER START=======-->
  <header>
      <div class="header-area header-area-all d-none d-lg-block" id="header">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <div class="header-elements _relative">
                          <div class="site-logo home1-site-logo">
                              <a href="{{ route('frontend.home') }}">
                                  <img src="{{ asset($settings['site_main_logo']) }}" style="height: 60px" alt="" />
                              </a>
                          </div>
                          <div class="main-menu-ex main-menu-ex9">
                              <ul>
                                  <li class="mega-dropdawn"><a href="{{ route('frontend.home') }}">Home </a>
                                  </li>
                                  <li class="has-dropdown"><a href="{{ route('frontend.about') }}">About Us <i
                                              class="fa-solid fa-angle-down"></i></a>
                                      <ul class="sub-menu">
                                          <li><a href="{{ route('frontend.about') }}">about</a></li>
                                          <li><a href="{{ route('frontend.team') }}">Our Team</a></li>

                                          <li><a href="{{ route('frontend.testimonial') }}">Testimonial</a></li>
                                      </ul>
                                  </li>
                                  <li class="has-dropdown"><a href="{{ route('frontend.abroad') }}">Country <i
                                              class="fa-solid fa-angle-down"></i></a>
                                      <ul class="sub-menu">
                                          @foreach ($footer_countries as $country)
                                              <li><a
                                                      href="{{ route('frontend.abroadsingle', $country->slug) }}">{{ $country->title }}</a>
                                              </li>
                                          @endforeach
                                      </ul>
                                  </li>
                                  <li class="has-dropdown"><a href="{{ route('frontend.course') }}">Courses <i
                                              class="fa-solid fa-angle-down"></i></a>
                                      <ul class="sub-menu">
                                          @foreach ($footer_course as $course)
                                              <li><a
                                                      href="{{ route('frontend.coursesingle', $course->slug) }}">{{ $course->title }}</a>
                                              </li>
                                          @endforeach
                                      </ul>
                                  </li>
                                  <li class="has-dropdown"><a href="{{ route('frontend.service') }}">Service </a>
                                  </li>
                                  <li class="has-dropdown"><a href="{{ route('frontend.blog') }}">Blog </a>
                                  </li>
                                  {{-- <li class="has-dropdown"><a href="{{ route('frontend.contact') }}">Contact Us </a> </li> --}}
                              </ul>
                          </div>
                          <div class="home2-header-buttons">
                              <div class="button2-all">
                                  <a href="{{ route('frontend.contact') }}" class="theme-btn18 font-f-7">Contact Us</a>
                              </div>
                          </div>
                          <div class="mobile-menu-bar d-lg-none">
                              <i class="fas fa-bars"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!--=====Mobile header start=======-->
  <div class="mobile-header mobile-header-4 d-block d-lg-none ">
      <div class="container-fluid">
          <div class="col-12">
              <div class="mobile-header-elements">
                  <div class="mobile-logo">
                      <a href="{{ route('frontend.home') }}"><img src="{{ asset($settings['site_main_logo']) }}" style="height: 60px"
                              alt=""></a>
                  </div>
                  <div class="mobile-nav-icon">
                      <i class="fa-solid fa-bars"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="mobile-sidebar d-block d-lg-none">
      <div class="menu-close-logo">
          <a href="{{ route('frontend.home') }}"><img src="{{ asset($settings['site_main_logo']) }}"
                  alt=""></a>
      </div>
      <div class="menu-close">
          <i class="fa-solid fa-xmark"></i>
      </div>
      <div class="mobile-nav">
          <li><a href="{{ route('frontend.home') }}">Home</a></li>
          <!-- <li class="dropdown-menu-parrent"><a href="#">Service</a>
              <ul>
                <li  class="dropdown-menu-parrent"><a href="service.html">Our Service</a>
                  <ul class="sub-menu-all">
                    <li><a href="service.html">Our Service 1</a></li>
                    <li><a href="service2.html">Our Service 2</a></li>
                  </ul>
                </li>
                <li  class="dropdown-menu-parrent"><a href="service.html">Service Details</a>
                  <ul class="sub-menu-all">
                    <li><a href="service-details-sidebar-left.html">Details Left</a></li>
                    <li><a href="service-details-sidebar-right.html">Details Right</a></li>
                    <li><a href="service-details.html">Single Service</a></li>
                  </ul>
                </li>

              </ul>
          </li> -->
          <li class="has-dropdown"><a href="#">About Us</a>
              <ul class="sub-menu">
                  <li><a href="{{ route('frontend.about') }}">About</a></li>
                  <li><a href="{{ route('frontend.team') }}">Our Team</a></li>
                  <li><a href="shop-details.html">Testimonial</a></li>
              </ul>
          </li>
          <li class="has-dropdown"><a href="#">Country</a>
              <ul class="sub-menu">
                  @foreach ($footer_countries as $country)
                      <li><a href="{{ route('frontend.abroadsingle', $country->slug) }}">{{ $country->title }}</a>
                      </li>
                  @endforeach
              </ul>
          </li>
          <li class="has-dropdown"><a href="#">Courses</a>
              <ul class="sub-menu">
                  @foreach ($footer_course as $course)
                      <li><a href="{{ route('frontend.coursesingle', $course->slug) }}">{{ $course->title }}</a></li>
                  @endforeach
              </ul>
          </li>
          <li><a href="{{ route('frontend.service') }}">Services</a></li>
          <li><a href="{{ route('frontend.blog') }}">Blog </a></li>
          {{-- <li><a href="{{ route('frontend.contact') }}">Contact Us </a></li> --}}
          <li><a class="mobile-menu-button" href="{{ route('frontend.contact') }}">Contact Us</a></li>
      </div>
      {{-- <div class="mobile-menu-social">
          <h3>Contact Info</h3>
          <div class="footer4-contact-info">
              <div class="mobile-menu-icon-box">
                  <div class="mobile-menu-icon">
                      <img src="{{ asset('frontend/assets/img/icons/mobile-menu-icon1.svg') }}" alt="">
                  </div>
                  <div class="mobile-menu-a">
                      <a href="tel:921-888-0022">921-888-0022</a>
                  </div>
              </div>
              <div class="mobile-menu-icon-box">
                  <div class="mobile-menu-icon">
                      <img src="{{ asset('frontend/assets/img/icons/mobile-menu-icon2.svg') }}" alt="">
                  </div>
                  <div class="mobile-menu-a">
                      <a href="mailto:example@visafast.com">example@visafast.com</a>
                  </div>
              </div>
              <div class="mobile-menu-social">
                  <h3>Our Location</h3>
                  <div class="mobile-menu-icon-box">
                      <div class="mobile-menu-icon">
                          <img src="{{ asset('frontend/assets/img/icons/mobile-menu-icon3.svg') }}" alt="">
                      </div>
                      <div class="mobile-menu-a">
                          <a href="mailto:info@example.com">55 East Birchwood Ave.Brooklyn, <br> New York
                              11201,United States</a>
                      </div>
                  </div>
              </div>
              <div class="mobile-menu-social">
                  <h3>Social Links</h3>
                  <div class="mobile-menu-social-icon">
                      <ul>
                          <li>
                              <a data-bs-toggle="tooltip" title="Linked in" href="#"><i
                                      class="fa-brands fa-facebook"></i></a>
                          </li>
                          <li>
                              <a data-bs-toggle="tooltip" title="Facebook" href="#"><i
                                      class="fa-brands fa-linkedin-in"></i></a>
                          </li>
                          <li>
                              <a data-bs-toggle="tooltip" title="Instagram" href="#"><i
                                      class="fa-brands fa-youtube"></i></a>
                          </li>
                          <li>
                              <a data-bs-toggle="tooltip" title="TikTok" href="#"><i
                                      class="fa-brands fa-twitter"></i></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div> --}}
  </div>
  <!--=====Mobile header end=======-->
  <!--=====HEADER END=======-->
