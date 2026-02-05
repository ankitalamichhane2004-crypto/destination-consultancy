@section('seo')
    @include('frontend.seo', [
        'name' => $abroadstudiesingle->seo_title ?? '',
        'title' => $abroadstudiesingle->seo_title ?? $abroadstudiesingle->title,
        'description' => $abroadstudiesingle->meta_description ?? '',
        'keyword' => $abroadstudiesingle->meta_keywords ?? '',
        'schema' => $abroadstudiesingle->seo_schema ?? '',
        'created_at' => $abroadstudiesingle->created_at,
        'updated_at' => $abroadstudiesingle->updated_at,
    ])
@endsection
@extends('layouts.frontend.master')
@section('content')
  <div class="page-hero-area _relative about-banner" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto text-center">
                <div class="page-hero-hadding">
                    <h1>{{ $abroadstudiesingle->title ?? 'Page Title' }}</h1>
                    <div class="space16"></div>
                    <div class="page-hero-p">
                        <a href="{{ route('frontend.home') }}">Home</a>
                        <span><i class="fa-solid fa-angle-right"></i></span> 
                        <a href="{{ route('frontend.abroad') }}">Country</a>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                        <p>{{ $abroadstudiesingle->title ?? 'Page Title' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!--=====pages hero end=======-->
  <!--=====service details start=======-->
  <div class="service-details-all sp3" style="background-color: #FFF8F6;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="sidebar-all-content">
                    <article>
                        <div class="img5 img100">
                            <img src="{{asset($abroadstudiesingle->image)}}" alt="" style="height: 440px; object-fit: cover">
                        </div>
                        <div class="space24"></div>
                        <div class="hadding2">
                            <h1>{{$abroadstudiesingle->title}}</h1>
                            <div class="space16"></div>
                            {!!$abroadstudiesingle->description!!}
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
        <div class="countries sp4" style="background-color: #FFF8F6;">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 m-auto text-center">
                <div class="hadding22">
                  <span>Countries</span>
                  <div class="space16"></div>
                  <h1>Checkout More Countries</h1>
                </div>
              </div>
            </div>
            <div class="row">
                @foreach($abroadstudies as $country)
                    <div class="col-lg-4 col-md-6">
                        <div class="countrie3-box">
                            <div class="countrie3-img img100 img5">
                                <img src="{{  asset($country->image)  }}" alt="{{ $country->name }}" class="country-img" style="height: 280px; object-fit:cover;">
                            </div>
                            <div class="countrie3-hadding">
                                <h2>
                                    <a href="{{route('frontend.abroadsingle',$country->slug)}}" class="weight-600">
                                        {{ $country->title }}
                                    </a>
                                </h2>
                                <div class="space16"></div>
                                <p>{{ Str::limit($country->short_description, 120) }}</p>
                                <div class="space16"></div>
                                <a href="{{route('frontend.abroadsingle',$country->slug)}}" class="w-learn-more">
                                    Read More <span><i class="fa-solid fa-arrow-right"></i></span>
                                </a>
                            </div>
                        </div>
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
            <p>Visa Consulting doesn't just handle the paperwork; they genuinely care about their clients' success. My consultant not only helped with the application visa consulting.</p>
          </div>
        </div>
        <div class="col-lg-5">
        </div>
      </div>
    </div>
  </div>
  <!--=====cta end=======-->
@endsection
