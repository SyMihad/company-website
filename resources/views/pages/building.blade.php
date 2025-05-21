@extends('layouts.master_home')
@section('home_content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Real Estate</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li><a href="{{route('real-estate')}}">Real Estate</a></li>
          <li><a href="{{route('real.estate.show', $building->id)}}">{{ $building->name }}</a></li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->

<section class="py-5">
    <div class="container">
        <h2 class="mb-4">{{ $building->name }}</h2>
        <p><strong>Address:</strong> {{ $building->address }}</p>

        <iframe src="{{ asset('uploads/buildings/' . $building->pdf_file) }}"
                width="100%" height="800px"
                style="border: none;"></iframe>

        <a href="{{ route('real-estate') }}" class="btn btn-secondary mt-3">← Back to List</a>
    </div>
</section>

@endsection
