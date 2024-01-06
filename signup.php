<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $showAlert = false;
    include 'login1_connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $userPassword = $_POST["userPassword"];
    // $exists=false;
    if($password == $userPassword)
    {
        $sql="INSERT INTO `signup` (`username`, `password`, `role`, `date`) VALUES ('$username', '$password', '$role', current_timestamp())";
        $result= mysqli_query($conn,$sql);
        if($result){
            $showAlert = "true";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login form with JavaScript Validation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="login1.css">
<script>
    function login()
    {
      window.open("http://localhost/Educational%20website/login1.php");  
    }
  </script>

</head>
<body>

<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>Devang Patel Institute of Advance Technology and Research (DEPSTAR) </h1> 
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Signup</h2>
    <form action="" id="formvalidate" method="post">
      <div class="input-group">
        <label class="palceholder" for="username">User Name</label>
        <input class="form-control" name="username" id="username" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="password">Password</label>
        <input class="form-control" name="password" id="password" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword">Confirm Password</label>
        <input class="form-control" name="userPassword" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <!-- <label class="palceholder" for="role">Role</label> -->
        <select class="selectbox" name="role">
                    <!-- <option value=""></option> -->
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Admin">Admin</option>
        </select>
        <span class="lighting"></span> 
      </div>

      <button type="submit" id="login" onclick="login()">Signup</button>
      <br><br>
      <button type="reset" id="reset" name="reset">Reset</button>
      <div class="clearfix supporter">
        <div class="pull-left remember-me">
          <input id="rememberMe" type="checkbox">
          <label for="rememberMe">Remember Me</label>
        </div>
        <a class="forgot pull-right" href="#">Forgot Password?</a>
      </div>
    </form>
  </div>
  <div class="signup-wrapper text-center">
    <a href="login1.php">You have an accout? <span class="text-primary">Login</span></a>
  </div>
</div>

<!-- you don't need that :)  -->
<!-- <div class="direction">
  Type something in input and click submit to see the effect
</div> -->
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="login1.js"></script>

</body>
</html>
