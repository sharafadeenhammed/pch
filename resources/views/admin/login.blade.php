<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/pch-icon.png" type="image/x-icon">
  <link rel="stylesheet" href="/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/style.css">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin|Login</title>
</head>
<body>
  <main class="w-100 vh-100 bg-light">
    <div class="container w-100 h-100 ">
      <div>
        <p class="h2 text-secondary my-3">Login As Admin</p>
      </div>
        <form action="/admin/login" method="POST">
          @csrf
          <div class="row w-100 h-100 d-flex aligh-items-center justify-content-center">
            <div class="col-sm my-3">
              <label class="form-label" for="email">Enter your email</label>
              <input value="{{old("email")}}" class="form-control" name="email" type="text" placeholder="Enter your email">
              @error('email')
                  <p class="text-danger">{{$message}}</p>
              @enderror
            </div  >

            <div class="col-sm my-3">
              <label class="form-label" for="password">Enter your password</label>
              <input value="{{old("password")}}" place class="form-control" type="password" placeholder="Enter your password" name="password">
              @error('password')
              <p class="text-danger">{{$message}}</p>
                  
              @enderror
            </div>
            
          </div>

          <button class="btn btn-primary" type="submit">Login</button>
          
        </form>
    </div>
  </main>
  
</body>
</html>