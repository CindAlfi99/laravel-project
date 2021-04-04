@extends('layout.customer.base')
@section('content')
  <div class="container pt-2">
    <p class="h5">Halo, {{ Auth::user()->name }}!</p>
    <p>ini adalah halaman</p>
    <p class="h2">Home</p>
  </div>
@endsection