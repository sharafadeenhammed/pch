@extends('layouts.admin');
@section('content')

<form method="POST" action="/admin/root/user/pch/claims/{{$claim->id}}" class="container py-5 my-5 ">
  @csrf
  @method("delete")
  <p class="h2 text-secondary my-5">User Contant Details</p>
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input disabled id="name" value="{{$claim->name}}" name="name" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="Message" class="form-label">Address </label>
    <input disabled id="Message" value="{{$claim->address}}" name="Message" type="text" class="form-control">
  </div>

  
  {{-- cellphone gender occupation --}}
  <div class="row">
    <div class="mb-3 col-3">
      <label for="Message" class="form-label">Gender </label>
      <input disabled id="Message" value="{{$claim->gender}}" name="Message" type="text" class="form-control">
    </div>

    <div class="mb-3 col-4">
      <label for="Message" class="form-label">Phone </label>
      <input disabled id="Message" value="{{$claim->phone}}" name="Message" type="text" class="form-control">
    </div>

    <div class="mb-3 col-5">
      <label for="Message" class="form-label">Occupation </label>
      <input disabled id="Message" value="{{$claim->occupation}}" name="Message" type="text" class="form-control">
    </div>
  </div>

  {{-- state zipcode monthly_income --}}
  <div class="row">
    <div class="mb-3 col-3">
      <label for="Message" class="form-label">State </label>
      <input disabled id="Message" value="{{$claim->state}}" name="Message" type="text" class="form-control">
    </div>

    <div class="mb-4 col-3">
      <label for="Message" class="form-label">Zipcode </label>
      <input disabled id="Message" value="{{$claim->zipcode}}" name="Message" type="text" class="form-control">
    </div>

    <div class="mb-5 col-3">
      <label for="Message" class="form-label">Monthly Income </label>
      <input disabled id="Message" value="${{number_format($claim->income)}}" name="Message" type="text" class="form-control">
    </div>

    <div class="mb-5 col-3">
      <label for="Message" class="form-label">Age </label>
      <input disabled id="Message" value="{{$claim->age}}" name="Message" type="text" class="form-control">
    </div>
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