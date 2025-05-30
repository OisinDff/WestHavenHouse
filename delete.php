<?php
/**
* List all users with a link to edit
*/
try {
require "common.php";
require_once 'src/DBconnect.php';
$sql = "SELECT * FROM users";
$statement = $connection->prepare($sql);
$statement->execute();
$result = $statement->fetchAll();
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
?>
<?php require "layout/header.php"; ?>
<h2>Update users</h2>
<table>
<thead>
<tr>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email Address</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<?php foreach ($result as $row) : ?>
<tr>
<td><?php echo escape($row["id"]); ?></td>
<td><?php echo escape($row["firstname"]); ?></td>
<td><?php echo escape($row["lastname"]); ?></td>
<td><?php echo escape($row["email"]); ?></td>
<td><a href="delete.php?id=<?php echo escape($row["id"]);
?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<a href="index.php">Back to home</a>
<?php require "templates/footer.php"; ?>
