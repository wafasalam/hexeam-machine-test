<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Employee_role;
use Illuminate\Support\Facades\Crypt;
use DB;
use App\Helper\File;
class AdminController extends Controller
{
    use File;
    //
    public function index()
    {
        try {
            $admin=Admin::get();
           
        return view('admin.index', ['admin' =>  $admin]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }

    public function create()
    {
        try {
            $code = $this->file();
            $role=Employee_role::get();
        return view('admin.create', ['role' =>  $role,'code'=>$code]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }



    public function dash()
    {
        try {
            $Employee=Employee::with('employee_role')->get();
        return view('admin.login',['Employee'=>$Employee]);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
    public function login(Request $request)
  {
  
  $this->validate($request, [
    'username'=>'required',
    'password'=>'required'
  ]);
    try{
    
    
        $username=$request->input('username');
        $pass=$request->input('password');

        $admin=Admin::where('username',$username)->first();
       
      
        if($admin)
        { 
          
            $password =$admin->password; 
            if($password==$pass)
            {       
                $request->session()->put('user_id',$admin->id);
                $request->session()->put('username',$username);
            return redirect('dash');
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


    

}
