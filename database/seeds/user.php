<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert(
    	[ 
    		'name' => 'Admin',
	        'email' => "admin@admin.com",	        
	        'password' => bcrypt('secret'), // secret	        
    	]
);
    }
}