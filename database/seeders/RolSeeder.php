<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer_role = Role::create(['name' => 'customer']);
        $adviser_role = Role::create(['name' => 'adviser']);
        $administrator_role = Role::create(['name' => 'administrator']);

        $permission = Permission::create(['name' => 'recharges.index'])
            ->syncRoles([$administrator_role, $adviser_role]);
        $permission = Permission::create(['name' => 'recharges.create'])
            ->syncRoles([$administrator_role, $adviser_role]);
        $permission = Permission::create(['name' => 'recharges.edit'])
            ->syncRoles([$administrator_role, $adviser_role]);
        $permission = Permission::create(['name' => 'recharges.destroy'])
            ->syncRoles([$administrator_role, $adviser_role]);

        $permission = Permission::create(['name' => 'deposits.index'])
            ->syncRoles([$administrator_role, $adviser_role]);
        $permission = Permission::create(['name' => 'deposits.create'])
            ->syncRoles([$administrator_role, $adviser_role]);
        $permission = Permission::create(['name' => 'deposits.edit'])
            ->syncRoles([$administrator_role, $adviser_role]);
        $permission = Permission::create(['name' => 'deposits.destroy'])
            ->syncRoles([$administrator_role, $adviser_role]);

        $permission = Permission::create(['name' => 'history.index'])
            ->syncRoles([$administrator_role, $adviser_role, $customer_role]);
        $permission = Permission::create(['name' => 'history.create'])
            ->syncRoles([$administrator_role, $adviser_role]);
        $permission = Permission::create(['name' => 'history.edit'])
            ->syncRoles([$administrator_role, $adviser_role]);
        $permission = Permission::create(['name' => 'history.destroy'])
            ->syncRoles([$administrator_role, $adviser_role]);
    }
}
