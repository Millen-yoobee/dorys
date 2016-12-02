<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('set_menus', function (Blueprint $table) {
            $table->increments("set_id");
            $table->string("name", 20);
            $table->decimal("price", 7, 2);
            $table->integer("duration");
            $table->string("by");
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
        Schema::drop('set_menus');
    }
}
