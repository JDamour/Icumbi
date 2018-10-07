<?php

use Illuminate\Database\Seeder;
use App\District;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uturere = [
            ['province_id'=>'1','name'=>'Burera'],
            ['province_id'=>'1','name'=>'Gakenke'],
            ['province_id'=>'1','name'=>'Gicumbi'],
            ['province_id'=>'1','name'=>'Musanze'],
            ['province_id'=>'1','name'=>'Rulindo'],
            ['province_id'=>'2','name'=>'Gisagara'],
            ['province_id'=>'2','name'=>'Huye'],
            ['province_id'=>'2','name'=>'Kamonyi'],
            ['province_id'=>'2','name'=>'Muhanga'],
            ['province_id'=>'2','name'=>'Nyamagabe'],
            ['province_id'=>'2','name'=>'Nyanza'],
            ['province_id'=>'2','name'=>'Nyaruguru'],
            ['province_id'=>'2','name'=>'Ruhano'],
            ['province_id'=>'3','name'=>'Bugesera'],
            ['province_id'=>'3','name'=>'Gatsibo'],
            ['province_id'=>'3','name'=>'Kayonza'],
            ['province_id'=>'3','name'=>'Kirehe'],
            ['province_id'=>'3','name'=>'Ngoma'],
            ['province_id'=>'3','name'=>'Nyagatare'],
            ['province_id'=>'3','name'=>'Rwamagana'],
            ['province_id'=>'4','name'=>'Karongi'],
            ['province_id'=>'4','name'=>'Ngororero'],
            ['province_id'=>'4','name'=>'Nyabihu'],
            ['province_id'=>'4','name'=>'Nyamasheke'],
            ['province_id'=>'4','name'=>'Rubavu'],
            ['province_id'=>'4','name'=>'Rusizi'],
            ['province_id'=>'4','name'=>'Rutsiro'],
            ['province_id'=>'5','name'=>'Gasabo'],
            ['province_id'=>'5','name'=>'Kicukiro'],
            ['province_id'=>'5','name'=>'Nyarugenge']
        ];
        foreach($uturere as $akarere){
            District::create($akarere);
        }
    }
}
