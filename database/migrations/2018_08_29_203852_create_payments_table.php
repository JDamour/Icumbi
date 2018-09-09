<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('paymentId');
            $table->string('paymentReference');
            $table->string('cardNumber');
            $table->string('amount');
            $table->string('transactionStatus');
            $table->string('receiptNumber');
            $table->string('cardExpireDate');
            $table->string('orderNumber');
            $table->integer('payment_mode')->unsigned();
            $table->timestamps();

            // $table->foreign('payment_mode')->references('paymentModeId')->on('payment_mode');
        });
        
       Schema::table('payments', function (Blueprint $table) {
//           $table->foreign('payment_mode')->references('paymentModeId')->on('payment_mode');
       });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
