<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\category;
use Carbon\Carbon;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layout.sidebar',function($view){

            $categories = category::with(['posts' => function($query){
                                    $query->where('published_at', "<=", Carbon::now());}])
                                ->orderBy('title', 'asc')->get();
            return $view->with('categories',$categories);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
