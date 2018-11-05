<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $permission = [
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-list',
                'display_name' => 'Display Roles',
                'description' => 'Display All Roles'
            ],
            [
                'name' => 'role-update',
                'display_name' => 'Update Role',
                'description' => 'Update Role Information'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete a Role'
            ],
            [
                'name' => 'user-create',
                'display_name' => 'Create User',
                'description' => 'Create New User'
            ],
            [
                'name' => 'user-list',
                'display_name' => 'Display Users',
                'description' => 'Display All Users'
            ],
            [
                'name' => 'user-update',
                'display_name' => 'Update User',
                'description' => 'Update User Information'
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'Delete User',
                'description' => 'Delete User Information'
            ],
            [
                'name' => 'patient-create',
                'display_name' => 'Create Patient',
                'description' => 'Create A Patient'
            ],
            [
                'name' => 'patient-list',
                'display_name' => 'Display Patients',
                'description' => 'Display Patient Information'
            ],
            [
                'name' => 'patient-update',
                'display_name' => 'Update Patient',
                'description' => 'Update A Patient'
            ],
            [
                'name' => 'patient-delete',
                'display_name' => 'Delete Patient',
                'description' => 'Delete Patient Information'
            ],
            [
                'name' => 'subcounty-create',
                'display_name' => 'Create Subcounty',
                'description' => 'Create A Subcounty'
            ],
            [
                'name' => 'subcounty-list',
                'display_name' => 'Display Subcounty',
                'description' => 'Display Subcounty Information'
            ],
            [
                'name' => 'subcounty-update',
                'display_name' => 'Update Subcounty',
                'description' => 'Update Subcounty Information'
            ],
            [
                'name' => 'subcounty-delete',
                'display_name' => 'Delete Subcounty',
                'description' => 'Delete Subcounty Information'
            ],
            [
                'name' => 'station-create',
                'display_name' => 'Create Station',
                'description' => 'Create A Station'
            ],
            [
                'name' => 'station-list',
                'display_name' => 'Display Station',
                'description' => 'Display Station Information'
            ],
            [
                'name' => 'station-update',
                'display_name' => 'Update Station',
                'description' => 'Update Station Information'
            ],
            [
                'name' => 'station-delete',
                'display_name' => 'Delete Station',
                'description' => 'Delete Station Information'
            ],
        ];
        foreach ($permission as $key =>$value) {
            Permission::create($value);
        }
    }
}
