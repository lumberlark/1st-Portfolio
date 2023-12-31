<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "slark20@gmail.com"; 
  $subject = "New Contact Form Submission";

  // Set headers
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: $name <$email>" . "\r\n";

  // Debugging: Output form data
  echo "Name: $name<br>";
  echo "Email: $email<br>";
  echo "Message: $message<br>";

  // Attempt to send the email
  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Failed to send email. Please try again later.";
  }
}
?>