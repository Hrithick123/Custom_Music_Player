<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/gotham-fonts@1.0.3/css/gotham-rounded.min.css" rel="stylesheet">
</head>

<body>
    <section>
        <div id="logo">
            <img src="hk.png" alt="Hrithify-Logo" width="50">
            <h1>Hrithify</h1>
        </div>

        <form action="upload.php" method="post" enctype="multipart/form-data" id="SignInFormData">
            <label for="song">Choose Song:</label>
            <input type="file" name="song" id="song" placeholder="Song File" required>

            <label for="image">Choose Image:</label>
            <input type="file" name="image" id="image" required>

            <label for="artist">Select Artist:</label>
            <select name="artist" id="artist">
                <option value="">-- Select an Artist --</option>
                <option value="new">New Artist</option> <!-- Add a new artist option -->
                <?php
                // Database connection
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hrithify";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Retrieve existing artists from the database
                $artistSql = "SELECT id, name FROM artist";
                $artistResult = $conn->query($artistSql);

                if ($artistResult->num_rows > 0) {
                    while ($row = $artistResult->fetch_assoc()) {
                        echo "<option value='" . $row["id"] . "'>" . $row["name"] . "</option>";
                    }
                }

                $conn->close();
                ?>
            </select>

            <div id="newArtistFields" style="display: none;">
                <label for="new_artist_image">Artist Image (for new artist):</label>
                <input type="file" name="new_artist_image" id="new_artist_image">
                <br>
                <label for="artist_name">Artist Name (for new artist):</label>
                <input type="text" name="artist_name" id="artist_name">
            </div>

            <!-- JavaScript to toggle the visibility of the new artist fields -->
            <script>
                document.getElementById('artist').addEventListener('change', function () {
                    var newArtistFields = document.getElementById('newArtistFields');
                    var newArtistImage = document.getElementById('new_artist_image');
                    var artistName = document.getElementById('artist_name');
                    if (this.value === "new") {
                        newArtistFields.style.display = 'block';
                        newArtistImage.setAttribute('required', 'required');
                        artistName.setAttribute('required', 'required');
                    } else {
                        newArtistFields.style.display = 'none';
                        newArtistImage.removeAttribute('required');
                        artistName.removeAttribute('required');
                    }
                });
            </script><br>

            <label for="artist">Title:</label>
            <input type="text" name="title" id="title" placeholder="Enter Title" required>

                <button type="submit" name="Upload" value="Upload">Upload</button>
        </form>
    </section>
</body>

<style>
    html {
        color: #eee;
    }

    * {
        font-family: "Gotham Rounded Book", "sans-serif";
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        min-height: 560px;
        height: 100vh;
        display: grid;
        place-content: center;
        background: #eee;
    }

    section {
        min-width: 450px;
        min-height: 520px;
        padding: 15px;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        border-radius: 10px;
        background: #2c2d31;
    }

    #logo {
        justify-content: center;
        display: flex;
        align-items: center;
        margin: 30px;
    }

    img {
        margin-right: 10px;
    }

    nav {
        margin: 20px;
        display: flex;
        justify-content: center;
    }

    nav label {
        text-transform: uppercase;
        cursor: pointer;
    }

    nav label:first-child {
        margin-right: 20px;
    }

    form {
        padding-inline: 60px;
        display: flex;
        flex-direction: column;
    }

    #SignIn:checked~section #SignInFormData {
        display: flex;
    }

    #SignIn:checked~section nav label:first-child {
        margin-bottom: -2px;
        border-bottom: 2px solid #1ed760;
    }

    #SignUp:checked~section #SignUpFormData {
        display: flex;
    }

    #SignUp:checked~section nav label:last-child {
        margin-bottom: -2px;
        border-bottom: 2px solid #1ed760;
    }

    input,
    button {
        border-radius: 50px;
        padding: 15px 20px;
        margin-bottom: 15px;
        border: none;
        outline: none;
        font-size: 16px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    button {
        background: #1ed760;
        text-transform: uppercase;
        font-weight: bold;
        color: #fff;
        cursor: pointer;
        margin-top: 5px;
    }

    form span {
        margin-left: 20px;
    }

    form span label {
        font-size: 14px;
        text-transform: lowercase;
    }

    input[type="checkbox"] {
        cursor: pointer;
        accent-color: #3498db;
    }

    a {
        color: #797a7e;
        font-weight: bold;
        text-decoration: none;
        margin-top: 30px;
        display: flex;
        justify-content: center;
        cursor: pointer;
    }
</style>

</html>