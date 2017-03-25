<?php

namespace App\Http\Controllers;

use Request;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
    	return view("blog.login");
    }

    public function signIn(Request $request)
    {
    	User::create(Request::all());
		return 'logged in';
    }
}
