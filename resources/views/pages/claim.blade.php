@extends('layouts.layout')
@section('content')
 

  <section class=" bg-dark text-light  p-5">
    <div class="my-5">

      <div class="text-center d-flex flex-direction-coloumn align-items-center p-5 my-5 container">
        <div  class="">
          <h1 class="my-3">Congratulations on  <span class="text-warning">winning &#127881;</span> </h1>
          <p class="lead h4">We're thrilled to have you as a winner. To ensure a smooth and hassle-free prize claiming process, please follow the steps outlined below.</p>
  
        </div>
      </div>

    </div>
  </section>
  <section class="container py-5 bg-white">
    <p class="h2 text-start text-secondary my-3">Step 1: Verify Your Identity</p>  
    <p class="lead">
      Before we can release your prize, we need to confirm your identity to protect your winnings and maintain the integrity of our promotions. Please provide the following information in the form below: <br/>
      Once we receive your information and verify your eligibility, our team will contact you to confirm your prize details, including the prize type, value, and any additional instructions. <br/>
      Please be aware that some prizes may be subject to taxes or other legal obligations. We recommend consulting with a tax professional for guidance on any tax implications associated with your prize.
    </p>
  </section>

  <div class="container">
    <p class="h2 text-start text-secondary my-1">Winner Verification Form</p>  
  </div>

  <form method="POST" action="/claim" class="container my-3 ">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Full Name</label>
      <input name="name" value="{{old("name")}}" type="text" class="form-control" id="name">
      @error('name')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Full Home Address</label>
      <input name="address" value="{{old("address")}}" type="address" class="form-control" id="address">
      @error('address')
        <p class="text-danger">{{$message}}</p>
      @enderror
    </div>

    {{-- state and zipcode --}}
    <div class="mb-3 row">
      <div class=" col-6">
        <label for="state" class="form-label">State</label>
        <input name="state" value="{{old("state")}}" type="text" class="form-control" id="state">
        @error('state')
        <p class="text-danger">{{$message}}</p>
      @enderror
      </div>

      <div class="col-6">
        <label for="zipcode" class="form-label">Zipcode</label>
        <input name="zipcode" value="{{old("zipcode")}}" type="number" class="form-control" id="zipcode">
        @error('zipcode')
        <p class="text-danger">{{$message}}</p>
      @enderror
      </div>
    </div>

    {{-- occupation monthly income --}}
    <div class="mb-3 row">
      <div class=" col-6">
        <label for="occupation" class="form-label">Occupation</label>
        <input name="occupation" value="{{old("occupation")}}" type="text" class="form-control" id="occupation">
        @error('occupation')
        <p class="text-danger">{{$message}}</p>
      @enderror
      </div>

      <div class="col-6">
        <label for="montly_income" class="form-label">Montly Income</label>
        <input name="income" value="{{old("income")}}" type="number" class="form-control" id="montly_income">
        @error('income')
        <p class="text-danger">{{$message}}</p>
      @enderror
      </div>
    </div>

    {{-- age gender phone   --}}
    <div class="mb-3 row">
      <div class=" col-3">
        <label for="age" class="form-label">Age</label>
        <input name="age" value="{{old("age")}}" type="number" class="form-control" id="age">
        @error('age')
        <p class="text-danger">{{$message}}</p>
      @enderror
      </div>

      <div class="col-4">
        <label for="gender" class="form-label">Gender</label>
        <select name="gender" type="text" class="form-control" id="gender">
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>
        @error('gender')
        <p class="text-danger">{{$message}}</p>
      @enderror
      </div>

      <div class="col-5">
        <label for="phone" class="form-label">Phone</label>
        <input name="phone" value="{{old("phone")}}" type="phone" class="form-control" id="phone">
        @error('phone')
        <p class="text-danger">{{$message}}</p>
      @enderror
      </div>

    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <section class="container py-5 bg-white">
    <p class="h2 text-start text-secondary my-3">Step 2: Contact Us</p>  
    <p class="lead">
      If you have any questions or need assistance at any point during the prize claiming process, please don't hesitate to contact our Prize Claim Team. We're here to make your experience as a winner enjoyable and hassle-free. <br/>
      Reach out to our dedicated Prize Claim Team through one of the following methods:
    </p>
  </section>



  @include('partials._contact')
  @include('partials._faq')



  @endsection