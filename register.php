<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrithify";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];

    // Hash the user-provided password before storing it in the database
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Perform an INSERT query to add the new user to the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

