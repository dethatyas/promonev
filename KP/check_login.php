<?php
$username = "your_username";
$password = "your_password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_username = $_POST["username"];
    $entered_password = $_POST["password"];

    if ($entered_username == $username && $entered_password == $password) {
        session_start();
        $_SESSION["loggedin"] = true;
        header("location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
}
