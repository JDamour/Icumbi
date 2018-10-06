<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
         $this->call(CountiesTableSeeder::class);
         $this->call(ProvincesTableSeeder::class);
         $this->call(DistrictsTableSeeder::class);
         $this->call(SectorsTableSeeder::class);
         $this->call(CellsTableSeeder::class);
         $this->call(FrequencySeederTable::class);
    }
}
