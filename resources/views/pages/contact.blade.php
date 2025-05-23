@extends('layouts.master_home')
@section('home_content')


<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="{{route('main.home')}}">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
</section><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <div class="map-section">
    {{-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> --}}
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d521.7092804383163!2d90.43826529379389!3d23.82095339247476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1747734491947!5m2!1sen!2sbd" frameborder="0" allowfullscreen></iframe>
    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.7259966290703!2d90.38735617608137!3d23.863861684409635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5c72fdd5261%3A0xb2643677a08f1ace!2sSoftware%20Bazar%20Bangladesh!5e0!3m2!1sen!2sbd!4v1746691652668!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
  </div>

  <section id="contact" class="contact">
    <div class="container">

      <div class="row justify-content-center" data-aos="fade-up">

        <div class="col-lg-10">

          <div class="info-wrap">
            <div class="row">
              <div class="col-lg-4 info">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
              <p>{{$contacts->address}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>{{$contacts->email}}</p>
              </div>

              <div class="col-lg-4 info mt-4 mt-lg-0">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>{{$contacts->phone}}</p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="row mt-5 justify-content-center" data-aos="fade-up">
        <div class="col-lg-10">
          @if(Session::has('message'))
          <div class="alert alert-success">
              {{Session::get('message')}}
          </div>
          @endif
        <form action="{{route('contact.form')}}" method="post">
          @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name"   />

              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" placeholder="Your Email"   />

              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject"  placeholder="Subject"  />

            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>

            </div>

            <button class="btn btn-success" type="submit">Send Message</button>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

@endsection
