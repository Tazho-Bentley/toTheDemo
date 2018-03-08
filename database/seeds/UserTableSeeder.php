<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
        	[
        		'name' => 'ZYNLE GROUP',
        		'email' => 'Display Role Listing',
                'phone' => '',
                'address' => '',
        		'company_type' => 'Admin',
                'contact_person' => '',
                'account_type' => 'Admin',
        		'employee_count' => '',
                'pay_schedule' => '',
                'company_id' => '',
                'password' => 'password',
                
        	],
        ];

        foreach ($user as $key => $value) {
            $value['password'] = Hash::make($value['password']);
            User::create($value);
        }
    }
}
