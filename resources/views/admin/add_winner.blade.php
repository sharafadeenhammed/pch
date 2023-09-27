@extends('layouts.admin');
@section('content')

<form method="POST" action="/admin/root/user/pch/winners/" class="container py-5 my-5 ">
  @csrf
  <p class="h2 text-secondary my-3">Add New Winner</p>
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input id="name" value="{{old("name")}}" name="name" type="text" class="form-control">

    @error('name')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="amount" class="form-label">Amount</label>
    <input value="{{old("amount")}}" id="amount" name="amount" type="text" class="form-control">
    @error('amount')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="delivery_status" class="form-label"> Delivery Status </label>
    <input id="delivery_status" value="{{old("delivery_status")}}" name="delivery_status" type="delivery_status" class="form-control" >
    @error('delivery_status')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">submit 
  </button>

</form>
    
</div>

    
@endsection