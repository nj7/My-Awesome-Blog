<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Session;

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
            
            if($ses = Session::where("user_email" , $request->email)->first())
            {
                $ses->remember_token = $request->_token;
                $ses->save();
            }
            else
            {
                Session::insert([

                    'user_email' => $users->email,
                    'remember_token' => $request->_token,
                
                ]);
            }
            $users = $request->_token;

	        return redirect()->route('blog');
        }
        else
        {
		   return'not found';
        }
    }
}
