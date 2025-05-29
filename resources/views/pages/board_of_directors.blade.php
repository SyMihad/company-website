@extends('layouts.master_home')
@section('home_content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About Us</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="{{route('board.directors')}}">Board of Directors</a></li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->

<br>


<div class="bg-white py-10">
    <div class="container">
        @php
            $chairman = $members->where('designation', 'Chairman')->first();
            $md = $members->where('designation', 'Managing Director')->first();
            $directors = $members->where('designation', 'Director')->sortBy('priority');
            // dd($chairman, $md, $directors);
        @endphp

        @if($chairman)

            <div class="text-center mb-4">
                <img
                    src="{{ asset('public/image/team/' . $chairman->photo) }}"
                    class="rounded-circle img-thumbnail"
                    style="width: 150px; height: 150px; object-fit: cover;"
                    alt="{{ $chairman->name }}"
                >
                <h3 class="mt-2">{{ $chairman->name }}</h3>
                <p class="text-muted">{{ $chairman->designation }}</p>
            </div>

        @endif

        <div class="row">
            @foreach($directors as $director)
                <div class="col-sm-6 col-md-4 col-lg-3 text-center mb-4">
                    <img
                        src="{{ asset('public/image/team/' . $director->photo) }}"
                        class="rounded-circle img-thumbnail"
                        style="width: 110px; height: 110px; object-fit: cover;"
                        alt="{{ $director->name }}"
                    >
                    <h5 class="mt-2">{{ $director->name }}</h5>
                    <p class="text-muted">{{ $director->designation }}</p>
                </div>
            @endforeach
        </div>

        @if($md)

            <div class="text-center mb-4">
                <img
                    src="{{ asset('public/image/team/' . $md->photo) }}"
                    class="rounded-circle img-thumbnail"
                    style="width: 130px; height: 130px; object-fit: cover;"
                    alt="{{ $md->name }}"
                >
                <h4 class="mt-2">{{ $md->name }}</h4>
                <p class="text-muted">{{ $md->designation }}</p>
            </div>

        @endif



    </div>
</div>




@endsection
