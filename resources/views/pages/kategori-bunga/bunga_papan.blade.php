@extends('layouts.master')

@section('content')
<div class="d-block text-center">
   <h1>Bunga Papan</h1>
   <div class="row">
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/papan1.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Papan 1</p>
              <button class="btn btn-primary">Rp. {{ number_format(1200000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/papan2.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Papan 2</p>
              <button class="btn btn-primary">Rp. {{ number_format(1300000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/papan3.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Papan 3</p>
              <button class="btn btn-primary">Rp. {{ number_format(2000000) }}</button>
            </div>
          </div>
      </div>
   </div>
</div>
@endsection