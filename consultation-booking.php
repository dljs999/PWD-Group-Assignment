<?php

//variables
$name = ($_GET['name']) ?? "Not Provided";
$tel = $_GET['tel'] ?? "Not Provided";
$email = $_GET['email'] ?? "Not Provided";
$date = $_GET['date'] ?? "Not Provided";
$service = $_GET['service'] ?? "Not Provided";
//if value not given, return "Not Provided"

$price = 0;

//selected service statement
if ($service == "default") {
    echo "Service not selected.";
    exit; //stops statement
} else if ($service == "thread") {
    $price = 40;
} else if ($service == "wax") {
    $price = 70;
} else if ($service == "deep-clean") {
    $price = 150;
} else if ($service == "hydrate") {
    $price = 180;
} else if ($service == "anti-age") {
    $price = 220;
} else if ($service == "brightening") {
    $price = 200;
} else if ($service == "acne") {
    $price = 170;
} else if ($service == "basic-glam") {
    $price = 150;
} else if ($service == "full-glam") {
    $price = 250;
} else if ($service == "luxury-glam") {
    $price = 350;
} else if ($service == "bridal-day") {
    $price = 600;
} else if ($service == "bridal-eve") {
    $price = 800;
} else if ($service == "bridal-and-hair") {
    $price = 1200;
} else if ($service == "bridal-trial") {
    $price = 250;
} else if ($service == "elegant") {
    $price = 180;
} else if ($service == "soft") {
    $price = 150;
} else if ($service == "sleek") {
    $price = 120;
} else if ($service == "loose") {
    $price = 140;
} else if ($service == "braid") {
    $price = 160;
} else if ($service == "hand") {
    $price = 65;
} else if ($service == "foot") {
    $price = 75;
} else if ($service == "bridal") {
    $price = 350;
} else if ($service == "custom") {
    $price = 100;
} else if ($service == "trad") {
    $price = 150;
} else if ($service == "modern") {
    $price = 180;
} else if ($service == "cape") {
    $price = 250;
} else if ($service == "party") {
    $price = 200;
} else {
    echo "Invalid service selection.";
    exit;
}

/*total price = price of service*/
$total = $price;

echo "Thank you for your booking. See you there!";

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
    <p><?php echo "Date of Appointment:" . $date; ?></p>
    <p><?php echo "You have selected:" . $service; ?></p>
    <p><?php echo "Total Price:" . $total; ?></p>
</body>

</html>