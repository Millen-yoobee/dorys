<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->increments("dish_id");

            $table->enum("category", ["Beef", "Chicken", "Egg", "Fish", "Noodles", "Pork", "Shrimp", "Soup", "Special Order", "Squid", "Tokwa", "Toppings", "Rice", "Dessert", "Drinks" ]);
            $table->string("name", 50)->unique();
            $table->decimal("price", 7, 2);
            $table->string("image", 100);
            $table->string("add_upd_by", 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('dishes');
    }
}
