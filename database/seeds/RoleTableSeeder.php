<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = [
        	[
        		'name' => 'Super_User',
        		'display_name' => 'Super User - Root',
        		'description' => 'Careful with this one'
        	],
        	[
        		'name' => 'Admin',
        		'display_name' => 'Administrator',
        		'description' => 'System Administrator'
        	],
        	[
        		'name' => 'User',
        		'display_name' => 'User',
        		'description' => 'Ordinary System User'
        	],
        	[
        		'name' => 'Guest',
        		'display_name' => 'Guest',
        		'description' => 'System Guest'
        	]
        ];

        foreach ($role as $key => $value) {
        	Role::create($value);
        }
    }
}
