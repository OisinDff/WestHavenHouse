<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
</head>

<body>
<?php

if (isset($_POST['submit'])) {
try {
require "common.php";
require_once 'src/DBconnect.php';
$sql = "SELECT *
FROM users
WHERE location = :location";
$location = $_POST['location'];
$statement = $connection->prepare($sql);
$statement->bindParam(':location', $location, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetchAll();
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
}
require "layout/header.php";
if (isset($_POST['submit'])) {
if ($result && $statement->rowCount() > 0) {
?>
<h2>Results</h2>
<table>
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email Address</th>
<td><a href="update-single.php?id=<?php echo escape($row["id"]);
?>">Edit</a></td>
</tr>
</thead>
<tbody>
<?php foreach ($result as $row) { ?>
<tr>
<td><?php echo escape($row["id"]); ?></td>
<td><?php echo escape($row["firstname"]); ?></td>
<td><?php echo escape($row["lastname"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>

</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
> No results found for <?php echo escape($_POST['location']); ?>.
<?php }
} ?>
<a href="index.php">Back to home</a>
