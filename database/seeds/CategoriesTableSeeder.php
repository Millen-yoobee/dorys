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
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Chicken",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	]

       	] );

    }
}
