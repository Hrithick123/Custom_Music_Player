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
    include 'songs.php';
    ?>
    <div class="container">
        <div class="hero center-text">
            <div class="song-container">
                <?php foreach ($songs as $song) { ?>
                    <div class="song">
                        <img id="img" src="<?php echo $song['image_path']; ?>" alt="Cover Art">
                        <p class="gotham-font">
                            <?php echo $song['title']; ?> -
                            <?php echo $song['artist']; ?>
                        </p>
                        <!-- Custom audio controls -->
                        <div class="custom-audio-controls">
                            <audio controls class="custom-audio" data-audio-id="<?php echo $song['audio_id']; ?>">
                                <source src="audio.php?id=<?php echo $song['audio_id']; ?>" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <br>
        </div>
    </div>
</body>

</html>
