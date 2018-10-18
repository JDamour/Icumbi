<?php

use Illuminate\Database\Seeder;
use App\paymentfrequency;

class FrequencySeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $frequency = [
            ['name'=>'Daily'],
            ['name'=>'Weekely'],
            ['name'=>'Monthly'],

        ];
        foreach($frequency as $freque){
            paymentfrequency::create($freque);
        }
    }
}
