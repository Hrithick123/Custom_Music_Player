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

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash the user-provided password for comparison with the stored hash
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Perform a SELECT query to retrieve user data based on the provided username
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables or redirect to a welcome page
            $_SESSION['username'] = $row['username'];
            header("Location: home.php"); // Redirect to a welcome page
        } else {
            // Password is incorrect, display an error message
            echo "Incorrect password.";
        }
    } else {
        // No user with the provided username exists, display an error message
        echo "User not found.";
    }
}

$conn->close();
?>
