<?php
session_start();
if (isset($_SESSION["user"])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXTRACTION</title>
    <link rel="stylesheet" href="dale.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="main-area">
                <h1>EXTRACTION II</h1>
                <p>"Extraction" is a title that has been released on Netflix after my last update, it could be a movie, series, or documentary</p>
                <div class="button">
                    <a href="log.php" id="a">View Details</a>
                </div>
            </div>
        </div>
    </div>
    <div class="logo">
        <img src="images/logo.png">
    </div>
    <script>
        var a = document.getElementById('a');

        a.onclick = function () {
            window.alert("You need to sign in or log in first before viewing a Deatails !");
        }
    </script>
</body>
</html>