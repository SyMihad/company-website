@extends('layouts.master_home')
@section('home_content')

{{-- <section id="breadcrumbs" class="breadcrumbs">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <h2>About Us</h2>
      <ol>
        <li><a href="{{ route('main.home') }}">Home</a></li>
        <li><a href="{{ route('about_us') }}">About Us</a></li>
      </ol>
    </div>
  </div>
</section> --}}



@include('layouts.body.slider')


{{-- <div class="bg-white py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Learn More About Us</h2>
    <div class="row justify-content-center">
      <div class="col-12 col-md-3 mb-3">
        <a href="{{ route('company.about') }}" class="btn btn-primary w-100">
          Company About
        </a>
      </div>
      <div class="col-12 col-md-3 mb-3">
        <a href="{{ route('board.directors') }}" class="btn btn-success w-100">
          Board of Directors
        </a>
      </div>
    </div>
  </div>
</div> --}}


@endsection
