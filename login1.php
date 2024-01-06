<?php
    include ("login1_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login form with JavaScript Validation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="login1.css">
  <!-- <script>
    function index1()
    {
      window.open("http://localhost/Educational%20website/index1.php");  
    }
  </script> -->
</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>Devang Patel Institute of Advance Technology and Research (DEPSTAR) </h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login</h2> 
    <form action="" id="formvalidate" method=post>
      <div class="input-group">
        <label class="palceholder" for="userName">User Name</label>
        <input class="form-control" name="userName" id="userName" type="text" placeholder="" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="userPassword">Password</label>
        <input class="form-control" name="password" id="userPassword" type="password" placeholder="" />
        <span class="lighting"></span>
      </div>
      <!-- <div class="input-group">
        <select class="selectbox" name="role">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Admin">Admin</option>
        </select>
        <span class="lighting"></span> 
      </div> -->
 
      <button type="submit" id="login" name="login">Login</button><br><br>
      <!-- onclick="index1() -->
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
    <a href="signup.php">Don't have an accout? <span class="text-primary">Create One</span></a>
  </div>
</div>

<!-- you don't need that :)  -->
<!-- <div class="direction">
  Type something in input and click submit to see the effect
</div> -->
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script  src="login1.js"></script>

</body>
</html>


<!-- for insert only -->
<!-- <?php
    // if($_POST['role'])
    // {
    //     $userName    = $_POST['userName'];
    //     $password    = $_POST['password'];
    //     $role        = $_POST['role'];
        
    //$sql="INSERT INTO `signup` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
     //INSERT INTO `login` (`srno`, `role`, `username`, `password`, `date`) VALUES (NULL, 'student', 'devang', 'Devang1234', current_timestamp());
    //     $query = "INSERT INTO `login` (`role`, `username`, `password`, `date`) VALUES ('$role', '$userName', '$password', current_timestamp())";
    //     $data = mysqli_query($conn,$query);
    //     if($data)
    //     {
    //         echo "inserted";
    //     }
    //     else
    //     {
    //         echo "fail";
    //     }
    // }
?> -->

<!-- for checking login values from signup -->
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $userName    = $_POST['userName'];
  $password    = $_POST['password'];
  $role        = $_POST['role'];
  $query = "select * from signup where username='".$userName."' and password='".$password."'";
  
  $result=mysqli_query($conn,$query);

  $row=mysqli_fetch_array($result);

  if($row["role"]=="student")
  {
    header("location:index1.php");
  }

  if($row["role"]=="teacher")
  {
    header("location:index_t.php");
  }

  if($row["role"]=="admin")
  {
    header("location:index_a.php");
  }

  else{
    echo "username or password incorrect";
  }

}
?>