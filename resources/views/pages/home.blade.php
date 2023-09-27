

@extends('layouts.layout')
@section('content')
  <section class=" bg-dark text-light position-relative  p-5">
    @if (session("message"))
      <p id="flash-message" class="z-3 top-0 start-0 w-100 postion-absolute z-3 top-0  start-0 w-100 rounded my-5 lead text-center py-1 d-flex align-items-center justify-content-center bg-success text-white">
        {{session("message")}}
      </p>
    @endif

    <div class="my-5">

      <div class=" text-sm-start text-center my-5 container d-sm-flex  align-items-center ">
        <div  class="">
          <h1 class="mb-4">Be the <span class="text-warning">next winner</span> </h1>
          <p class="lead h4">Welcome to Publishers Clearing House</p>
          <p class="lead h4">Where America Plays To Win.</p>
          <p class="lead h4">Publishers Clearing House has been awarding prizes since 1967. <br/> Act now and you could be next</p>
  
        </div>
        <img class="d-none d-md-block w-50 showcaseImg " src="./showcase.jpg" alt="">
      </div>

    </div>
  </section>
  
<section class="bg-white text-dark p-5" >

  <p class="h2 px-3 text-secondary" >Recent Winner's</p>
  <div class="container text-center ">
    <div class="row">

      {{-- first item --}}
      <div class="col-md my-5">
        <div class="card bg-dark text-white">
          <div class="card-body">
            <img class="card-img-top w-50 img-fluid" src="/winner1.jpeg" alt="">
          </div>
          <p class="card-title">
            Elaine Jhonson <span  class="py-1 px-3 fs-6 bg-warning lead rounded text-secondary">$15,000</span>
          <p>
    
        </div>
      </div>
  
      {{-- second item --}}
      <div class="col-md my-5">
        <div class="card bg-dark text-white">
          <div class="card-body">
            <img class="card-img-top w-50 img-fluid" src="/winner2.jpeg" alt="">
          </div>
          <p class="card-title">
            Clinton Powell <span  class="py-1 fs-6 px-3 bg-warning lead rounded text-secondary">$25,000</span>
          <p>
    
        </div>
      </div>

      {{-- third item --}}
      <div class="col-md my-5">
        <div class="card bg-dark text-white">
          <div class="card-body">
            <img class="card-img-top w-50 img-fluid" src="/winner3.jpg" alt="">
          </div>
          <p class="card-title">
            Thomas O. Moore .Sr <span  class="py-1 px-3 fs-6 bg-warning lead rounded text-secondary">$1,000,000</span>
          <p>
    
        </div>
      </div>

    </div>
  </div>
</section>

<div class="my-5">
  @include('partials._contact')
</div>
@include('partials._faq')
  
<script>
  const flashMessge = document.getElementById("flash-message");
  setTimeout(() => {
    flashMessge.classList.add("d-none");
  }, 10000);
</script>

@endsection