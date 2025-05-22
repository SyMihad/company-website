@extends('layouts.master_home')
@section('home_content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Agro Sector</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li><a href="{{route('agro.home')}}">Agro</a></li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->


<br>
{{-- <div class="bg-white py-8">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-gray-800 text-base leading-relaxed text-justify">{!! $agro->description !!}</p>
    </div>
</div> --}}

{{-- <div class="bg-white py-8 shadow-md rounded-lg">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-gray-800 text-base leading-relaxed text-justify">{!! $agro->description !!}</p>
    </div>
</div> --}}

<div class="bg-white py-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="p-4 bg-light rounded shadow-sm">
                    {!! $agro->description !!}
                </div>
            </div>
        </div>
    </div>
</div>



<br>

@endsection
