<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];

    // Vulnerable to SQL Injection
    $query = "DELETE FROM users WHERE username = '$username'";
    if ($mysqli->query($query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    <input type="submit" value="Delete">
</form>
