@extends('layouts.admin');
@section('content')

<form method="POST" action="/admin/root/user/pch/contacts/{{$contact->id}}" class="container py-5 my-5 ">
  @csrf
  @method("delete")
  <p class="h2 text-secondary my-5">User Contant Details</p>
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input disabled id="name" value="{{$contact->name}}" name="name" type="text" class="form-control">

    @error('name')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="Message" class="form-label">Email </label>
    <input disabled value="{{$contact->email}}" id="Message" name="Message" type="text" class="form-control">
    @error('message')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label"> Phone Number </label>
    <input disabled id="phone" value="{{$contact->phone}}" name="phone" type="phone" class="form-control" >
    @error('phone')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <div class="mb-3">
    <label for="Message" class="form-label">Email </label>
    <textarea disabled id="Message" name="Message" type="text" class="form-control"> {{$contact->message}}</textarea>
    @error('email')
      <p class="text-danger fw-bold">  
        {{$message}}
      </p>
    @enderror
  </div>

  <button type="submit" class="btn btn-danger">
    delete 
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
      <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
      <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
    </svg>
  </button>

</form>
    
</div>

    
@endsection