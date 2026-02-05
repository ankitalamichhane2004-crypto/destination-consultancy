<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('seo')
    {{-- <title>Business advisar Creative HTML5 Template </title> --}}
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    {{--
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('frontend/assets/images/fav-icon/icon.png') }}"> --}}
    <link rel="icon" type="image/x-icon"
        href="{{ $settings['site_fav_icon'] ? asset($settings['site_fav_icon']) : 'Bright Mind Education Hub' }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
        integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome-pro.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/preloader.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/mobile-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fonts.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/blog-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/modal-video.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/comon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animation.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/visafast-unit.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/visafast-core.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />

    <!--=====JQUERY=======-->
    <script src="{{asset('frontend/assets/js/jquery-3-6-0.min.js')}}"></script>

    @stack('css')
</head>

<body>
    @if (session('success'))
        <div aria-live="polite" aria-atomic="true" class="position-fixed top-0 end-0 p-3"
            style="z-index: 1055; right: 0; top: 1rem;">
            <div class="toast align-items-center text-white bg-success border-0 fade" role="alert">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif
    <!-- loader -->
    {{-- <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div> --}}

    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')


    <!--=====JS=======-->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/fontawesome.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/../../cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js') }}">
    </script>
    <script src="{{ asset('frontend/../../cdn.jsdelivr.net/npm/%40popperjs/core%402.11.6/dist/umd/popper.min.js') }}"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="{{ asset('frontend/assets/js/slick-slider.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mobile-menu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.countup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.lineProgressbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mobile-meanmenu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- <script src="assets/js/modal-video.min.js"></script> -->
    <!-- <script src="assets/js/jquery.fittext.js"></script>
        <script src="assets/js/jquery.lettering.js"></script>
        <script src="assets/js/jquery.textillate.js"></script> -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    @push('styles')
        <!-- Bootstrap CSS (only if not included already in your layout) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @endpush
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toastEl = document.querySelector('.toast');
            if (toastEl) {
                const bsToast = new bootstrap.Toast(toastEl, {
                    delay: 2000 // 3 seconds
                });
                bsToast.show();
            }
        });
    </script>
    <script>
        var swiper = new Swiper('.swiper-universities', {
            slidesPerView: 1, // Default for small screens
            spaceBetween: 10, // Default for small screens
            loop: true,
            autoplay: {
                delay: 2100,
            },
            // Responsive breakpoints
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
            },
            // pagination: {
            //     el: '.swiper-pagination',
            //     clickable: true,
            // }
        });
    </script>
    {{-- for swiper --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        AOS.init({
            duration: 1000,  // animation duration
            once: true       // animate only once (optional)
        });
    </script>
</body>


</html>