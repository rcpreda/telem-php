<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // User permissions
            'view-users',
            'create-users',
            'edit-users',
            'delete-users',

            // Role permissions
            'view-roles',
            'create-roles',
            'edit-roles',
            'delete-roles',

            // Permission permissions
            'view-permissions',
            'create-permissions',
            'edit-permissions',
            'delete-permissions',

            // Settings permissions
            'manage-settings',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission],
                ['guard_name' => 'web']
            );
        }

        // Get super-admin role
        $superAdminRole = Role::where('name', 'super-admin')->first();

        if ($superAdminRole) {
            // Assign all permissions to super-admin
            $superAdminRole->givePermissionTo(Permission::all());
        }

        $this->command->info('Permissions created and assigned to super-admin role successfully!');
    }
}
