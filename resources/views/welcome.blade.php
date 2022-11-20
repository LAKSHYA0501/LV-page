@extends('master')
@section("content")
<div class="main py-5 text text-black">
  <div class="container py-5">
    <div class="contain row py-5">
      <div class="description">
        <h1 class="display-4 mb-4 text-left ">BANDS <span class="auto-type"></span></h1>
        <p class="lead mb-5">Rings are one of the most widely celebrated types of jewelry all over the world. Furthermore, the significance of rings at a wedding makes it essential, just like the cherry on top of the cake.</p> 
        <a href="{{ route('bands') }}" class="btn btn-lg btn-outline-dark mx-1">Buy Now</a>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
          var typed = new Typed(".auto-type",{
            strings : ["FOR LIFE...","OF LOVE"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
          })
        </script>
      <img src="/images/blring.jpeg">        
    </div>
  </div>
</div>  
@endsection
