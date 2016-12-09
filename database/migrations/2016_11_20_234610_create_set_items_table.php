<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("set_menu_id")->unsigned();
            $table->foreign("set_menu_id")->references("set_id")->on("set_menus");
            $table->integer("set_item_id")->unsigned();
            $table->foreign("set_item_id")->references("dish_id")->on("dishes");
            $table->string("set_by", 50);
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
        Schema::drop('set_items');
    }
}
