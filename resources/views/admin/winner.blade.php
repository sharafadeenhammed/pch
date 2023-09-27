@extends('layouts.admin');
@section('content')

<form method="POST" action="/admin/root/user/pch/winners/{{$winner->id}}" class="container py-5 my-5 ">
  @csrf
  @method("put")
  <p class="h2 text-secondary my-3">Edit This Winner Listing</p>
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input id="name" value="{{$winner->name}}" name="name" type="text" class="form-control">

    @error('name')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="amount" class="form-label">amount address</label>
    <input value="{{$winner->amount}}" id="amount" name="amount" type="text" class="form-control">
    @error('amount')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="delivery_status" class="form-label"> delivery_status Number </label>
    <input id="delivery_status" value="{{$winner->delivery_status}}" name="delivery_status" type="delivery_status" class="form-control" >
    @error('delivery_status')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <button type="submit" class="btn btn-primary">update 
  </button>

</form>
    
</div>

    
@endsection