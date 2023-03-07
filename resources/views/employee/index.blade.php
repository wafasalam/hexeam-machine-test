<html>
<head>
<Link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<form action="{{url('employee_login_post')}}" method="post" enctype="multipart/form-data">{{csrf_field()}}
<body>

  {{-- <div class="imgcontainer">
    <img src="C:\Users\user\Downloads\avatar.jpg" alt="Avatar" class="avatar">
  </div> --}}
<h1><b>EMPLOYEE LOGIN</b></h2>
  <div class="container">

    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
  </div>

  {{-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> --}}
</form>
</body>
</html>
