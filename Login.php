<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <title>Login</title>
</head>

<body>
<?php require "layout/header.php"; ?>
<div class="bookingContainer">   
</body>

</html>
<?php
if (isset($_POST['submit'])) {
require "common.php";
try {
require_once 'src/DBconnect.php';
$new_user = array(
"Loginas" => escape($_POST['Login as']),
"Name" => escape($_POST['Name']),
"PhoneNumber" => escape($_POST['Phone Number']),
"Email" => escape($_POST['Email']),
);
$sql = sprintf(
"INSERT INTO %s (%s) values (%s)",
"profile",
implode(", ", array_keys($new_profile)),
":" . implode(", :", array_keys($new_profile))
);
$statement = $connection->prepare($sql);
$statement->execute($new_pprofile);
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
}

if (isset($_POST['submit']) && $statement){
echo $new_user['Name']. ' successfully added';
}
?>
<form action="/index.php" method="post">
    
    <h2>Login Form</h2>
        <label for="role">Login as:</label>
        <select name="role" id="role">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select><br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="checkbox" id="guest" name="guest">
        <label for="guest">Continue as Guest</label><br><br>
        
        <input type="submit" name="submit" value="Submit">
        </form>

    
<?php
$servername = "localhost";
$username = "root";
$password = "DataBase2024!";
$dbname = "westhavenhouse";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Successfully Connected to Database<br/><br/>";
}
?>