<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Sedna Agency',
            'email' => 'info@sednaagency.com',
            'password' => Hash::make('sedna@123'),
            'phone' => '010',
            'is_admin' => true
        ];
        \App\User::insert($data);
    }
}
