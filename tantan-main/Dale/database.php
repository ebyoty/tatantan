<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "project";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
    die("Something whent wrong !");
}
?>