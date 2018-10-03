<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $igihugu = [
            ['name'=>'Rwanda'],
        	['name'=>'Burundi'],
        ];
        foreach($igihugu as $igihu){
            Country::create($igihu);
        }
    }
}
