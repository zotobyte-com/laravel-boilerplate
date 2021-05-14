<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['super_admin','admin'];

        foreach ($roles as $role) {
            $r = \Spatie\Permission\Models\Role::create(['name' => $role]);
        }
    }
}
