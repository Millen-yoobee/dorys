<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("categories")->insert([

        	[
	            "name" => "Beef",
	            "by_id" => "8",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Chicken",
	            "by_id" => "8",
	            "created_at" => new\Carbon\Carbon
        	]

       	] );

    }
}
