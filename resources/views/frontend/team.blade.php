@section('seo')
    @include('frontend.seo', [
        'name' => $team_page->seo_title ?? '',
        'title' => $team_page->seo_title ?? $team_page->title,
        'description' => $team_page->meta_description ?? '',
        'keyword' => $team_page->meta_keywords ?? '',
        'schema' => $team_page->seo_schema ?? '',
        'created_at' => $team_page->created_at,
        'updated_at' => $team_page->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
 <div class="page-hero-area _relative about-banner" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto text-center">
                <div class="page-hero-hadding">
                    <h1>Our Team </h1>
                    <div class="space16"></div>
                    <div class="page-hero-p">
                        <a href="{{ route('frontend.home') }}">Home</a>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                        <p>Teams</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--=====team start=======-->
    @php
        $team1 = $teams->get(0);
        $team2 = $teams->get(1);
        $team3 = $teams->get(2);
        $team4 = $teams->get(3);
    @endphp
    <div class="team4 sp3"  style="background-color: #FFF8F6;">
        <div class="container">
            <div class="space60"></div>
            <div class="row">
                @if ($team1)
                    <div class="col-lg-3 col-md-6">
                        <div class="space30"></div>
                        <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="700">
                            <div class="team4-img-box">
                                <div class="team4-img img50 img100">
                                    <img src="{{ asset($team1->image) }}" alt="">
                                </div>
                                {{-- <ul class="team4-icons team4-icons9">
                                    <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="hadding9">
                                <h4><a href="#" class="font-f-3">{{ $team1->name }}</a></h4>
                                <div class="space8"></div>
                                <p class="font-f-3">{{ $team1->position }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team2)
                    <div class="col-lg-3 col-md-6">

                        <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="900">
                            <div class="team4-img-box">
                                <div class="team4-img img50 img100">
                                    <img src="{{ asset($team2->image) }}" alt="">
                                </div>
                                {{-- <ul class="team4-icons team4-icons9">
                                    <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="hadding9">
                                <h4><a href="#" class="font-f-3">{{ $team2->name }}</a></h4>
                                <div class="space8"></div>
                                <p class="font-f-3">{{ $team2->position }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team3)
                    <div class="col-lg-3 col-md-6">
                        <div class="space30"></div>
                        <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="700">
                            <div class="team4-img-box">
                                <div class="team4-img img50 img100">
                                    <img src="{{ asset($team3->image) }}" alt="">
                                </div>
                                {{-- <ul class="team4-icons team4-icons9">
                                    <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="hadding9">
                                <h4><a href="#" class="font-f-3">{{ $team3->name }}</a></h4>
                                <div class="space8"></div>
                                <p class="font-f-3">{{ $team3->position }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($team4)
                    <div class="col-lg-3 col-md-6">
                        <div class="team4-box text-center" data-aos="fade-up" data-aos-duration="900">
                            <div class="team4-img-box">
                                <div class="team4-img img50 img100">
                                    <img src="{{ asset($team4->image) }}" alt="">
                                </div>
                                {{-- <ul class="team4-icons team4-icons9">
                                    <li class="team4-icon1"><a href="#"><i class="fa-brands fa-youtube"></i></a>
                                    </li>
                                    <li class="team4-icon2"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    </li>
                                    <li class="team4-icon3"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    </li>
                                    <li class="team4-icon4"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    </li>
                                </ul> --}}
                            </div>
                            <div class="hadding9">
                                <h4><a href="#" class="font-f-3">{{ $team4->name }}</a></h4>
                                <div class="space8"></div>
                                <p class="font-f-3">{{ $team4->position }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!--=====team end=======-->

@endsection
