<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('houseLocation');
            $table->double('housePrice');
            $table->string('streetCode');
            $table->enum('status', ['1', '2', '3'])->default('1');
            $table->integer('user_id')->unsigned();
            $table->integer('paymentfrequency_id')->unsigned();
            $table->integer('cell_id')->unsigned();
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('paymentfrequency_id')->references('id')->on('paymentfrequency');
//            $table->foreign('cell_id')->references('id')->on('cells');
            $table->timestamps();
        });
       Schema::table('houses', function (Blueprint $table) {
//           $table->foreign('user_id')->references('id')->on('users');
//           $table->foreign('paymentfrequency_id')->references('id')->on('paymentfrequency');
//           $table->foreign('cell_id')->references('id')->on('cells');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
}
