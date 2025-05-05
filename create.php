<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body>
<?php require "layout/header.php"; ?>




<?php
if (isset($_POST['submit'])) {
require "common.php";
try {
require_once 'src/DBconnect.php';
$new_user = array(
"firstname" => escape($_POST['firstname']),
"lastname" => escape($_POST['lastname']),
"email" => escape($_POST['email']),
);
$sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"users",
implode(", ", array_keys($new_user)),
":" . implode(", :", array_keys($new_user))
);
$statement = $connection->prepare($sql);
$statement->execute($new_user);
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
}

if (isset($_POST['submit']) && $statement){
echo $new_user['firstname']. ' successfully added';
}
?>

<div class="bookingContainer">
    <form method="post">
    <h2>Add a user</h2>
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname">
        <label for="email">Email Address</label>
        <input type="text" name="email" id="email">
        <input type="submit" name="submit" value="Submit">
        <br><br>
        <button type="button" onclick="window.location.href='index.php'">Back to home</button>
        <br><br>
        <button type="button" onclick="window.location.href='admin.php'">Admin Login</button>

    </form>
</div>
</body>
<?php require "layout/footer.php"; ?>

