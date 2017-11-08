<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agrinandum";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
$db = new PDO('mysql:host=localhost;dbname=agrinandum;charset=utf8mb4', 'root', '');
$mysqli->set_charset("utf8");

  
 ?>