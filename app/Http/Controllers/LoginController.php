<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
    	return view("blog.login");
    }

    public function signIn(Request $request)
    {
		$users = User::where("email",$request->email)->first();
		if(Hash::check($request->password,$users->password))
        {
            $users->remember_token = $request->_token;
            $users->save();
            
            $users = $request->_token;

	        return redirect()->route('blog.login',compact('users'));
        }
        else
        {
		   return'not found';
        }
    }
}
