<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laratrust\Models\Permission;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('permissions')->delete();

        $permissions = [
            'list_users_management',

            'list_user',
            'show_user',
            'create_user',
            'edit_user',
            'delete_user',

            'list_role',
            'edit_role',
            'create_role',
            'delete_role',

            'list_observations',
            'show_observations',
            'create_observations',
            'edit_observations',
            'delete_observations',

            'list_repair-steps',
            'show_repair-steps',
            'create_repair-steps',
            'edit_repair-steps',
            'delete_repair-steps',

            'list_inspection-transactions',
            'show_inspection-transactions',
            'create_inspection-transactions',
            'edit_inspection-transactions',
            'delete_inspection-transactions',

            'list_pending-transactions',
            'show_pending-transactions',
            'create_pending-transactions',
            'edit_pending-transactions',
            'delete_pending-transactions',            

            'list_repair-transactions',
            'show_repair-transactions',
            'create_repair-transactions',
            'edit_repair-transactions',
            'delete_repair-transactions'
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'display_name' => ucfirst(str_replace('_', ' ', $permission)),
                'description' => 'Allows a user to ' . str_replace('_', ' ', $permission),
            ]);
        }
    }
}
