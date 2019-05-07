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
            $table->string('paymentReference')->nullable();
            $table->string('spTransactionId')->nullable();
            $table->string('walletTransactionId')->nullable();
            $table->string('chargedCommission')->nullable();
            $table->string('currency')->nullable();
            $table->string('cardNumber')->nullable();
            $table->string('amount');
            $table->string('transactionStatus');
            $table->string('transactionStatusDesc')->nullable();
            $table->string('receiptNumber')->nullable();
            $table->string('cardExpireDate')->nullable();
            $table->string('orderNumber')->nullable();
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
