<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Login</h1>
    <form class="m-5" action="" method="POST">
        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail')}}
            </div>
        @endif

        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Id</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ old('email') }}" required>
            <div class="text-dange">@error('email') {{ $message }} @enderror</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            <div class="text-dange">@error('password'){{ $message }} @enderror</div>
        </div>
        <button type="submit" class="btn btn-success w-25">Login</button>
        <a href="/register" class="btn btn-primary w-25">Register</a>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>