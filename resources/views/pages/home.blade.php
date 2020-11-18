@extends('layouts.master')

@section('content')
<div id="carouselExampleControls" class="carousel slide mt-2" data-ride="carousel">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="{{ asset('assets/img/img1.jpg') }}" alt="First slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="{{ asset('assets/img/img2.jpg') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
         <img class="d-block w-100" src="{{ asset('assets/img/img3.jpg') }}" alt="Third slide">
      </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>
</div>
@endsection