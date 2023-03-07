
<h1>hai..{{session('username')}}</h1>

<a href="admin/create" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          create  employee
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                       
 <table class="table table-hover" id="value-table">
                      <thead>
                        <tr>
                          <th>Code</th>&nbsp;&nbsp;
                          <th>Role</th>&nbsp;&nbsp;
                          <th>Name</th>&nbsp;&nbsp;
                          <th>DOB</th>&nbsp;&nbsp;
                          <th>Username</th>&nbsp;&nbsp;
                          <th>Password</th>&nbsp;&nbsp;
                          <th>E-mail</th>&nbsp;&nbsp;
                          <th>Mobile</th>&nbsp;&nbsp;
                          <th>Image</th>&nbsp;&nbsp;
                        </tr>
                      </thead>
                      <tbody>
                           
                        @if(count($Employee))
                        @foreach($Employee as $user)
                        <tr>
                          <td>{{$user->employee_code}}</td>
                          @foreach($user->employee_role as $emp)
                           <td>{{$emp->emp_name}}</td>
                           @endforeach                                        
                           <td>{{$user->name}}</td>&nbsp;&nbsp;
                           <td>{{$user->dob}}</td>&nbsp;&nbsp;
                           <td>{{$user->username}}</td>&nbsp;&nbsp;
                           <td>{{$user->password}}</td>&nbsp;&nbsp;
                           <td>{{$user->email}}</td>&nbsp;&nbsp;
                           <td>{{$user->mobile_number}}</td>&nbsp;&nbsp;
                           <td><img src="{{url('employee/'.$user->profile_image)}}" width="150" height="100"></td>
                              <td>
                        <a href="{{url('edit/'.$user->id)}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          edit
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        </td>         
                         <td>
                        <a href="{{url('delete/'.$user->id)}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          delete
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        </td>                    
                          <td> 
                          </td>
                          </tr>
                            @endforeach
                            @endif                                        
                      </tbody>
                    </table>