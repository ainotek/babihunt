<?php

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('role_permissions')->truncate();
        DB::table('permissions')->truncate();
        $superAdmin = "SUPERADMIN";
        $safeMethods = [
            'Index',
            'Store',
            'Show',
            'Update',
            'Delete',
            'resetPassword'
        ];
        $permission_ids = []; // an empty array of stored permission IDs
// iterate though all routes
        foreach (Route::getRoutes()->getRoutes() as $route) {
            // get route action
            $action = $route->getActionname();
// separating controller and method
            $_action = explode('@', $action);

            $controller = $_action[0];
            $method = end($_action);
            foreach ($safeMethods as $safeMethod) {
                if (strpos(strtolower($method), strtolower($safeMethod))) {//Permission is in safe area
                    // check if this permission is already exists
                    $permission_check = Permission::where(
                        ['controller' => $controller, 'method' => $method]
                    )->first();
                    if (!$permission_check) {
                        $model = ucfirst(str_replace($safeMethod, '', $method));

                        $permission = new Permission();
                        $permission->controller = $controller;
                        $permission->method = ucfirst($safeMethod);
                        $permission->description = $model.' '.$safeMethod;
                        $permission->model = $model;
                        $permission->name = ucfirst($method);
                        $permission->save();
                        // add stored permission id in array
                        $permission_ids[] = $permission->id;
                    }
                }
                continue;
            }
        }
// find admin role.
        $admin_role = Role::where('name', $superAdmin)->first();
        if (empty($admin_role)){
            Role::create(['name' => $superAdmin, 'description'=> $superAdmin])->save();
            $admin_role = Role::where('name', $superAdmin)->first();
        }
// atache all permissions to admin role
        $admin_role->permissions()->attach($permission_ids);
    }

}
