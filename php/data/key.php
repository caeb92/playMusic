<?php
$servername = "localhost";
$username = "caeb";
$password = "milo123..";
$dbname = "playmusic";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?>
