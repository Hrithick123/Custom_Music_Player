<?php
// Handle song file upload
$songPath = "music/"; // Specify the path to store songs
$songFileName = basename($_FILES["song"]["name"]);
$songTargetPath = $songPath . $songFileName;
move_uploaded_file($_FILES["song"]["tmp_name"], $songTargetPath);

// Handle image file upload
$imagePath = "img/"; // Specify the path to store images
$imageFileName = basename($_FILES["image"]["name"]);
$imageTargetPath = $imagePath . $imageFileName;
move_uploaded_file($_FILES["image"]["tmp_name"], $imageTargetPath);

// Retrieve artist and title from the form
$artistId = $_POST["artist"];
$newArtistName = $_POST["artist_name"]; // For new artists
$title = $_POST["title"];

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrithify";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a new artist is being added with an image
if ($artistId === "new") {
    if (!empty($newArtistName) && !empty($_FILES["new_artist_image"]["name"])) {
        $newArtistImage = $_FILES["new_artist_image"];

        // Insert code to upload and store the artist's image
        $artistImagePath = "artist_images/"; // Specify the path to store artist images
        $artistImageFileName = basename($newArtistImage["name"]);
        $artistImageTargetPath = $artistImagePath . $artistImageFileName;
        move_uploaded_file($newArtistImage["tmp_name"], $artistImageTargetPath);

        // Insert the new artist record into the database
        $insertArtistSql = "INSERT INTO artist (name, image_path) VALUES ('$newArtistName', '$artistImageTargetPath')";
        if ($conn->query($insertArtistSql) === TRUE) {
            // Retrieve the newly generated artist ID
            $artistId = $conn->insert_id;
        } else {
            echo "Error creating artist: " . $conn->error;
            $conn->close();
            exit;
        }
    } else {
        echo "New Artist fields are incomplete.";
        $conn->close();
        exit;
    }
}

// Insert the song record
$sql = "INSERT INTO songs (image_path, file_path, artist_id, artist, title)
        SELECT '$imageTargetPath', '$songTargetPath', '$artistId', name, '$title'
        FROM artist
        WHERE id = '$artistId'";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: home.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
