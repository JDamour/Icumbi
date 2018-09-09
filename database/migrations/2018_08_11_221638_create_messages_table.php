<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->text('message');
            $table->integer('houseOwnerId')->unsigned();
            $table->integer('administratorId')->unsigned();
//            $table->foreign('houseOwnerId')->references('nationalId')->on('users');
//            $table->foreign('administratorId')->references('nationalId')->on('users');
            $table->timestamps();
        });
       Schema::table('messages', function (Blueprint $table) {
//           $table->foreign('houseOwnerId')->references('id')->on('users');
//           $table->foreign('administratorId')->references('id')->on('users');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
