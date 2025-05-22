
@php
  $social = DB::table('sociallinks')->first();

@endphp

 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      {{-- <h1 class="logo mr-auto"><a href={{ route('main.home') }}><span>No</span>ngor</a></h1> --}}
      <h1 class="logo mr-auto"><a href={{ route('main.home') }} style="color: #f79844">Nongor Commercial Limited</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo mr-auto">
        {{-- <img src="backend/assets/img/NONGOR_LOGO.png" alt="" style="height: 400px; width: 150px" class="img-fluid"> --}}
      </a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href={{ route('main.home') }}>Home</a></li>

          {{-- <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="team.html">Team</a></li>
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li> --}}

          <li class="drop-down"><a href="">Services</a>
            <ul>
              <li><a href=" {{ route('agro.home') }} ">Agro</a></li>
              <li><a href="{{route('real-estate')}}">Real Eastate</a></li>
              <li><a href="testimonials.html">Shop</a></li>
              <li><a href="testimonials.html">Restaurant</a></li>
            </ul>
          </li>

          {{-- <li><a href="services.html">Services</a></li> --}}
          {{-- <li><a href="{{route('portfolio')}}">Portfolio</a></li> --}}
          {{-- <li><a href="pricing.html">Pricing</a></li> --}}
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          <li><a href="{{route('about_us')}}">About Us</a></li>

          <li><a href="{{route('contact')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="{{$social->tw}}" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="{{$social->fb}}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{$social->ins}}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{$social->ln}}" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header>
