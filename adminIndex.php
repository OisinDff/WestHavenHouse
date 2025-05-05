<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>

<body>
<?php require "layout/header.php"; ?>

<div class="bookingContainer">
    <form method="post">
    <h2>Update</h2>
        
        <button type="button" onclick="window.location.href='update.php'">Update users</button>
        <br><br>
        <button type="button" onclick="window.location.href='read.php'">View users</button>

    </form>
</div>
</body>
<?php require "layout/footer.php"; ?>

