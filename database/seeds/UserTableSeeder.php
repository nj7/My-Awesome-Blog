<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS=0');
    	DB::table('users')->truncate();
        DB::table('users')->insert([
        	
        	[
        		'name' => "Nirmit Jain",
        		'email' => "nirmitja@gmail.com",
        		'password' => bcrypt('nirmit'),
        	],
        	
        	[
        		'name' => "Sunil Jain",
        		'email' => "sja@gmail.com",
        		'password' => bcrypt('nirmit'),
        	],
        	
        	[
        		'name' => "Poonam Jain",
        		'email' => "pja@gmail.com",
        		'password' => bcrypt('nirmit'),
        	]
        	
        	]);
    }
}
