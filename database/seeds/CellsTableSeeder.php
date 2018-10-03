<?php

use Illuminate\Database\Seeder;
use App\Cell;
class CellsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $akagari = [
            ['sector_id'=>'1','name'=>'kibaza'],
        	['sector_id'=>'2','name'=>'kagugu'],
        	['sector_id'=>'3','name'=>'kimironko'],
        	['sector_id'=>'4','name'=>'muhima'],
        	['sector_id'=>'5','name'=>'nyarutarama'],
        ];
        foreach($akagari as $akaga){
            Cell::create($akaga);
        }
    }
}
