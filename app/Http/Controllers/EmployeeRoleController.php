<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee_role;
use DB;

class EmployeeRoleController extends Controller
{
    //
    public function index()
    {
        try {
            $role=Employee_role::get();
           
        return view('admin.index', ['role' =>  $role]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }



    public function store(Request $request)
    {
      
        $this->validate($request, [
        
            'name' => 'required'
            
        ]);
        try {
            
            DB::transaction(function ()  use($request) {
                $role = new Employee_role;
                $role->role_title=$request->title;
                $role->is_active=$request->active;
                $role->save();
            });
            return redirect('dash');

    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
}
