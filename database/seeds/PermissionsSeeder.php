<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\User;

class permissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_arr = [];
        array_push($permissions_arr, Permission::create(['name' => 'create_users']));
        array_push($permissions_arr, Permission::create(['name' => 'edit_users']));
        array_push($permissions_arr, Permission::create(['name' => 'remove_users']));
        $viewBooksPermission = Permission::create(['name' => 'view_users']);
        array_push($permissions_arr, $viewBooksPermission);
        $superAdminRole = Role::create(['name' => 'admin']);
        $superAdminRole->syncpermissions_arr($permissions_arr);
        $userViewPost = Role::create(['name' => 'view_post']);
        $userViewPost->givePermissionTo($viewBooksPermission);

        $superAdminRole = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        $superAdminRole->assignRole('admin');
        $userViewPost = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => Hash::make('admin'),
        ]);
    }
}