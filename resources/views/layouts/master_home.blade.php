<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nongor Group</title>

  <meta name="description" content="Nongor Commercial Limited is a dynamic, multi-sector enterprise committed to excellence, innovation, and sustainable growth. With a strong presence across poultry, real estate, construction, and clothing, we are driven by a shared mission: to create value for our customers, communities, and stakeholders through high-quality products and services">
    <meta name="keywords" content="Nongor Group, Nongor Kitchen, agro, Nongor Agro, clothing, restaurant, Ramgonj, Lakshmipur">

  <!-- Favicons -->
    <link href="{{ asset('public/frontend/assets/img/android-chrome-512x512.png') }}" rel="icon">
    <link href="{{ asset('public/frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  {{-- <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon"> --}}
  <!-- inside <head> -->
  {{-- <link rel="icon" href="{!! asset('frontend/assets/img/favicon.ico') !!}"> --}}
{{-- <link rel="shortcut icon" href="{{ asset('frontend/assets/img/favicon.png') }}"> --}}

    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('frontend/assets/img/site.webmanifest') }}"> --}}

{{-- <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}"> --}}





  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('public/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('public/frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{asset('public/frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- Cropper CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet" />
  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}


    <style>
        html, body {
            height: 100%;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>


</head>

<body>


 <!-- ======= Header ======= -->
  @include('layouts.body.header')
 <!-- End Header -->

  <!-- ======= Hero Section ======= -->

 <!-- End Hero -->

  <main id="main">

    @yield('home_content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.body.footer')
  <!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="{{asset('public/frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('public/frontend/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('public/frontend/assets/js/main.js')}}"></script>

  <!-- jQuery (required for Summernote) -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Summernote JS -->
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>

  <!-- Cropper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}



@stack('scripts')
</body>

</html>
