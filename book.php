<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <title>Booking</title>
</head>

<body>
    <?php require "layout/header.php"; ?>

    <div class="bookingContainer">
        <form action="/Booking.php" method="post">
            <h1>Book Your Stay</h1>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="room">Room:</label>
            <select id="room" name="room" required>
                <option value="1">Room 1</option>
                <option value="2">Room 2</option>
                <option value="3">Room 3</option>
                <option value="4">Room 4</option>
                <option value="5">Room 5</option>
            </select>
            <label for="checkin">Check-in:</label>
            <input type="date" id="checkin" name="checkin" required>
            <label for="checkout">Check-out:</label>
            <input type="date" id="checkout" name="checkout" required>
            <input type="submit" value="Book">
        </form>
</div>
</body>
<br><br><br>
<?php require "layout/footer.php"; ?>

</html>