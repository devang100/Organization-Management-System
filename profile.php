<?php
    include ("profile_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Montsrerrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Admission form</title>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Montserrat', sans-serif;
    background-image: url("1.jpg");
    background-size : cover;
    background-position : center;
    background-repeat : no-repeat;
    background-attachment: fixed;
    /* background-color: #7380ec; */
    /* padding: 0 10px; */
}

.container{
    /* border: 2px solid black; */
    max-width: 800px;
    width: 800px;
    height:658px;
    background-color: white;
    margin: 130px auto;
    padding: 30px;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
}

.container .title{
    font-size: 50px;
    font-weight: 700;
    margin-bottom: 35px;
    color: #00008B;
    text-transform: uppercase;
    text-align: center;
}

.container .form .input_field{
    margin-bottom : 25px;
    display : flex;
    align-items : center;
}

.container .form .input_field label{
    width : 500px;
    margin-right : 10px;
    font-size : 30px;
}

.container .form .input_field .input,
.container .form .input_field .textarea{
    width : 100%;
    outline : none;
    border : 1px solid #7380ec;
    font-size : 25px;
    padding : 8px 10px;
    border-radius : 3px;
    transition : all 0.5 ease;
}

.container .form .input_field .textarea{
    resize : none;
    height : 70px;
    font-size : 25px;
}

.container .form .input_field .selectbox{
    position : relative;
    width : 100%;
    height : 40px;
    border : 1px solid #7380ec;
    -webkit-appearance : none;
    appearance : none;
    font-size : 25px;
    border-radius : 3px;
    outline : none;
}

.container .form .input_field .selectbox:before{
    content : "";
    position : absolute;
    top : 0;
    right : 0;
    border : 8px solid black;
}

.container .form .input_field .input:focus,
.container .form .input_field .textarea:focus
.container .form .input_field .selectbox:focus{
    border : 1px solid black;
}

/* .container .form .input_field p{
    font-size : 14px;
    color : black;
    left : 50px;
} */

/* .container .form .input_field .check{
    width  : 15px;
    height : 15px;
    position : relative;
    display : block;
    cursor : pointer;
}

.container .form .input_field .check input[type="checkbox"]
{
    position : absolute;
    top : 0;
    left : 0;

} */

.container .form .input_field .btn{
    width : 100%;
    padding : 8px 10px;
    font-size : 25px;
    border : 0;
    background : #00008B;
    color : white;
    cursor: pointer;
    border-radius : 3px;
    outline : none;
}

.container .form .input_field:last-child{
    margin-bottom : 0;
}

.container .form .input_field .btn:hover{
    background : #296d98;
}

</style>

</head>
<body>
    <div class="container">
        <form action="#" method="post"> 
        <div class="title">Registration Form</div>

        <div class="form">
            <div class="input_field">
                <label>First Name</label>
                <input type="text" class="input" name="fname" required>
            </div>

            <div class="input_field">
                <label>Last Name</label>
                <input type="text" class="input" name="lname" required>
            </div>

            <div class="input_field">
                <label>Phone Number</label>
                <input type="text" class="input" name="pnumber" required>
            </div>

            <div class="input_field">
                <label>Gender</label>
                <select class="selectbox" name="gender" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            
            <div class="input_field">
                <label>Email Address</label>
                <input type="text" class="input" name="email" required>
            </div>

            <div class="input_field">
                <label>Address</label>
                <textarea class="textarea" name="address" required></textarea>
            </div>

            <!-- <div class="input_field terms">
                <label class="Check">
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
                <p>Agree to terms and conditions</p>
            </div> -->

            <div class="input_field">
                <input type="submit" value="Register" class="btn" name="register">
            </div>
        </div>
        </form>
    </div>
</body>
</html>

<?php
    if($_POST['register'])
    {
        $fname    = $_POST['fname'];
        $lname    = $_POST['lname'];
        $pnumber  = $_POST['pnumber'];  
        $gender   = $_POST['gender'];
        $email    = $_POST['email'];
        $address  = $_POST['address'];
        
        $query = "INSERT INTO admission_form VALUES('$fname','$lname','$pnumber','$gender','$email','$address')";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "inserted";
        }
        else
        {
            echo "fail";
        }
    }
?>