<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roles =
        [
            ['id'=>'1', 'name' =>'Admin'],
            ['id'=>'2', 'name' =>'Owner'],
            ['id'=>'3', 'name' =>'User'],
        ];

        foreach($roles as $role)
        {
            Role::create($role);
        }
    }
}
