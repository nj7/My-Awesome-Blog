<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;

//name of the table
use App\Postnew;
use App\category;

class BlogController extends Controller
{

    protected $limit = 3;
    
    public function index()
    {
    	
    	$posts = Postnew::with('author')
	    				->orderBy('published_at','desc')
	    				->published()
	    				->simplePaginate($this->limit);

    	return view("blog.index",compact('posts'));
    	
    	// in order to view number of queries that are being executed

    	/*\DB::enableQueryLog();
    	$posts = Postnew::with('author')->get();
    	view("blog.index",compact('posts'))->render();
    	dd(\DB::getQueryLog());*/
    }


    public function show(Postnew $post)
    {	
    	return view('blog.show', compact('post') );
    }


    public function category(category $category)
    {
        $categoryName = $category->title;
        
        $posts = $category->posts()
                          ->with('author')
                          ->orderBy('published_at','desc')
                          ->published()
                          ->simplePaginate($this->limit);

        return view("blog.index",compact('posts','categoryName'));
    }
}
