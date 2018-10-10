<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        
//      'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('password'),
        'remember_token' => str_random(10),
        'firstName' => $faker->firstname,
        'lastName' => $faker->lastname,
        'phoneNumber' => $faker->phoneNumber,
        'gender' => $faker->randomElements(['male', 'female'])[0],
        'dateOfBirth' => $faker->date($format ='Y-m-d', $max ='now'),
        'accountConfirmationCode' => $faker->creditCardNumber,
        'amount' => $faker->numberBetween($min =500, $max =50000),
        'roleId' => $faker->numberBetween($min =1, $max =3),
        'national_id'=>$faker->creditCardNumber,
        'createdBy' =>$faker->dateTime($max = 'now'),
        'updatedBy' =>$faker->dateTime($max = 'now'),
    ];
});
