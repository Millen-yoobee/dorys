<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
        	[
	            "fname" => "Homer",
	            "lname" => "Ramos",
	            "email" => "mil@free.net.nz",
	            "username" => "homer",
	            "password" => "$2y$10$036T8pMkiY7H.bOIkbnRnOOSc5wrT8ZEpA2xfwIR2mfJwlyp5YbKa",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "fname" => "Abby",
	            "lname" => "Ramos",
	            "email" => "abby.w.ramos@gmail.com",
	            "username" => "abby",
	            "password" => "$2y$10$036T8pMkiY7H.bOIkbnRnOOSc5wrT8ZEpA2xfwIR2mfJwlyp5YbKa",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "fname" => "Millen",
	            "lname" => "Wong",
	            "email" => "millen.c.wong@gmail.com",
	            "username" => "millen",
	            "password" => "$2y$10$036T8pMkiY7H.bOIkbnRnOOSc5wrT8ZEpA2xfwIR2mfJwlyp5YbKa",
	            "created_at" => new\Carbon\Carbon
        	]
        ]);
    }
}
