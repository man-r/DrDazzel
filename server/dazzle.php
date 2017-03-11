<?php
// Check for empty fields
// if(empty($_POST['name'])      ||
//    empty($_POST['email'])     ||
//    empty($_POST['message']) ||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
//   echo "No arguments Provided!";
//   return false;
//    }

$d=mktime(11, 14, 54, 8, 12, 2014);
$todaydate=date("Y-m-d h:i:sa", $d);
$name = $_POST['name'];
$email_address = $_POST['email'];
$location = $_POST['location'];
$carsize = $_POST['carsize'];
$phone = $_POST['phone'];
$plate = $_POST['plate'];
$services = $_POST['services'];


// Create the email and send the message
$to = 'b.5.d@hotmail.com'; // Add your email address inbetween the '' replacing
$email_subject = "Dr.Dazzle Booking" . $todaydate ;
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nlocation:\n$location\n\ncar size:\n$carsize \n\ncar plate:\n$plate\n\nservices:\n$services";
$headers = "From: noreply@DrDazzel.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$email_body,$headers);
echo "sent!";
return true;
?>
