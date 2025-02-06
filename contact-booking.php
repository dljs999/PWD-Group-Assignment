<?php

//variables
$name = $_GET['fullname'] ?? "Not Provided";
$tel = $_GET['phone'] ?? "Not Provided";
$email = $_GET['email'] ?? "Not Provided";
$message = $_GET['inquiry'] ?? " Not Provided";
//if value not given, return "Not Provided"
echo "Thank you for your inquiry, we will get back to you shortly!";

?>

<!--results page-->
<!DOCTYPE html>
<html>

<head>
    <title>
        Booking Confirmation
    </title>
</head>

<body>
    <h2>Summary of Booking</h2>
    <!--display information back to user-->
    <p><?php echo "Name:" . $name; ?></p>
    <p><?php echo "Phone Number:" . $tel; ?></p>
    <p><?php echo "Email:" . $email; ?></p>
    <p><?php echo "Message Submitted:" . $message; ?></p>
</body>

</html>