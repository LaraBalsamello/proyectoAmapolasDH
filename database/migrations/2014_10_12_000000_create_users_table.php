<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('users', function (Blueprint $table) {
         $table->increments('id');
         $table->string('name');
         $table->string('last_name')->nullable();
         $table->string('email')->unique();
         $table->string('avatar')->default('avatars/default.jpg');
         $table->string('password')->nullable();
         $table->string('country')->nullable();
         $table->string('province')->nullable();
         $table->string('age')->nullable();
         $table->string('admin')->default(0);
         $table->timestamp('email_verified_at')->nullable();
         $table->rememberToken();
         $table->timestamps();
         //$table->foreign('adress_id')->references('id')->on('adress');
       });


   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
       Schema::dropIfExists('users');
   }
}
