<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */



    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->decimal('price',6,2);
        $table->integer('stock');
        $table->integer('rating')->nullable();
        $table->string('description')->nullable();
        $table->string('flavour');
        $table->string('image')->default('avatars/default.jpg');
        $table->timestamps();
      });

      Schema::create('ingredients', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->unique();
        $table->timestamps();
      });

      Schema::create('categories', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->unique();
        $table->timestamps();
      });

      Schema::create('status', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });

      Schema::create('shipments', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });

      Schema::create('payments', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });

      Schema::create('addresses', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
      });

      Schema::create('address_user', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('user_id')->nullable();
        $table->unsignedInteger('address_id')->nullable();
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('address_id')->references('id')->on('addresses');
        $table->timestamps();
      });

      Schema::create('shoppingCart', function (Blueprint $table) {
        $table->increments('id');
        $table->string('status_id')->references('id')->on('status');
        $table->unsignedInteger('user_id')->nullable();
        $table->foreign('user_id')->references('id')->on('users');
        $table->unsignedInteger('shipment_id')->nullable();
        $table->foreign('shipment_id')->references('id')->on('shipments');
        $table->unsignedInteger('payment_id')->nullable();
        $table->foreign('payment_id')->references('id')->on('payments');
        $table->unsignedInteger('address_id')->nullable();
        $table->foreign('address_id')->references('id')->on('addresses');
        $table->timestamps();
      });

      Schema::create('shoppingCart_product', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('quantity');
        $table->decimal('price',16,2);
        $table->unsignedInteger('shoppingCart_id')->nullable();
        $table->foreign('shoppingCart_id')->references('id')->on('shoppingCart');
        $table->unsignedInteger('product_id')->nullable();
        $table->foreign('product_id')->references('id')->on('products');
        $table->timestamps();
      });

      Schema::create('ingredient_product', function (Blueprint $table) {
       $table->increments('id');
       $table->unsignedInteger('ingredient_id')->nullable();
       $table->foreign('ingredient_id')->references('id')->on('ingredients');
       $table->unsignedInteger('product_id')->nullable();
       $table->foreign('product_id')->references('id')->on('products');
       $table->timestamps();
     });

     Schema::create('category_product', function (Blueprint $table) {
       $table->increments('id');
       $table->unsignedInteger('category_id')->nullable();
       $table->foreign('category_id')->references('id')->on('categories');
       $table->unsignedInteger('product_id')->nullable();
       $table->foreign('product_id')->references('id')->on('products');
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
      Schema::drop('products');
      Schema::drop('ingredients');
      Schema::drop('purchases');
      Schema::drop('categories');
      Schema::drop('shoppingCart');
      Schema::drop('status');
      Schema::drop('shipments');
      Schema::drop('payments');
      Schema::drop('addresses');
      Schema::drop('address_user');
      Schema::drop('shoppingCart-product');
      Schema::drop('category-product');
    }
}
