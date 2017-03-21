<?php

use Illuminate\Database\Seeder;

class category_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([	

        		[
        			'title' => "Web programming",
        			'slug'	=> "Web-Web Programming"
        		],


        		[
        			'title' => "Social Marketing",
        			'slug'	=> "social marketing"
        		],


        		[
        			'title' => "Photography",
        			'slug'	=> "photography"
        		],

        		[
        			'title' => "Coding",
        			'slug'	=> "coding"
        		],


        		[
        			'title' => "Google",
        			'slug'	=> "cool"
        		]
        	]);

        for ($post_id =1; $post_id  <= 10; $post_id ++) { 
        	
        	$category_id  = rand(1,5);

        	DB::table('postnews')
        		->where('id', $post_id)
        		->update(['category_id'=>$category_id]);
        }
    }
}
