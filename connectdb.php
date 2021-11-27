<?php

$servername = "localhost";
$username = "root";
$password = "";
$my_db = "db_perpus";


$conn = new mysqli($servername, $username, $password, $my_db);

// Check connection
if ($conn -> connect_errno) {
    die("Connection failed: " . $conn->connect_error);
  exit();
}
else{
    echo("berhasil");
}
?> 