<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;

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

        //starting a login session
        Session::insert([

                'user_email' => $request->email,
                'remember_token' => $request->_token,
            ]);

        //sending confirmation email
        //Mail::to($request->email)->send(new RegisterMail());
        
        $user = $request->_token;
    	return redirect()->route('blog.login',compact('user'));
    }
}
