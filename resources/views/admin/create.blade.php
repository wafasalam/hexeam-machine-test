<!DOCTYPE html>
<head>
<body>
<form action="{{url('employee/store')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
<fieldset>

<label>Code:</label>
<input type="text" name="code"  value="{{$code}}" readonly="true"><br>

<label>role:</label>
<select name="title">
<option>choose</option>

 @foreach($role as $rol)
<option value="{{$rol->id}}">{{$rol->role_title}}</option>
 @endforeach

</select>

<label>Name:</label>
<input type="text" name="name"><br>

<label>DOB:</label>
<input type="text" name="dob"><br>

<label>Email:</label>
<input type="text" name="email"><br>

<label>Mobile number:</label>
<input type="text" name="mobno"><br>

<label>Username:</label>
<input type="text" name="uname"><br>

<label>Password:</label>
<input type="text" name="password"><br>

<div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Image:</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" id="image" name="image">
               
                          </div>
                        </div>
                        </div><br><br>
<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SUBMIT</button>
</fieldset>
</form>
</head>
</body>
</html>
