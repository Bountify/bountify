<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftNeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giftNeeds', function (Blueprint $table) {

            $table->string('title');//->unique();
            $table->string('description');//->nullable();
            $table->string('type');
            $table->string('status');
            //$table->increments('id');
            //$table->string('url');
            //$table->string('thumbnail')->nullable();
            //$table->integer('user_id');
            //$table->foreign('user_id')->references('id')->on('users');
            //$table->rememberToken();
            //$table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('giftNeeds');
    }
}
