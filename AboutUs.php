<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>About Us</title>
</head>

<body>
    <?php require "layout/header.php"; ?>

    <div class="about-container">
        <div class="about-box">
            <h2>Welcome to West Haven House</h2>
            <p>Located in the heart of Doolin, Co. Clare, West Haven House offers a serene escape for travelers seeking comfort and relaxation. Our charming B&B provides stunning coastal views, cozy rooms, and top-notch hospitality.</p>
        </div>

        <div class="about-box">
            <h2>Our Commitment</h2>
            <p>At West Haven House, we strive to make your stay as enjoyable as possible. Whether you're exploring the Cliffs of Moher, experiencing local Irish culture, or simply unwinding, we are dedicated to providing an unforgettable experience.</p>
        </div>
    </div>
</body>

<?php
$servername = "localhost";
$username = "root";
$password = "3fr5rmfrpbyJ.";
$dbname = "westhavenhouse";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Successfully Connected to Database<br/><br/>";
}
?>

</html>