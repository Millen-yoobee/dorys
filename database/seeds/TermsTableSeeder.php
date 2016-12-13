<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("terms")->insert([

        	[
	            "two" => "Terms and conditions for 2-hour set menus",
	            "four" => "Terms and conditions for 4-hour set menus",
	            "tc_by" => "millen",
	            "created_at" => new\Carbon\Carbon
        	]

       	] );
    }
}
