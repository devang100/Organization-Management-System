<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        //echo "Database Connected";
    }
    else
    {
        echo  "Fail";
    }


?>