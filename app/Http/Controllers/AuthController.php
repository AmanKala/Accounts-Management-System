<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function store (Request $request){
    //     Register::create($request->all());

    //     return redirect()->route("register");
    // }

    public function store (Request $req)
    {
        $req->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "password" => "required",
            "re_enter_password" => "required",
        ]);
        $user=new User;
        $user->first_name=$req->first_name;
        $user->last_name=$req->last_name; 
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
    }
}
