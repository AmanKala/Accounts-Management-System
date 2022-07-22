<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Listing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center bg-info p-2">Transaction List</h2>
    <br>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Title</th>
            <th scope="col">Date</th>
            <th scope="col">Paid by/to</th>
            <th scope="col">Total</th>
            <th scope="col">Type</th>
            <th scope="col">Status</th>
            <th scope="col">UTR</th>
            <th scope="col">Invoice No.</th>
            <th scope="col">Project</th>
            <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $count=1;
            @endphp
            @foreach($members as $member)
                <tr>
                    <td>{{$count++}}</td>
                    <td>{{$member['title']}}</td>
                    <td>{{$member['date']}}</td>
                    <td>{{$member['paid_by_to']}}</td>
                    <td>{{$member['total']}}</td>
                    <td>{{$member['type']}}</td>
                    <td>{{$member['status']}}</td>
                    <td>{{$member['utr']}}</td>
                    <td>{{$member['invoice_number']}}</td>
                    <td>{{$member['project']}}</td>
                    <td>
                        <a href={{"edit/".$member['id']}} class="btn btn-primary">Edit</a>
                        <a href={{"delete/".$member['id']}} class="btn btn-danger">Delete</a> 
                        <a href="" class="btn btn-success">Generate Receipt</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/" class="btn btn-primary m-2">Home</a>
    <a href="/createtransaction" class="btn btn-success m-2">Create Transaction</a>
  </body>
</html>