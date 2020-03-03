<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role= new Role();
        $role->rol= "Admin";
        $role->save();

        $role2= new Role();
        $role2->rol= "Secretario";
        $role2->save();
    }
}
