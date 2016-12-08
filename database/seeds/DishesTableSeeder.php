<?php

use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("dishes")->insert([
        	[
	            "category" => "Beef",
	            "name" => "Beef brisket",
	            "price" => "200.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Beef",
	            "name" => "Beef with broccoli flower",
	            "price" => "180.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Beef",
	            "name" => "Beef with young corn and mushroom",
	            "price" => "165.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Beef",
	            "name" => "Braised beef",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Braised chicken and mushroom",
	            "price" => "190.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Buttered chicken",
	            "price" => "155.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with nuts and mushroom",
	            "price" => "200.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken curry",
	            "price" => "160.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken liver and gizzard",
	            "price" => "200.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken rebosado",
	            "price" => "150.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with black bean sauce",
	            "price" => "200.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with broccoli",
	            "price" => "160.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with cauliflower",
	            "price" => "165.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with celery",
	            "price" => "155.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with green peas",
	            "price" => "155.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with ham",
	            "price" => "375.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with pechay",
	            "price" => "150.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with pineapple",
	            "price" => "165.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with sitsaro",
	            "price" => "170.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with taosi",
	            "price" => "150.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with green and red pepper",
	            "price" => "165.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Chicken with tomato sauce",
	            "price" => "160.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Fried chicken",
	            "price" => "375.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "Soy chicken",
	            "price" => "365.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Chicken",
	            "name" => "White chicken",
	            "price" => "375.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Egg",
	            "name" => "Torta con baboy",
	            "price" => "135.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Egg",
	            "name" => "Torta con beef",
	            "price" => "135.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Egg",
	            "name" => "Torta con grejo",
	            "price" => "135.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Egg",
	            "name" => "Torta con hipon",
	            "price" => "135.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Fish fillet and tofu mushroon sauce",
	            "price" => "210.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Fish fillet with crab sauce",
	            "price" => "190.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Fish fillet with mushroom sauce",
	            "price" => "190.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Fish fillet with sweet and sour sauce",
	            "price" => "170.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Fish fillet with taosi",
	            "price" => "170.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Fish fillet with tokwa and taosi",
	            "price" => "180.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Fish head and tokwa in earthen pot",
	            "price" => "250.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Fish head in earthen pot",
	            "price" => "225.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Spicy whole lapu-lapu",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Steam lapu-lapu",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Steam lapu-lapu with black bean sauce ",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Steam lapu-lapu with ginger leek sauce",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Steam lapu-lapu with mushroom sauce",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Steam lapu-lapu with oyster sauce",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Steam lapu-lapu with salsa blanca",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Fish",
	            "name" => "Whole lapu-lapu with sweet and sour sauce",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Noodles",
	            "name" => "Chopsuey de Canton",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Noodles",
	            "name" => "Pancit Canton",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Pork",
	            "name" => "Crispy pata",
	            "price" => "395.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Pork",
	            "name" => "Lumpia Shanghai",
	            "price" => "125.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Pork",
	            "name" => "Pata tim",
	            "price" => "160.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Pork",
	            "name" => "Pork steak",
	            "price" => "150.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Camaron con jamon",
	            "price" => "185.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Camaron rebosado ",
	            "price" => "145",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Camaron with red sauce",
	            "price" => "190.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Camaron rellenado",
	            "price" => "190.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Fried shrimp",
	            "price" => "155.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Shrimp and tokwa taosi",
	            "price" => "180.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Shrimp curry",
	            "price" => "175.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Shrimp gambas",
	            "price" => "195.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Shrimp with ampalaya",
	            "price" => "180.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Shrimp with celery",
	            "price" => "175.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Shrimp with green peas",
	            "price" => "175.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Shrimp with onions",
	            "price" => "175.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Shrimp with sitsaro",
	            "price" => "175.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Shrimp",
	            "name" => "Sinigang hipon",
	            "price" => "285.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Corn soup - small",
	            "price" => "100.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Corn soup - medium",
	            "price" => "115.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Corn soup - large",
	            "price" => "140.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Nido soup - small",
	            "price" => "100.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Nido soup - medium",
	            "price" => "115.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Nido soup - large",
	            "price" => "140.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Pao Bao soup - small",
	            "price" => "110.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Pao Bao soup - medium",
	            "price" => "130.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Soup",
	            "name" => "Pao Bao soup - large",
	            "price" => "145.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Special Order",
	            "name" => "Cold cuts",
	            "price" => "340.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Special Order",
	            "name" => "Dory's chopsuey",
	            "price" => "135.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Special Order",
	            "name" => "SIPO",
	            "price" => "180.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Special Order",
	            "name" => "Young corn with mushroom",
	            "price" => "160.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Squid",
	            "name" => "Crispy squid roll (calamares)",
	            "price" => "145.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Squid",
	            "name" => "Sauted squid",
	            "price" => "150.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Squid",
	            "name" => "Shredded squid with kumpao sauce",
	            "price" => "160.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Tokwa",
	            "name" => "Fried tokwa",
	            "price" => "120.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Toppings",
	            "name" => "Asado rice",
	            "price" => "150.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Toppings",
	            "name" => "Braised beef rice",
	            "price" => "160.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Toppings",
	            "name" => "Dory's rice",
	            "price" => "145.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Toppings",
	            "name" => "Soy chicken rice",
	            "price" => "150.00",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	],
        	[
	            "category" => "Rice",
	            "name" => "Fried rice",
	            "price" => "",
	            "image" => "friedchicken.jpg",
	            "add_upd_by" => "millen",
 	            "created_at" => new\Carbon\Carbon
        	]
        ]);

    }
}
