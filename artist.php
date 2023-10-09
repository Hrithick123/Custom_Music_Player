<?php
include 'base.html';
include 'songs.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrithify";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['artist_id'])) {
    $artist_id = $_GET['artist_id'];

    // Fetch artist information
    $artist_sql = "SELECT * FROM artist WHERE id = $artist_id";
    $artist_result = $conn->query($artist_sql);

    if ($artist_result->num_rows > 0) {
        $artist = $artist_result->fetch_assoc();
    }

    // Fetch songs for the selected artist
    $songs_sql = "SELECT * FROM songs WHERE artist_id = $artist_id";
    $songs_result = $conn->query($songs_sql);

    if ($songs_result->num_rows > 0) {
        $songs = array();

        while ($row = $songs_result->fetch_assoc()) {
            $songs[] = $row;
        }
    } else {
        echo "No songs found for this artist.";
    }
} else {
    echo "Invalid artist ID.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($artist) ? $artist['name'] : 'Artist Not Found'; ?>
    </title>
    <style>
        #img {
            max-width: 300px;
            /* Ensure the image doesn't exceed its container's width */
            height: 300px;
            /* Maintain aspect ratio */
            border: 1px solid #ccc;
            /* Add a border around the image (optional) */
        }
    </style>
</head>

<body>
    <?php if (isset($artist)): ?>
        <center>
            <br>
            <h1>
                <?php echo $artist['name']; ?>
            </h1>
            <img id="img" src="<?php echo $artist['image_path']; ?>" alt="Cover Art">
            <br> <br>
            <?php if (isset($songs) && count($songs) > 0): ?>
                <ul>
                    <?php foreach ($songs as $song): ?>
                        <li>
                            <?php echo $song['title']; ?>
                            <div class="custom-audio-controls">
                            <audio controls class="custom-audio" data-audio-id="<?php echo $song['id']; ?>">
                                <source src="audio.php?id=<?php echo $song['id']; ?>" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No songs found for this artist.</p>
            <?php endif; ?>
        <?php else: ?>
            <p>Artist not found.</p>
        <?php endif; ?>
</body>

</html>