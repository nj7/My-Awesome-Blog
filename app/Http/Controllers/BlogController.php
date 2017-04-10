<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;

//name of the table
use App\User;
use App\Postnew;
use App\category;
use App\Session;

class BlogController extends Controller
{

    protected $limit = 3;
    
    public function index()
    {   
        /*checking session*/
        $name = BlogController::checkSession();

    	$posts = Postnew::with('author')
	    				->orderBy('published_at','desc')
	    				->published()
	    				->simplePaginate($this->limit);
        if(isset($name))
        {
            return view("blog.index",compact('posts','name'));
        }

    	return view("blog.index",compact('posts'));
    	
    	// in order to view number of queries that are being executed

    	/*\DB::enableQueryLog();
    	$posts = Postnew::with('author')->get();
    	view("blog.index",compact('posts'))->render();
    	dd(\DB::getQueryLog());*/
    }


    public function show(Postnew $post)
    {	
        /*checking session*/
        $name = BlogController::checkSession();

        if(isset($name))
        {
            return view("blog.show",compact('post','name'));
        }
    	
        return view('blog.show', compact('post') );
    }


    public function category(category $category)
    {
        /*checking session*/
        $name = BlogController::checkSession();

        $categoryName = $category->title;
        
        $posts = $category->posts()
                          ->with('author')
                          ->orderBy('published_at','desc')
                          ->published()
                          ->simplePaginate($this->limit);

        if(isset($name))
        {
            return view("blog.index",compact('posts','category','name'));
        }
        
        return view("blog.index",compact('posts','categoryName'));
    }

    public static function checkSession()
    {
        $request = Request();
        $token = $request->session()->get("_token");

        $session = Session::where('remember_token', $token )->first();
        if(isset($session)){
            $name = User::where('email',$session->user_email)->first();
            
            return $name->name; 
        }
        
    }
}
