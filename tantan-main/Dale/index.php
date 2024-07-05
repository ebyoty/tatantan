<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("location: dale.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="fcon">
        <div class="fmain">
            <div class="fcol-text">
                <div class="img-area">
                    <img src="images/logo.png">
                </div>
                <h1>What is <span>NETFLIX?</span></h1>
                <p>Netflix is a popular subscription-based streaming service that offers a wide variety of TV shows, movies, documentaries, and original content across different genres. It was founded in 1997 by Reed Hastings and Marc Randolph and initially started as a DVD rental-by-mail service. Over time, Netflix transitioned into a streaming platform, allowing subscribers to instantly watch a vast library of content on their internet-connected devices.</p> <br>
                <p>Netflix's library includes content from various sources, including licensed movies and TV shows, as well as an increasing number of original productions produced by Netflix itself. Original content, often referred to as Netflix Originals, includes movies, series, documentaries, and stand-up specials created exclusively for the platform. Some well-known Netflix Originals include "Stranger Things," "The Crown," "Narcos," and "Bird Box."</p> <br>
                <p>Users can access Netflix on a wide range of devices, such as smart TVs, smartphones, tablets, and computers. The service is available in numerous countries around the world, making it one of the leading streaming platforms globally. Subscribers pay a monthly fee for access to the content library, and they can watch as much as they want without commercials or interruptions, provided they have a reliable internet connection</p> <br>
            </div>
        </div>
        <div class="mainc">
            <div class="main-colc">
                <div class="mainc-text">
                    <h1>Main Characther of <span>Extraction II</span></h1>
                </div>
                <div class="para">
                    <p>(Chris Hemsworth)</p>
                </div>
            </div>
            <div class="content">
                <div class="content-img">
                    <img src="images/christ.jpg">
                    <p>Chris Hemsworth is an Australian actor who gained international fame for his portrayal of Thor in the Marvel Cinematic Universe (MCU). Born on August 11, 1983, in Melbourne, Australia, Hemsworth has become one of the prominent actors in Hollywood.

Apart from his role as Thor, he has appeared in various other films, including "Snow White and the Huntsman," "Rush," "In the Heart of the Sea," and "Extraction." Chris Hemsworth is known for his charismatic screen presence, action-oriented roles, and versatility as an actor</p>
                </div>
                <div class="dales">
                    <div class="dales-text">
                        <p>SINCE THIS WEBSITE IS OUR PROJECT IN OOP WOULD YOU LIKE TO VIEW MY OOP PROJECT <span><b>CALCULATOR?</b></span></p>
                    </div>
                </div>
                <div class="link">
                    <a href="calculator.php">View Project</a> 
                    <p>OR</p>
                    <a href="logout.php">Sign Out</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>