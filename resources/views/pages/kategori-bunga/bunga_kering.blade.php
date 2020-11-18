@extends('layouts.master')

@section('content')
<div class="d-block text-center">
   <h1>Bunga Kering</h1>
   <div class="row">
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/kering1.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Kering 1</p>
              <button class="btn btn-primary">Rp. {{ number_format(120000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/kering2.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Kering 2</p>
              <button class="btn btn-primary">Rp. {{ number_format(130000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/kering3.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Kering 3</p>
              <button class="btn btn-primary">Rp. {{ number_format(200000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/kering4.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Kering 4</p>
              <button class="btn btn-primary">Rp. {{ number_format(200000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/kering5.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Kering 5</p>
              <button class="btn btn-primary">Rp. {{ number_format(200000) }}</button>
            </div>
          </div>
      </div>
   </div>
</div>
@endsection