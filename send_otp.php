<?php
session_start();

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];

  // Generate the OTP
  $otp = rand(100000, 999999);
  $_SESSION["otp"] = $otp;

  // Send the OTP to the user's email
  $mail = new PHPMailer(true);
  try {
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "youremail@gmail.com";
    $mail->Password = "yourpassword";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom("no-reply@example.com", "No Reply");
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = "OTP for Login";
    $mail->Body = "Your OTP is: $otp";

    $mail->send();

    echo "OTP sent successfully";
  } catch (Exception $e) {
    echo "OTP sending failed: " . $mail->ErrorInfo;
  }
}
?>
