{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.app')

@section('content')

<div class="container-fluid content-wrapper">
  <div class="row imgSlider">
    <div id="img-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button
          type="button"
          data-bs-target="#img-carousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
        ></button>
        <button
          type="button"
          data-bs-target="#img-carousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
        ></button>
        <button
          type="button"
          data-bs-target="#img-carousel"
          data-bs-slide-to="1"
          aria-label="Slide 3"
        ></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="photos/larm-rmah-AEaTUnvneik-unsplash.jpg"
            class="d-block w-100 img-fluid"
            alt=""
          />
        </div>
        <div class="carousel-item">
          <img
            src="photos/leo-rivas-wtxcaDIdOCM-unsplash.jpg"
            class="d-block w-100 img-fluid"
            alt=""
          />
        </div>
        <div class="carousel-item">
          <img
            src="photos/marisa-howenstine-Cq9slNxV8YU-unsplash.jpg"
            class="d-block w-100 img-fluid"
            alt=""
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#img-carousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#img-carousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="row text-center" id="about-us">
    <div class="about-content w-50">
      <h1>Tentang Kami</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, at,
        nulla exercitationem vitae nisi asperiores voluptatibus, recusandae
        necessitatibus porro assumenda doloremque. Repellat earum eius
        quaerat! Tenetur voluptates sequi ipsam similique? Lorem ipsum dolor
        sit, amet consectetur adipisicing elit. Sit nobis perferendis, in,
        fugit delectus temporibus culpa, veritatis eum beatae deleniti aut
        at a vel eius placeat officiis soluta amet debitis.
      </p>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores
        neque delectus obcaecati deserunt, iure assumenda dicta non odit
        architecto praesentium rem? Labore perferendis sequi suscipit fuga
        cumque. Porro, soluta dolor!
      </p>
    </div>
  </div>
  <div class="row text-center" id="facility">
    <div class="facility-content w-50">
      <h1>Fasilitas</h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis
        consequatur distinctio non illo quibusdam suscipit illum quae
        laboriosam, expedita, obcaecati perspiciatis laudantium fuga, magni
        tempora. Ab commodi nesciunt molestiae aliquid.
      </p>
    </div>
  </div>
</div>
@endsection
    