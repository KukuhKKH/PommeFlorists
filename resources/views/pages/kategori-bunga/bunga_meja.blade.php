@extends('layouts.master')

@section('content')
<div class="d-block text-center">
   <h1>Bunga Meja</h1>
   <div class="row">
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/meja1.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Meja 1</p>
              <button class="btn btn-primary">Rp. {{ number_format(120000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/meja2.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Meja 2</p>
              <button class="btn btn-primary">Rp. {{ number_format(130000) }}</button>
            </div>
          </div>
      </div>
      <div class="col-4 mt-2">
         <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('assets/img/kembang/meja3.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Bunga Meja 3</p>
              <button class="btn btn-primary">Rp. {{ number_format(200000) }}</button>
            </div>
          </div>
      </div>
   </div>
</div>
@endsection