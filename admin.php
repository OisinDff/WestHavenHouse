<?php
session_start();

$nameError = "";
$passwordError = "";
$loginMessage = "";

// Hardcoded admin credentials
$adminUsername = "admin";
$adminPassword = "password123";

if (isset($_POST['submit'])) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    $isValid = true;

    if (empty($username)) {
        $nameError = "Username is required.";
        $isValid = false;
    }

    if (empty($password)) {
        $passwordError = "Password is required.";
        $isValid = false;
    }

    if ($isValid) {
        if ($username === $adminUsername && $password === $adminPassword) {
            $_SESSION['admin_logged_in'] = true;
            header("Location: adminIndex.php");
            exit; // Always call exit after a header redirect
        } else {
            $loginMessage = "Invalid username or password.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Login</title>
</head>

<body>
<?php require "layout/header.php"; ?>

<div class="bookingContainer">
    <form method="post">
        <h2>Login as Admin</h2>
        <br>
        <?php if (!empty($loginMessage)): ?>
            <p><?php echo htmlspecialchars($loginMessage); ?></p>
        <?php endif; ?>

        <p>
            <label for="username">Username:</label><br>
            <input type="text" name="username" placeholder="Enter Username" />
            <span style="color:red;"><?php echo $nameError; ?></span>
        </p>

        <p>
            <label for="password">Password:</label><br>
            <input type="password" name="password" placeholder="Enter Password" />
            <span style="color:red;"><?php echo $passwordError; ?></span>
        </p>

        <button type="submit" name="submit">Login</button>
    </form>
</div>

<?php require "layout/footer.php"; ?>
</body>
</html>
