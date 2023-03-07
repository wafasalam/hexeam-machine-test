<?php

namespace Database\Seeders;
use App\Models\Employee;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $employee=new Employee;
        $employee->employee_code='100';
        $employee->role_id='1';
        $employee->name='john';
        $employee->dob='28-12-1999';
        $employee->email='john123@gmail.com';
        $employee->mobile_number='9567456123';
        $employee->profile_image='default.jpeg';
        $employee->save();

        $employee=new Employee;
        $employee->employee_code='101';
        $employee->role_id='2';
        $employee->name='david';
        $employee->dob='18-10-1999';
        $employee->email='david123@gmail.com';
        $employee->mobile_number='9400439974';
        $employee->profile_image='default.jpeg';
        $employee->save();

        $employee=new Employee;
        $employee->employee_code='102';
        $employee->role_id='3';
        $employee->name='adam';
        $employee->dob='18-04-1999';
        $employee->email='adam123@gmail.com';
        $employee->mobile_number='9400589974';
        $employee->profile_image='default.jpeg';
        $employee->save();


        $employee=new Employee;
        $employee->employee_code='103';
        $employee->role_id='4';
        $employee->name='sara';
        $employee->dob='21-04-1999';
        $employee->email='sara123@gmail.com';
        $employee->mobile_number='9411589974';
        $employee->profile_image='default.jpeg';
        $employee->save();


        $employee=new Employee;
        $employee->employee_code='104';
        $employee->role_id='5';
        $employee->name='anna';
        $employee->dob='18-05-1999';
        $employee->email='anna123@gmail.com';
        $employee->mobile_number='9600589974';
        $employee->profile_image='default.jpeg';
        $employee->save();
    }
}
