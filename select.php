<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];

    // Vulnerable to SQL Injection
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "User: " . $row['username'] . " - Email: " . $row['email'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    <input type="submit" value="Search">
</form>
