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

$name = $_POST['name'];
$email_address = $_POST['email'];
$location = $_POST['location'];
$carmake = $_POST['carmake'];
$caryear = $_POST['caryear'];
$carmodel = $_POST['carmodel'];
$carsize = $_POST['carsize'];
$services = $_POST['services'];


// Create the email and send the message
$to = 'man.rs85@gmail.com'; // Add your email address inbetween the '' replacing 
$email_subject = "Dr.Dazzle Booking";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nlocation:\n$location\n\ncar make:\n$carmake\n\ncar year:\n$caryear\n\ncar model:\n$carmodel\n\ncar size:\n$car size\n\nservices:\n$services";
$headers = "From: noreply@DrDazzel.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
mail($to,$email_subject,$email_body,$headers);
echo "sent!";
return true;
?>
