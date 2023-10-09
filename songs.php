<link href="https://cdn.jsdelivr.net/npm/gotham-fonts@1.0.3/css/gotham-rounded.min.css" rel="stylesheet">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrithify";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and display songs
$sql = "SELECT id, title, artist, file_path, image_path FROM songs";
$result = $conn->query($sql);

$songs = []; // Create an array to hold song data

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Store song data in an array
        $song = [
            'image_path' => $row['image_path'],
            'audio_id' => $row['id'],
            'title' => $row['title'],
            'artist' => $row['artist']
        ];

        // Add the song to the $songs array
        $songs[] = $song;
    }
}

 else {
    echo "No songs found.";
}

$conn->close();
?>

<style>
    .gotham-font {
        font-family: 'Gotham Rounded', sans-serif;
        /* Add any additional styles you want here */
    }
</style>