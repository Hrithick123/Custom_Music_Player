<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrithify";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the song ID from the query parameter
if (isset($_GET['id'])) {
    $song_id = $_GET['id'];

    // Fetch the file_path for the selected song
    $sql = "SELECT file_path FROM songs WHERE id = $song_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $file_path = $row['file_path'];

        // Set the appropriate headers for audio playback
        header('Content-Type: audio/mpeg');
        header('Content-Length: ' . filesize($file_path));

        // Output the audio file content
        readfile($file_path);
    }
}

$conn->close();
?>
