<!DOCTYPE html>
<head>
<body>
<form action="{{url('update')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
<fieldset>
<input type="hidden" name="id"value="{{$edit->id}}">
<label>Code:</label>
<input type="text" name="code"  value="{{$edit->employee_code}}" readonly="true"><br>

<label>role:</label>
<select name="title">
{{-- <option>choose</option> --}}

 @foreach($role as $rol)
 @if($edit->role_id==$rol->id)
 <option value="{{$rol->id}}" selected>{{$rol->role_title}}</option>
 @endif
<option value="{{$rol->id}}">{{$rol->role_title}}</option>
 @endforeach

</select>

<label>Name:</label>
<input type="text" name="name" value="{{$edit->name}}"><br>

<label>DOB:</label>
<input type="text" name="dob"value="{{$edit->dob}}"><br>

<label>Email:</label>
<input type="text" name="email"value="{{$edit->email}}"><br>

<label>Mobile number:</label>
<input type="text" name="mobno"value="{{$edit->mobile_number}}"><br>

<label>Username:</label>
<input type="text" name="uname"value="{{$edit->username}}"><br>

<label>Password:</label>
<input type="text" name="password"value="{{$edit->password}}"><br>

<div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Image:</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="image"value="{{$edit->profile_image}}">
               
                          </div>
                        </div>
                        </div><br><br>
<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SUBMIT</button>
</fieldset>
</form>
</head>
</body>
</html>
