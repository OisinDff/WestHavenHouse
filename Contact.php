<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
</head>

<body>
    <?php require "layout/header.php"; ?>

    <div class="contact-container">
        <div class="contact-box">
            <h2>Contact Us</h2>
            <p>If you have any questions, feel free to reach out to us.</p>

            <div class="contact-details">
                <p><i class="fa fa-map-marker"></i> West Haven House, Doolin, Co. Clare </p>
                <p><i class="fa fa-phone"></i> +353 (085) 748 4449</p>
                <p><i class="fa fa-envelope"></i> reception@westhavenhouse.com</p>
            </div>
        </div>

        <div class="form-box">
            <form action="contact_form_handler.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
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
