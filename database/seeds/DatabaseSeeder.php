<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;
use Illuminate\Support\Facades\Hash;
use App\Permission;
use App\User;
use App\Patient;
use App\Subcounty;
use App\Station;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(PermissionSeeder::class);
        $this->call(PreliminaryStatusSeeder::class);
        $this->call(FinalStatusSeeder::class);
        $this->call(SampleLocationSeeder::class);

        DB::table('users')->delete();

        // 1) Create Admin Role
        $role = ['name' => 'admin', 'display_name'=>'System Administrator', 'description'=>'Full Permission'];
        $role = Role::create($role);

        // 2) Set Role Permissions
        //    Get all permissions, swift through and attach them to role
        $permission = Permission::get();
        foreach ($permission as $key => $value) {
            $role->attachPermission($value);
        }

        // 3) Create Admin User
        $user = ['first_name' => 'Kipruto', 'last_name' => 'Barno', 'gender' => 'Male', 'dob' => '1987-03-10','email_address' => 'admin@admin.com', 'password' => Hash::make('admin123')];
        $user = User::create($user);

        // 4) Set User Role
        $user->attachRole($role);

        //3. Create Patient
        $patient = ['first_name'=>'Kimberly', 'last_name'=>'Kipruto','gender'=>'Female', 'dob'=>'1997-08-03', 'contact' => '0708344488'];
        $patient = Patient::create($patient);
        $patient->save();

        $subcounty = ['subcounty_name' => 'Tiaty', 'number_of_stations' => 2];
        $subcounty = Subcounty::create($subcounty);
        $subcounty->save();

        $station =['subcounty_id' => 1, 'station_name' => 'Koloa'];
        $station = Station::create($station);
        $station->save();
    }
}
