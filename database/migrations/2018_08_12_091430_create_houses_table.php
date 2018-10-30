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
            $table->enum('status', ['1', '2', '3', '4', '5'])->default('1');
            $table->integer('user_id')->unsigned();
            $table->integer('paymentfrequency_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->integer('district_id')->unsigned();
            $table->integer('sector_id')->unsigned();
            $table->string('cell');
            $table->integer('numberOfRooms')->unsigned();
            $table->decimal('length', 8, 2);
            $table->decimal('width', 8, 2);
            $table->enum('water', ['1', '2'])->default('1');
            $table->enum('bathroom', ['1', '2'])->default('1');
            $table->enum('toilet', ['1', '2'])->default('1');
            $table->enum('fenced', ['1', '2'])->default('1');

            $table->timestamps();
        });
       Schema::table('houses', function (Blueprint $table) {
           //
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
