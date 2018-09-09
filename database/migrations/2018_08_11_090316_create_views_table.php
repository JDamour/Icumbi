<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('views', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ip_address');
            $table->integer('house_id')->unsigned();
            $table->timestamps();
            
            // $table->foreign('house_id')->references('id')->on('houses');
        });
       Schema::table('views', function (Blueprint $table) {
//           $table->foreign('house_id')->references('id')->on('houses');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('views');
    }
}
