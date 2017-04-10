<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Session;


class LogoutController extends Controller
{
    public function index(Request $request)
    {
    	$user = Session::where('remember_token', $request->session()->get('_token'))->first();
    	if(isset($user))
    	{
    		$user->delete();
    	}
    	return redirect()->route('blog');
    }
}
