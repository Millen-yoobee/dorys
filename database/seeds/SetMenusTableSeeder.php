<?php

use Illuminate\Database\Seeder;

class SetMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("set_menus")->insert([
        	[
	            "name" => "Set 2700",
	            "price" => "2700.00",
	            "duration" => "2",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set 3100",
	            "price" => "3100.00",
	            "duration" => "2",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set 3150",
	            "price" => "3150.00",
	            "duration" => "2",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set 3500",
	            "price" => "3500.00",
	            "duration" => "2",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set 4400",
	            "price" => "4400.00",
	            "duration" => "2",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set 4900",
	            "price" => "4900.00",
	            "duration" => "2",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
 	      	[
	            "name" => "Set 5900",
	            "price" => "5900.00",
	            "duration" => "2",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set A",
	            "price" => "3250.00",
	            "duration" => "4",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set B",
	            "price" => "4150.00",
	            "duration" => "4",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set C",
	            "price" => "4600.00",
	            "duration" => "4",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "name" => "Set D",
	            "price" => "4950.00",
	            "duration" => "4",
	            "by_id" => "millen",
	            "created_at" => new\Carbon\Carbon
        	]
        ]);

    }
}
