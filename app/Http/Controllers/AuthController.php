<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function store (AuthRequest $req)
    {
        // Validate and Save the values in database.
        User::create($req->validated());
        
        return redirect()->route('login');
    }

    public function check(Request $req)
    {
        // Validate Requests
        $req->validate([
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        // Retrive the information from database.
        $userInfo = User::where('email','=',$req->email)->first();
        
        // Login related functions to validate email and password.
        if(!$userInfo)
        {
            return back()->with('fail',"Email Not Found");
        }
        else
        {
            if(Hash::check($req->password,$userInfo->password))
            {
                $req->session()->put('logged_user',$userInfo->id);
                return redirect()->route('dashboard');
            }
            else
            {
                return back()->with('fail',"Incorrect Password");
            }
        }
    }

    function logout()
    {
        if(session()->has('logged_user'))
        {
            session()->pull('logged_user');
            return redirect()->route('login');
        }
    }

    // View the data on welcome page.
    function dashboard()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=',session('logged_user'))->first()];
        return view('/welcome',$data);
    }

    // User listing
    function show()
    {
        $user_data = User::all();
        return view('users', ['members' => $user_data]);
    }
}
