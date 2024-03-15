<?php
$server = "localhost";
$user = "admin";
$password = "sio";
$dbname = "acf2l";
// Create connection
$conn = new mysqli($server, $user, $password, $dbname);
// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
echo 'Connexion réussie';
?>