<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    public function employee_role(){
        return $this->hasMany('App\Models\Employee_role','id','role_id')->select(['role_title as emp_name','id']);
     }
}
