@extends('layouts.master_home')
@section('home_content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About Us</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="{{route('evaluation.home')}}">Evaluation</a></li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->
{{--
<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto px-4">
    <h2 class="text-3xl font-bold mb-4 text-center">{{ $abouts->title }}</h2>
    <p class="text-gray-700 text-lg leading-relaxed">{!! $abouts->long_dis !!}</p>
  </div>
</section> --}}

<div class="bg-white py-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="p-4  rounded shadow-sm">
                    {!! $evaluation->description !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
