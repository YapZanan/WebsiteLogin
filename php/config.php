<?php
    $conn = mysqli_connect("localhost", "root", "", "chat");
    if(!$conn){
        echo "Error terkoneksi ke database " . mysqli_connect_error();
    }
 
?>