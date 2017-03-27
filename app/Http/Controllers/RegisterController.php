<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
    	return view("blog.register");
    }

    public function create(Request $request)
    {
        //return $request->_token;
    	User::insert([
     
        		'name' => $request->name,
        		'email' => $request->email,
        		'password' => bcrypt($request->password),
                'remember_token' => $request->_token,
        	]);
        $user = $request->_token;
    	return redirect()->route('blog.login',compact('user'));
    }
}
