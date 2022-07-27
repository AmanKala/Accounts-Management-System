<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body class="m-5">
    <h1 class="text-center mb-3">Receipt</h1>
        <div class="mb-3">
            <label class="">Invoice Number:</label> &nbsp;&nbsp; 
            <span>{{ $data['invoice_number'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">Title:</label> &nbsp;&nbsp; 
            <span>{{ $data['title'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">Date :</label> &nbsp;&nbsp; 
            <span>{{ $data['date'] }} </span>
        </div>

        <div class="mb-3">
            <label class="">Paid to/by :</label> &nbsp;&nbsp; 
            <span>{{ $data['paid_by_to'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">amount :</label> &nbsp;&nbsp; 
            <span>{{ $data['amount'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">Quantity :</label> &nbsp;&nbsp; 
            <span>{{ $data['quantity'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">Unit Name :</label> &nbsp;&nbsp; 
            <span>{{ $data['unit_name'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">Total</label> &nbsp;&nbsp; 
            <span>{{ $data['amount']*$data['quantity'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">Type :</label> &nbsp;&nbsp; 
            <span>{{$data['type']}}</span>
        </div>

        <div class="mb-3">
            <label class="">Status :</label> &nbsp;&nbsp; 
            <span>{{$data['status']}}</span>
        </div>

        <div class="mb-3">
            <label class="">UTR :</label> &nbsp;&nbsp; 
            <span>{{ $data['utr'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">Project</label> &nbsp;&nbsp; 
            <span>{{ $data['project'] }}</span>
        </div>

        <div class="mb-3">
            <label class="">Comment :</label>
            <span>{{ $data['comment'] }}</span>
        </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>