<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * categoria, name, valor, photo, description
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id');  //Product's name
            $table->string('name');  //Product's name
            $table->double('price', 5, 3);   // example 1.000
            $table->string('photo');  //photo file path
            $table->string('description');  //Product's description
            $table->timestamps();  //Created 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
