<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("location: index.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome to the Dashboard</h1>
    <p><a href="logout.php">Logout</a></p>
</body>

</html>