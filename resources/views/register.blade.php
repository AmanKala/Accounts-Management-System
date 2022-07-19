<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Register</h1>

    @if($errors)
      @foreach($errors->all() as $err)
      <ul class="list-group">
        <li class="list-group-item list-group-item-danger font-weight-bold">{{$err}}</li>
      </ul>
      @endforeach
    @endif

    <form class="m-5" action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputFirstName" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" id="exampleInputFirstName" aria-describedby="FirstName" value="{{ old('first_name') }}" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputFirstName" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" id="exampleInputFirstName" aria-describedby="emailHelp" value="{{ old('last_name') }}" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email Id</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" value="{{ old('password') }}" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Re-enter Password</label>
            <input type="password" name="re_enter_password" class="form-control" id="exampleInputPassword1" value="{{ old('re_enter_password') }}" required>
        </div>
        <button type="submit" class="btn btn-primary w-25">Register</button>
        <a href="/login" class="btn btn-success w-25">LogIn</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>