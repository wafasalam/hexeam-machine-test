
<html>
<h1>hai..{{session('username')}}</h1>
<thead><h3><b>Details</b></h3><thead><br>

<tbody>
                   <tr>
                   <td>{{$detail->name}}</td><br>
                   <td>{{$detail->email}}</td><br>
                   <td>{{$detail->dob}}</td><br>
                   
                  <td> {{$detail->mobile_number}}</td><br><br>
                  </tr>
 <td>
                        <a href="{{url('logout')}}" class="btn btnsmall  btn-outline-secondary btn-icon-text">
                          logout
                          <i class="ti-file btn-icon-append"></i>                          
                        </a>
                        </td>             
                       
                           <tbody>

