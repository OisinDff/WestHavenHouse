<?php
$servername = "localhost";
$username = "root";
$password = "DataBase2024!";
$dbname = "westhavenhouse";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = '';
$result = null;

if (isset($_GET['query']) && $_GET['query'] !== '') {
    $query = $conn->real_escape_string($_GET['query']);

    $sql = "SELECT RoomType, RoomCapacity FROM rooms WHERE RoomType LIKE '%$query%' OR RoomCapacity LIKE '%$query%'";
    $result = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Search Rooms</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<?php require "layout/header.php"; ?>

    <h1>Search for a Room</h1>

    <form action="" method="GET" class="search-form">
        <input type="text" name="query" placeholder="Enter room type..." value="<?php echo htmlspecialchars($query); ?>" required>
        <button type="submit">Search</button>
    </form>

    <div class="results-container">
        <?php
        if ($result !== null) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='result'>";
                    echo "<h2>" . htmlspecialchars($row["RoomType"]) . "</h2>";
                    echo "<p>" . htmlspecialchars($row["RoomCapacity"]) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No results found for '<strong>" . htmlspecialchars($query) . "</strong>'.</p>";
            }
        }
        ?>
    </div>
</body>
<br><br><br><br>
<?php require "layout/footer.php"; ?>

</html>

<?php
$conn->close();
?>
