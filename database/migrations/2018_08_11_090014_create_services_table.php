<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('phone_number', 50);
            $table->enum('refunded', ['true', 'false'])->default('false');
            $table->unsignedInteger('house_id');
            $table->unsignedInteger('payment_id')->nullable();
            $table->timestamps();
            
//            $table->foreign('house_id')->references('id')->on('houses');
//            $table->foreign('payment_id')->references('paymentId')->on('payments');
        });
       Schema::table('services', function (Blueprint $table) {
//           $table->foreign('house_id')->references('id')->on('houses');
//           $table->foreign('payment_id')->references('paymentId')->on('payments');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
