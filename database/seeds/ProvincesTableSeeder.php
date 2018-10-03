<?php

use Illuminate\Database\Seeder;
use App\Province;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $intara = [
            ['country_id'=>'1','name'=>'Amajyaruguru'],
        	['country_id'=>'1','name'=>'Amajyepfo'],
        	['country_id'=>'1','name'=>'Iburasirazuba'],
        	['country_id'=>'1','name'=>'Uburengerazuba'],
        	['country_id'=>'1','name'=>'Kigali'],
        ];
        foreach($intara as $inta){
            Province::create($inta);
        }
    }
}
