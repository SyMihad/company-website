@extends('layouts.master_home')
@section('home_content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>About Us</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li>About Us</li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->

 <!-- About Us Blade -->
<div class="bg-white py-10">
    <div class="max-w-6xl mx-auto">
        @php
            $chairman = $members->where('priority', 1)->first();
            $md = $members->where('priority', 2)->first();
            $directors = $members->where('priority', '>=', 3)->sortBy('priority');
        @endphp

        {{-- Chairman --}}
        @if($chairman)
            {{-- <div class="text-center mb-8">
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
                <h3 class="text-xl font-semibold mt-2">{{ $chairman->name }}</h3>
                <p class="text-gray-500">{{ $chairman->designation }}</p>
            </div> --}}
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

        {{-- Managing Director --}}
        @if($md)
            {{-- <div class="text-center mb-12">
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

                <h3 class="text-lg font-semibold mt-2">{{ $md->name }}</h3>
                <p class="text-gray-500">{{ $md->designation }}</p>
            </div> --}}
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

        {{-- Other Directors
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
            @foreach($directors as $director)
                <div class="text-center">
                    <img class="w-24 h-24 object-cover rounded-full mx-auto border border-gray-300 shadow-sm"
                    src="{{ asset('image/team/' . $director->photo) }}"
                    alt="{{ $director->name }}">
                    <h4 class="text-base font-semibold mt-2">{{ $director->name }}</h4>
                    <p class="text-gray-500">{{ $director->designation }}</p>
                </div>
            @endforeach
        </div> --}}





    </div>
</div>



@endsection
