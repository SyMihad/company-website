@extends('layouts.master_home')

@section('home_content')

{{-- @include('layouts.body.slider') --}}

    <div id="preloader">
        <div class="preloader-content">
            <img src="{{ asset('public/frontend/assets/img/NONGOR-LOGO-ENG.png') }}"  alt="Loading..." />
        </div>
    </div>

    <style>
    #preloader {
        position: fixed;
        left: 0;
        top: 0;
        z-index: 9999;
        width: 100%;
        height: 100%;
        background-color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }

        .preloader-content img {
        width: 700px;  /* or any size you want */
        height: auto;
        }

    </style>

<br><br>
<!-- ======= About Us Section ======= -->
<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2></strong></h2>
      </div>

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
          {{-- <img src="{{ asset('public/frontend/assets/img/NONGOR-LOGO-ENG.png') }}" alt="Nongor Logo" style="width: 100%; height: auto;"> --}}
          {{-- <h2>{{$abouts->title}}</h2> --}}
          {{-- <h3>{{$abouts->short_dis}}</h3> --}}
        <h2>{{$abouts->title}}</h2>
          {{-- <h3>{{$abouts->short_dis}}</h3> --}}
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          {{-- <p>
            {!! $abouts->long_dis !!}
          </p> --}}
          {{-- <img src=" {{asset('public/only_logo.png')}} " alt=""> --}}
          {{-- <ul>
          <li><i class="ri-check-double-line"></i> {{$abouts->l1}}</li>
            <li><i class="ri-check-double-line"></i> {{$abouts->l2}}</li>
            <li><i class="ri-check-double-line"></i>{{$abouts->l3}} </li>
          </ul> --}}
          {{-- <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p> --}}
        </div>
      </div>

      <div class="row">
        <div class="col-lg-12 text-center">
          <p class="mt-4">
          <img src=" {{asset('public/only_logo.png')}} " alt="">
          </p>
        </div>

      </div>

    </div>
  </section><!-- End About Us Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Services</strong></h2>
      <p>{{$service->mtitle}}</p>
      </div>

      <div class="row">
        <div class="col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-blue fixed-service-box">
            <div class="icon">
              {{-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg> --}}
              {{-- <i class="bx bxl-dribbble"></i> --}}
              <img src="{{ asset('public/frontend/assets/svg/farm.svg') }}" alt="Icon" />


            </div>
            <h4><a href=" {{ route('agro.home') }} ">{{$service->ctitle1}}</a></h4>
            <p>{{$service->cdsc1}}</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-orange fixed-service-box">
            <div class="icon">
              {{-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-file"></i> --}}
              <img src="{{ asset('public/frontend/assets/svg/real_estate.svg') }}" alt="Icon" style="width: 100px; height: auto;"/>

            </div>
            <h4><a href=" {{ route('real-estate') }} ">{{$service->ctitle2}}</a></h4>
            <p>{{$service->cdsc2}}</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-pink fixed-service-box">
            <div class="icon">
              {{-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg> --}}
              {{-- <img src="{{ asset('assets/svg/farm.svg') }}" alt="Icon" /> --}}
              <img src="{{ asset('public/frontend/assets/svg/shop.svg') }}" alt="Icon" style="width: 100px; height: auto;" />


              {{-- <i class="bx bx-tachometer"></i> --}}
            </div>
            <h4><a href=" {{ route('coming-soon-clothing') }} ">{{$service->ctitle3}}</a></h4>
            <p>{{$service->cdsc3}}</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-box iconbox-yellow fixed-service-box">
            <div class="icon">
              {{-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-layer"></i> --}}
              <img  src="{{ asset('public/frontend/assets/svg/restaurant.svg') }}" alt="Icon" style="width: 100px; height: auto;" />

            </div>
            <h4><a href=" {{ route('coming-soon-restaurant') }} ">{{$service->ctitle4}}</a></h4>
            <p>{{$service->cdsc4}}</p>
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon-box iconbox-red">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-slideshow"></i>
            </div>
            <h4><a href="">{{$service->ctitle5}}</a></h4>
            <p>{{$service->cdsc5}}</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon-box iconbox-teal">
            <div class="icon">
              <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              </svg>
              <i class="bx bx-arch"></i>
            </div>
            <h4><a href="">{{$service->ctitle6}}</a></h4>
            <p>{{$service->cdsc6}}</p>
          </div>
        </div> --}}

      </div>

    </div>
  </section><!-- End Services Section -->


  @endsection

@push('scripts')
<script>
    window.addEventListener('load', function () {
        setTimeout(() => {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.style.display = 'none';
            }
        }, 800); // 1 second delay
    });
</script>
@endpush

