<?php

namespace App\Http\Controllers;
use App\Models\Transaction;

use Illuminate\Http\Request;
use App\Http\Requests\TransactionRequest;


class TransactionController extends Controller
{
    //
    public function store (TransactionRequest $req)
    {
        // Validate and Save the values in database.
        Transaction::create($req->validated());

        return redirect()->route('transactions');
    }

    public function show ()
    {
        $data = Transaction::all();
        return view('transactionListing',['members'=> $data]);
    }

    public function delete ($id)
    {
        $data=Transaction::find($id);
        $data->delete();
        return redirect()->route('transactions');
    }

    public function edit ($id)
    {
        $data = Transaction::find($id);
        return view('editTransaction',['data'=>$data]);
    }

    public function update (Request $req)
    {
        $data = Transaction::find($req->id);
        $data->title=$req->title;
        $data->date=$req->date;
        $data->paid_by_to=$req->paid_by_to;
        $data->amount=$req->amount;
        $data->quantity=$req->quantity;
        $data->unit_name=$req->unit_name;
        $data->total=$req->total;
        $data->type=$req->type;
        $data->status=$req->status;
        $data->utr=$req->utr;
        $data->project=$req->project;
        $data->comment=$req->comment;
        $data->save();
        return redirect()->route('transactions');
    }
}
