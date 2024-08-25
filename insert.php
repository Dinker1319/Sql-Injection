<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Vulnerable to SQL Injection
    $query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
    if ($mysqli->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    Password: <input type="text" name="password"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Register">
</form>
