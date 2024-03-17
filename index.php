<?php
session_start();

// Set your password here
$correct_password = "your_password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    if ($password == $correct_password) {
        $_SESSION["authenticated"] = true;
        header("Location: index.html");
        exit;
    } else {
        echo "Incorrect password. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Protect</title>
</head>
<body>
    <form method="post" action="">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
