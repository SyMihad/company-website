@extends('layouts.master_home')
@section('home_content')

<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About Us</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li><a href="{{route('real-estate')}}">Real Estate</a></li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->


<section class="py-5">
    <div class="container">
        <h2 class="mb-4">Our Buildings</h2>
        <div class="row">
            @foreach($buildings as $building)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('uploads/buildings/' . $building->thumbnail) }}"
                             class="card-img-top" alt="{{ $building->name }}"
                             style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $building->name }}</h5>
                            <p class="card-text">{{ $building->address }}</p>
                            <a href="{{ route('real.estate.show', $building->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
