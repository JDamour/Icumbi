<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->longText('description');
            $table->integer('house_id')->unsigned();            
            // $table->foreign('house_id')->references('id')->on('houses');
            $table->timestamps();
        });
       Schema::table('reports', function (Blueprint $table) {           
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
        Schema::dropIfExists('reports');
    }
}
