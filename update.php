<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $new_email = $_POST['new_email'];

    // Vulnerable to SQL Injection
    $query = "UPDATE users SET email = '$new_email' WHERE username = '$username'";
    if ($mysqli->query($query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}
?>

<form method="POST">
    Username: <input type="text" name="username"><br>
    New Email: <input type="text" name="new_email"><br>
    <input type="submit" value="Update">
</form>
