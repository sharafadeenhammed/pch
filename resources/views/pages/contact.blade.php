@extends('layouts.layout')
@section('content')
 

  <section class=" bg-dark text-light  p-5">
    <div class="my-5">

      <div class="text-center d-flex flex-direction-coloumn align-items-center p-5 my-5 container">
        <div  class="">
          <h1 class="my-3">Be The Next Winner  <span class="text-warning">Act Now</span> </h1>
          <p class="lead h4">Welcome to Publishers Clearing House
           Where America Plays To Win.
          Publishers Clearing House has been awarding prizes since 1967. Act now and you could be next</p>
  
        </div>
      </div>

    </div>
  </section>
  <section class="container py-5 bg-white">
    <p class="h2 text-start text-secondary my-3">Welcome to Publishers Clearance House </p>  
    <p class="lead">
      We value your feedback, inquiries, and suggestions. Please feel free to get in touch with us using the information below, we are always happy to assist you.
    </p>
  </section>
  
  <div class="my-5">
    @include('partials._contact')
  </div>   

  <form method="POST" action="/contact" class="container ">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input id="name" value="{{old("name")}}" name="name" type="text" class="form-control">
      <div id="emailHelp" class="form-text">
        We will never share your information with any third party.
      </div>
      @error('name')
        <p class="text-danger fw-bold">  
          {{$message}}
        </p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input value="{{old("email")}}" id="email" name="email" type="text" class="form-control">
      @error('email')
        <p class="text-danger fw-bold">  
          {{$message}}
        </p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label"> Phone Number </label>
      <input id="phone" value="{{old("phone")}}" name="phone" type="phone" class="form-control" >
      @error('phone')
        <p class="text-danger fw-bold">  
          {{$message}}
        </p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea id="message" name="message" style="min-height: 200px" type="text" class="form-control">{{old("message")}}</textarea>
      @error('message')
        <p class="text-danger fw-bold">  
          {{$message}}
        </p>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Send 
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
        <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
      </svg> 
    </button>

  </form>

  @include('partials._faq')
  @endsection