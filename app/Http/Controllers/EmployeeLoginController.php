<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Auth;
use DB;

class EmployeeLoginController extends Controller
{
    //
    public function index()
    {
        try {
            $employee=Employee::get();
            return view('employee.index',['employee'=>$employee]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
    public function detail()
    {
        try {
            $user_id=session('user_id');
            $detail=Employee::where('id',$user_id)->first();
            return view('employee.view',['detail'=>$detail]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
    // public function view()
    // {
    //     try {
    //         $employee=Employee::get();
    //     return view('employee.index',['employee'=>$employee]);
    // } catch (\Exception $e) {
    //     return $e->getMessage();
    // }
    // }

    public function login(Request $request)
  {
  
  $this->validate($request, [
    'username'=>'required',
    'password'=>'required'
  ]);
    try{
    
    
        $username=$request->input('username');
        $pass=$request->input('password');

        $username_detail=Employee::where('username',$username)->first();
       
      
        if($username_detail)
        { 
          
            $password =$username_detail->password; 
            if($password==$pass)
            {       
                $request->session()->put('user_id',$username_detail->id);
                $request->session()->put('username',$username);
                
            return redirect('detail');
            }
            else{
                $request->session()->flash('error_login','Invalid Password');
                return back();
            }
        }
        else{
          
            $request->session()->flash('error_login','Invalid username/ Password');
            return back();
        }

        
          
         
    }catch(\Exception $e){
            return $e->getMessage();
        }
    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('employee_login');
      }


}
