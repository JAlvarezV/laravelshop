<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //id, ref,nombre, descripcion, precio, stock, fechas
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('ref')->unique();
            $table->string('name');
            $table->string('description');
            $table->string('img_url');
            $table->float('price', 8, 2);
            $table->integer('stock');
            $table->integer('stock_min');
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
        Schema::dropIfExists('items');
    }
}
