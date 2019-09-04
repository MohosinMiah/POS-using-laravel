<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('category_id')->unsigned();
            $table->float('price');
            $table->float('sell_price');
            $table->string('code');
            $table->integer('supplier_id')->unsigned();
            $table->string('img');
            $table->string('unit');
            $table->string('weight');
            $table->integer('quantity');
            $table->string('company');
            $table->string('tax');
            $table->string('product_type');
            $table->string('method');
            $table->string('note');
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
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
