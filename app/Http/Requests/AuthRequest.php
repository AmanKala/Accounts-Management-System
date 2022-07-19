<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function store (Request $req)
    {
        $req->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required|email",
            "password" => "required|min:6",
            "re_enter_password" => "required|same:password"
        ]);

        // Saving the values in database.
        $user=new User;
        $user->first_name=$req->first_name;
        $user->last_name=$req->last_name; 
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        return redirect()->route('login');
    }

    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
