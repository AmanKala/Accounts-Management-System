<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h3 class="text-center m-5">Welcome</h3>
        <br><br>
        <h4 class="bg-info text-white p-2 rounded"> Hey there! Welcome home, {{ $LoggedUserInfo['first_name'] }} {{ $LoggedUserInfo['last_name'] }} !</h4>
        <br>
        <a href="/createtransaction" class="btn btn-success ">Create Transaction</a> 
        <a href="/transactions" class="btn btn-primary ">Transaction Listing</a>
        <a href="/users" class="btn btn-warning ">User Listing</a>
        <a href="/logout" class="btn btn-danger ">Logout</a> 

    </div>
  </body>
</html>