<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdminUser = \App\Models\User::create([
           'name' => 'master',
           'email' => 'master@master.com',
           'password' => \Illuminate\Support\Facades\Hash::make('secret')
        ]);

        $superAdminUser->assignRole('super_admin');
    }
}
