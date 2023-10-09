<!DOCTYPE html>
<html>

<head>
    <style>
        .song-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .song {
            width: calc(33.33% - 20px);
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .song img {
            width: 100%;
            height: auto;
        }

        /* Style the custom audio controls */
        .custom-audio-controls {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .custom-seeker {
            width: 100%;
            height: 5px;
            background-color: #ccc;
            position: relative;
            cursor: pointer;
        }

        .custom-seeker-bar {
            width: 0;
            height: 100%;
            background-color: blue;
        }

        .custom-time-display {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    include 'base.html';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hrithify";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch a list of artists
    $sql = "SELECT * FROM artist";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $artists = array();

        while ($row = $result->fetch_assoc()) {
            $artists[] = $row;
        }
    }

    $conn->close();
    ?>
    <div class="container">
        <div class="hero center-text">
            <div class="song-container">
                <?php foreach ($artists as $artist) { ?>
                    <div class="song">
                        <a href="artist.php?artist_id=<?php echo $artist['id']; ?>">
                            <img id="img" src="<?php echo $artist['image_path']; ?>" alt="Cover Art">
                        </a>
                        <p class="gotham-font">
                            <?php echo $artist['name']; ?>
                    </div>
                <?php } ?>
            </div>
            <br>
        </div>
    </div>
</body>

</html>