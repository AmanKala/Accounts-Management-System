<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Transaction</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Edit Transaction</h1>

    <form class="m-5" action="/edit" method="POST">

        @if(Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail')}}
            </div>
        @endif

        @csrf
        <input type="hidden" name="id" class="form-control" value={{ $data['id'] }}>
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $data['title'] }}" required>
            <div class="text-danger">@error('title') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Date</label>
            <input type="date" name="date" class="form-control" value={{ $data['date'] }} required>
            <div class="text-danger">@error('date') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Paid to/by</label>
            <input type="text" name="paid_by_to" class="form-control" value="{{ $data['paid_by_to'] }}" required>
            <div class="text-danger">@error('paid_to_by') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">amount</label>
            <input type="number" name="amount" class="form-control" value={{ $data['amount'] }} required>
            <div class="text-danger">@error('amount') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="quantity" class="form-control" value={{ $data['quantity'] }} required>
            <div class="text-danger">@error('quantity') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Unit Name</label>
            <input type="text" name="unit_name" class="form-control" value="{{ $data['unit_name'] }}" required>
            <div class="text-danger">@error('unit_name') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Type</label>
            <select name="type" id="type" class="form-control">
                <option value="revenue">Revenue</option>
                <option value="expense">Expense</option>
            </select>
            <div class="text-danger">@error('type') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Status</label>
            <select name="status" id="status" class="form-control">
                <option value="due">due</option>
                <option value="cleared">cleared</option>
                <option value="cancelled">cancelled</option>
            </select>
            <div class="text-danger">@error('status') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">UTR</label>
            <input type="text" name="utr" class="form-control" value="{{ $data['utr'] }}">
            <div class="text-danger">@error('utr') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Project</label>
            <input type="text" name="project" class="form-control" value="{{ $data['project'] }}" required>
            <div class="text-danger">@error('project') {{ $message }} @enderror</div>
        </div>

        <div class="mb-3">
            <label class="form-label">Comment</label>
            <input type="textarea" name="comment" class="form-control" value="{{ $data['comment'] }}">
            <div class="text-danger">@error('comment') {{ $message }} @enderror</div>
        </div>

        <button type="submit" class="btn btn-success w-25">Update Transaction</button>
        <a href="/transactions" class="btn btn-primary w-25">Discard</a>
        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>