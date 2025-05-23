<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Book Your Stay</title>
</head>

<body>
    <?php require "layout/header.php"; ?>

    <?php require "functions/functions.php"; ?>

    <div class="flexContainer">
        <?php
        $rooms = getRooms();
        displayRooms($rooms);
        ?>
    </div>
</body>
<?php require "layout/footer.php"; ?>


</html>