<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function store (Request $req)
    {
        $req->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "password" => "required|min:6",
            "re_enter_password" => "required|same:password"
        ]);
        $user=new User;
        $user->first_name=$req->first_name;
        $user->last_name=$req->last_name; 
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        return redirect('login');
    }

    public function check(Request $req)
    {
        // Validate Requests
        $req->validate([
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        $user_info = User::where('email','=',$req->email)->first();
        
        if(!$user_info)
        {
            return back()->with('fail',"Email Not Found");
        }
        else
        {
            if(Hash::check($req->password,$user_info->password))
            {
                $req->session()->put('LoggedUser',$user_info->id);
                return redirect('/');
            }
            else
            {
                return back()->with('fail',"Incorrect Password");
            }
        }
    }

    function logout()
    {
        if(session()->has('LoggedUser'))
        {
            session()->pull('LoggedUser');
            return redirect('login');
        }
    }

    function dashboard()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=',session('LoggedUser'))->first()];
        return view('/welcome',$data);
    }

    function show()
    {
        $user_data = User::all();
        return view('users', ['members' => $user_data]);
    }
}
