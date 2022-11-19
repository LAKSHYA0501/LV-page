@extends('master')
@section("content")
<div class="main py-5 text text-white">
  <div class="container py-5">
    <div class="contain row py-5">
      <div class="description mx-auto col-lg-10">
        <h1 class="display-4 mb-4 text-left ">BANDS OF LIFE </h1>
        <p class="lead mb-5">Rings are one of the most widely celebrated types of jewelry all over the world. Furthermore, the significance of rings at a wedding makes it essential, just like the cherry on top of the cake.</p> 
        <a href="{{ route('bands') }}" class="btn btn-lg btn-outline-light mx-1">Take me there</a>
      </div>
      <img src="/images/blring.jpeg">        
    </div>
  </div>
</div>  
@endsection
