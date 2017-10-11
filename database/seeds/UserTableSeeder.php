<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = Role::where('name', 'superadmin')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_iis_section_head = Role::where('name', 'iis_section_head')->first();
        $role_srs_section_head = Role::where('name', 'srs_section_head')->first();
        $role_commel_section_head = Role::where('name', 'commel_section_head')->first();
        $role_employee = Role::where('name', 'employee')->first();

        $superadmin = new User();
        $superadmin->name = 'Superadmin Remil';
        $superadmin->email = 'superadmin@bfp.com';
        $superadmin->password = bcrypt('123456');
        $superadmin->save();
        $superadmin->roles()->attach($role_superadmin);

        $admin = new User();
        $admin->name = 'Admin Faye';
        $admin->email = 'admin@bfp.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $iis_section_head = new User();
        $iis_section_head->name = 'IIS Sean';
        $iis_section_head->email = 'iis@bfp.com';
        $iis_section_head->password = bcrypt('123456');
        $iis_section_head->save();
        $iis_section_head->roles()->attach($role_iis_section_head);

        $srs_section_head = new User();
        $srs_section_head->name = 'SRS Jams';
        $srs_section_head->email = 'srs@bfp.com';
        $srs_section_head->password = bcrypt('123456');
        $srs_section_head->save();
        $srs_section_head->roles()->attach($role_srs_section_head);

        $commel_section_head = new User();
        $commel_section_head->name = 'COMMEL Jessa';
        $commel_section_head->email = 'commel@bfp.com';
        $commel_section_head->password = bcrypt('123456');
        $commel_section_head->save();
        $commel_section_head->roles()->attach($role_commel_section_head);

        $employee = new User();
        $employee->name = 'Employee Princess';
        $employee->email = 'employee@bfp.com';
        $employee->password = bcrypt('123456');
        $employee->save();
        $employee->roles()->attach($role_employee);


    }
}
