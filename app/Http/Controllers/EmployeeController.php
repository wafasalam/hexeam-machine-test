<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Employee_role;
use Intervention\Image\Facades\Image;


use DB;

class EmployeeController extends Controller
{

    

    public function index()
    {
        try {
            $employee=Employee_role::get();
           
        return view('employee.index', ['employee' =>  $employee]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }

    

    public function store(Request $request)
    {
        //  return $request->all(); 
        $this->validate($request, [
        
            'name' => 'required'
            
        ]);
        try {
            if($request->image)
    {
    $file=$request->image;
    $randomId       =   rand(1000,9000);
    $storyimagename = time().$randomId.'.'.$file->getClientOriginalExtension();

    $destinationPath = 'employee';
    $thumb_img = Image::make($file->getRealPath())->resize(20,30);
    $thumb_img->save($destinationPath.'/'.$storyimagename,30);
   
}
else{
    $storyimagename="null"; 
}




            
            DB::transaction(function ()  use($request,$storyimagename) {
                $emp = new Employee;
                $emp->employee_code=$request->code;
                $emp->role_id=$request->title;
                $emp->name=$request->name;
                $emp->dob=$request->dob;
                $emp->email=$request->email;
                $emp->username=$request->uname;
                $emp->password=$request->password;
                $emp->mobile_number=$request->mobno;

                $emp->profile_image=$storyimagename;
                $emp->save();
            });
            return redirect('dash');

    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }


    public function edit(Request $request,$id)
        {
            try {
                $role=Employee_role::get();
            $edit = Employee::find($id);
            return view('admin.edit', ['edit' => $edit,'role' => $role]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        }

        public function update(Request $request)
        {
        //   return $request->all();
            $this->validate($request, [
                'name' => 'required',
                'id' => 'required|numeric',        
               
            ]);
            try {
                if($request->image)
                {
                $file=$request->image;
                $randomId       =   rand(1000,9000);
                $storyimagename = time().$randomId.'.'.$file->getClientOriginalExtension();
            
                $destinationPath = 'employee';
                $thumb_img = Image::make($file->getRealPath())->resize(20,30);
                $thumb_img->save($destinationPath.'/'.$storyimagename,30);
               
            }
            else{
                $storyimagename="null"; 
            }
                DB::transaction(function ()  use($request,$storyimagename) {
                    $update = Employee::find($request->id);
                    $update->employee_code=$request->code;
                    $update->role_id=$request->title;
                    $update->name=$request->name;
                    $update->dob=$request->dob;
                    $update->email=$request->email;
                    $update->username=$request->uname;
                    $update->password=$request->password;
                    $update->mobile_number=$request->mobno;
                    if($storyimagename!='null')
                    $update->profile_image=$storyimagename;
                    $update->save();
                });
                return redirect('dash'); 
            
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        }


        public function delete(Request $request,$id)
        {
            try {
                
            $delete = Employee::find($id);
            $delete->delete();
            return redirect('dash');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        }


}
