<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Order in which tables will be seeded
         $this->call(PermissionTableSeeder::class);
         $this->call(RoleTableSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(EmployeeTableSeeder::class);
    }
}
