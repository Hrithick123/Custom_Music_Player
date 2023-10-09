<!DOCTYPE html>
<html>
<head>
    <title>Music Player with Seeker</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/gotham-fonts@1.0.3/css/gotham-rounded.min.css" rel="stylesheet">
    <center>
        <?php 
        include 'base.html';
        include 'template.php'; // Include template.php, which in turn includes songs.php
        ?>
        <script src="player.js"></script>
    </center>
</body>
<style>
    .gotham-font {
        font-family: 'Gotham Rounded', sans-serif;
        /* Add any additional styles you want here */
    }
</style>
</html>
