@extends('layouts.layout');
@section('content')
{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<div class="container p-5 my-5">
  @unless (count($winners) == 0 )

  <p class="h2 text-secondary my-3">
    Winner's List
  </p>
    
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">
          Name
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
          </svg>
        </th>
        <th scope="col">
          Amount
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
            <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
          </svg>
        </th>
        <th scope="col">
          Delivery Status
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
          </svg>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach ($winners as $winner)
        <tr>
          <td style="lead">{{$winner->name}}</td>
          <td style="lead">${{number_format($winner->amount)}}</td>
          <td style="lead">{{$winner->delivery_status}}</td>
        </tr>
      @endforeach
    </tbody>
  </table> 

  <div class="container">
    {{$winners->onEachSide(3)->links()}}
  </div>
    
  @else
  <p class="h1 text-center">
    No Winners Yet.
  </p>
  
  @endunless

 
    
  <div class="my-5">
    @include('partials._contact')
  </div>
  @include('partials._faq')
    
</div>

    
@endsection