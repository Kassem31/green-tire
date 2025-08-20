<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // 0 for admin and clinic , 1 for admin only , 2 for clinic only
        Menu::truncate();

        $order = 2;
        // User Management

        $users = Menu::create([
            'name'       => 'Users Management',
            'translation_key' => 'user_management',
            'order'      => $order++,
            'permission' => 'list_users_management',
            'svg'        => 'svg/users.svg', // Users management icon
            // 'panel_type' => '1',
        ]);

        $subOrder = 1;
        Menu::create([
            'name'       => 'Users',
            'translation_key' => 'users',
            'route'      => 'users.index',
            'parent_id'  => $users->id,
            'order'      => $subOrder++,
            'permission' => 'list_user',
            // 'panel_type' => '1',
        ]);

        Menu::create([
            'name'       => 'Roles',
            'translation_key' => 'roles',
            'route'      => 'roles.index',
            'parent_id'  => $users->id,
            'order'      => $subOrder++,
            'permission' => 'list_role',
            // 'panel_type' => '1',
        ]);

        // observations Management
        $observations = Menu::create([
            'name'       => 'Observations',
            'translation_key' => 'observations',
            'order'      => $order++,
            'permission' => 'list_observations',
            // 'panel_type' => '1',
            'svg'        => 'svg/observation.svg', // Observation/inspection icon
            'route'      => 'observations.index',
        ]);
        $subOrder = 1;
        Menu::create([
            'name'       => 'All Observations',
            'translation_key' => 'observations',
            'route'      => 'observations.index',
            'parent_id'  => $observations->id,
            'order'      => $subOrder++,
            'permission' => 'list_observations',
            // 'panel_type' => '1',
        ]);




        $repair_steps = Menu::create([
            'name'       => 'Repair Steps',
            'translation_key' => 'repair_steps',
            'order'      => $order++,
            'permission' => 'list_repair-steps',
            // 'panel_type' => '1',
            'svg'        => 'svg/repair.svg', // Repair/tools icon
            'route'      => 'repair-steps.index',
        ]);
        $subOrder = 1;
        Menu::create([
            'name'       => 'All Repair Steps',
            'translation_key' => 'repair_steps',
            'route'      => 'repair-steps.index',
            'parent_id'  => $repair_steps->id,
            'order'      => $subOrder++,
            'permission' => 'list_repair-steps',
            // 'panel_type' => '1',
        ]);

        $inspection_transactions = Menu::create([
            'name'       => 'Inspection Transactions',
            'translation_key' => 'inspection_transactions',
            'order'      => $order++,
            'permission' => 'list_inspection-transactions',
            'svg'        => 'svg/transaction.svg', // Transaction/clipboard icon
            // 'panel_type' => '1',
        ]);
        $subOrder = 1;
        Menu::create([
            'name'       => 'All Transactions',
            'translation_key' => 'inspection_transactions',
            'route'      => 'inspection-transactions.index',
            'parent_id'  => $inspection_transactions->id,
            'order'      => $subOrder++,
            'permission' => 'list_inspection-transactions',
            // 'panel_type' => '1',
        ]);

        Menu::create([
            'name'       => 'Pending Transactions',
            'translation_key' => 'pending_transactions',
            'route'      => 'repair-transactions.pending',
            'parent_id'  => $inspection_transactions->id,
            'order'      => $subOrder++,
            'permission' => 'list_pending-transactions',
            // 'panel_type' => '1',
        ]);
    }
}
