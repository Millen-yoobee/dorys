<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("abouts")->insert([

        	[
	            "textarea" => "Dory's restaurant serves the best Chinese.",
	            "about_by" => "millen",
	            "created_at" => new\Carbon\Carbon
        	]

       	] );

    }
   
}
