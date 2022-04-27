<?php
$servername = "localhost";
$username = "l43l9hgu_adm";
$password = "iz0-YTnJ!qzn";
$dbname = "l43l9hgu_site";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  header('Location: index.php?p=404');
}