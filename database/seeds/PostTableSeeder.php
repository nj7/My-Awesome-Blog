<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postnews')->truncate();
        $faker = Factory::create();
        $date = Carbon::create(2017,3,8,8);

        $post = [];
        for ($i=0; $i < 10; $i++) {

        	$image = "Post_Image_".rand(1,5).".jpg" ;
        	$date->addDays(1);
            $publishedDate = clone($date);
            $createdAt = clone($date);

        	$post[] =[

        		'author_id'       =>           rand(1,3),
        		'title'           =>           $faker->sentence(rand(8,12)),
        		'slug'            =>           $faker->slug(),
        		'excerpt'         =>           $faker->text(rand(250,300)),
        		'body'            =>           $faker->paragraphs(rand(7,10),true),
        		'image'           =>           rand(0,1) == 1 ? $image :NULL, 
        		'updated_at'      =>           $createdAt,
                'created_at'      =>           $createdAt,
                'published_at'    =>           $i < 5 ? $publishedDate :(rand(0,1) == 0 ? NULL : $publishedDate->addDays(4))
        	]; 
        	
        }


        	DB::table('postnews')->insert($post);	
    }
}
