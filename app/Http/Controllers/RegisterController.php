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
    	User::create(Request::all());
    	return 'successfully created';
    }
}
