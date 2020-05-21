<?php

use App\Models\Role;
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
        $roles = ['ADMIN', 'SUPERVISOR', 'SUPERADMIN'];
        foreach ($roles as $role){
            factory(Role::class)->make(['name' => $role]);
        }
    }
}
