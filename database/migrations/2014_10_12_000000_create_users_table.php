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
            $table->string('national_id', 17)->default('1196891048730545');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('phoneNumber');
            $table->enum('gender', ['Male', 'Female'])->default('Male');
            $table->date('dateOfBirth');
            $table->string('accountConfirmationCode')->default(001);
            $table->double('amount')->default(01);
            $table->integer('roleId')->unsigned()->default(3);
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            // $table->foreign('roleId')->references('id')->on('roles');
        });
       Schema::table('users', function (Blueprint $table) {
            //$table->foreign('roleId')->references('id')->on('roles');
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
