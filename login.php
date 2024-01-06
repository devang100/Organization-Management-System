<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'dbconnect.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    if(($password == $cpassword) && $exits==false){

    }
}
?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--iconscout-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <script src="<https://kit.fontawesome.com/64d58efce2.js>" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css" />
    <title>Sign in & Sign up Form</title>
</head>
<body>
    <!-- ----alert---- -->
    <div class="alert" method="POST">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>SUCCESS..</strong> Your account is created and you can login.
    </div>

    <!-- ----alert end----- -->
    <div class="container">
    <div class="forms-container">
        <div class="signin-signup">
        <form action="index1.php" class="sign-in-form" method="post">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
                <i class="uil uil-user"></i>
            <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
                <i class="uil uil-lock"></i>
            <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" onclick="validate()"/>
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
            <a href="https://www.facebook.com/login/" class="social-icon">
                <i class="uil uil-facebook-f"></i>
            </a>
            <a href="https://twitter.com/i/flow/login" class="social-icon">
                <i class="uil uil-twitter"></i>
            </a>
            <a href="https://accounts.google.com/" class="social-icon">
                <i class="uil uil-google"></i>
            </a>
            <a href="https://www.linkedin.com/login" class="social-icon">
                <i class="uil uil-linkedin-alt"></i>
            </a>
            </div>
        </form>
        <form action="index1.php" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
                <i class="uil uil-user"></i>
            <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
                <i class="uil uil-envelope"></i>
            <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
                <i class="uil uil-lock"></i>
            <input type="password" placeholder="Password" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
            <a href="https://www.facebook.com/login/" class="social-icon">
                <i class="uil uil-facebook-f"></i>
            </a>
            <a href="https://twitter.com/i/flow/login" class="social-icon">
                <i class="uil uil-twitter"></i>
            </a>
            <a href="https://accounts.google.com/" class="social-icon">
                <i class="uil uil-google"></i>
			</a>
            <a href="https://www.linkedin.com/login" class="social-icon">
                <i class="uil uil-linkedin-alt"></i>
            </a>
            </div>
		</form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
        <div class="content">
            <h3>Join Now</h3>
            <p>DEPSTAR.</p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
        </div>
        <img src="login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
        <div class="content">
            <h3>Already Sign up ?</h3>
            <p>Welcome To Depstar</p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
        </div>
        <img src="signup.svg" class="image" alt="" />
        </div>
    </div>
    </div> 

    <script src="login.js"></script>
</body>
</html>