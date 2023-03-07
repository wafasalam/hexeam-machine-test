<?php

namespace Database\Seeders;
use App\Models\Employee_role;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role=new Employee_role;
        $role->role_title='executive';
        $role->is_active='yes';
        $role->save();

        $role=new Employee_role;
        $role->role_title='manager';
        $role->is_active='yes';
        $role->save();

        $role=new Employee_role;
        $role->role_title='supervisor';
        $role->is_active='yes';
        $role->save();

        $role=new Employee_role;
        $role->role_title='non-supervisor';
        $role->is_active='yes';
        $role->save();

        $role=new Employee_role;
        $role->role_title='director';
        $role->is_active='yes';
        $role->save();
    }
}
