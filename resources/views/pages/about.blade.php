@extends('layouts.master_home')
@section('home_content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About Us</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li><a href="{{route('about_us')}}">About Us</a></li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->

 <!-- About Us Blade -->
{{-- <div class="bg-white py-10">
    <div class="max-w-6xl mx-auto">
        @php
            $chairman = $members->where('priority', 1)->first();
            $md = $members->where('priority', 2)->first();
            $directors = $members->where('priority', '>=', 3)->sortBy('priority');
        @endphp

        @if($chairman)

            <div class="text-center mb-4">
                <img
                    src="{{ asset('image/team/' . $chairman->photo) }}"
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
                        src="{{ asset('image/team/' . $director->photo) }}"
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
                    src="{{ asset('image/team/' . $md->photo) }}"
                    class="rounded-circle img-thumbnail"
                    style="width: 130px; height: 130px; object-fit: cover;"
                    alt="{{ $md->name }}"
                >
                <h4 class="mt-2">{{ $md->name }}</h4>
                <p class="text-muted">{{ $md->designation }}</p>
            </div>

        @endif
    </div>
</div> --}}
<br>
<div class="bg-white py-12">
    <div class="max-w-4xl mx-auto px-4 ">
        <h2 class="text-3xl font-bold mb-4 text-center">{{ $abouts->title }}</h2>
        {{-- <p class="text-gray-700 text-lg leading-relaxed"> {{ $abouts->long_dis }} </p> --}}
<p class="text-gray-700 text-lg leading-relaxed">{!! $abouts->long_dis !!}</p>

    </div>
</div>

<br><br>

<div class="bg-white py-10">
    <div class="container">
        @php
            $chairman = $members->where('priority', 1)->first();
            $md = $members->where('priority', 2)->first();
            $directors = $members->where('priority', '>=', 3)->sortBy('priority');
        @endphp

        {{-- Chairman --}}
        @if($chairman)
            <div class="d-flex flex-column align-items-center text-center mb-5">
                <img
                    src="{{ asset('image/team/' . $chairman->photo) }}"
                    class="img-thumbnail mb-3"
                    style="width: 160px; height: 200px; object-fit: cover;"
                    alt="{{ $chairman->name }}"
                >
                <h3 class="mb-1">{{ $chairman->name }}</h3>
                <p class="text-muted">{{ $chairman->designation }}</p>
            </div>
        @endif

        {{-- Directors --}}
        <div class="row justify-content-center">
            @foreach($directors as $director)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 d-flex flex-column align-items-center mb-4">
                    <img
                        src="{{ asset('image/team/' . $director->photo) }}"
                        class="img-thumbnail mb-2"
                        style="width: 140px; height: 180px; object-fit: cover;"
                        alt="{{ $director->name }}"
                    >
                    <h5 class="mb-1 text-center">{{ $director->name }}</h5>
                    <p class="text-muted text-center">{{ $director->designation }}</p>
                </div>
            @endforeach
        </div>

        {{-- Managing Director --}}
        @if($md)
            <div class="d-flex flex-column align-items-center text-center mt-5">
                <img
                    src="{{ asset('image/team/' . $md->photo) }}"
                    class="img-thumbnail mb-3"
                    style="width: 150px; height: 190px; object-fit: cover;"
                    alt="{{ $md->name }}"
                >
                <h4 class="mb-1">{{ $md->name }}</h4>
                <p class="text-muted">{{ $md->designation }}</p>
            </div>
        @endif
    </div>
</div>




@endsection
