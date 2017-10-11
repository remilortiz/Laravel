<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = new Role();
        $role_superadmin->name = 'superadmin';
       
        $role_superadmin->description = 'God Mode';
        $role_superadmin->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        
        $role_admin->description = 'Can READ and WRITE on all modules';
        $role_admin->save();

        $role_iis_section_head = new Role();
        $role_iis_section_head->name = 'iis_section_head';
        
        $role_iis_section_head->description = 'Ewan ko pa';
        $role_iis_section_head->save();

        $role_srs_section_head = new Role();
        $role_srs_section_head->name = 'srs_section_head';
        
        $role_srs_section_head->description = 'Ewan ko pa';
        $role_srs_section_head->save();

        $role_commel_section_head = new Role();
        $role_commel_section_head->name = 'commel_section_head';
       
        $role_commel_section_head->description = 'Ewan ko pa';
        $role_commel_section_head->save();

        $role_employee = new Role();
        $role_employee->name = 'employee';
       
        $role_employee->description = 'Can ONLY VIEW all modules';
        $role_employee->save();
    }
}
