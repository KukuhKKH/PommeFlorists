@extends('layouts.master')

@section('content')
<div class="d-block text-center">
   <h1>Hand Bouquet</h1>
   <div class="row">
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/buket1.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Red.</p>
              <button class="btn btn-primary">Rp. {{ number_format(75000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/buket2.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">White.</p>
              <button class="btn btn-primary">Rp. {{ number_format(50000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/buket3.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Yellow.</p>
              <button class="btn btn-primary">Rp. {{ number_format(80000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/buket4.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Cream.</p>
              <button class="btn btn-primary">Rp. {{ number_format(76000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/buket5.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Pinky boy.</p>
              <button class="btn btn-primary">Rp. {{ number_format(1000000) }}</button>
            </div>
          </div>
      </div>
   </div>
</div>
@endsection