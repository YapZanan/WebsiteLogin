<?php
    include_once "config.php";
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password  = mysqli_real_escape_string($conn, $_POST['password']);
    
    // echo "bisa login";

    if(!empty($email) && !empty($password)){
        $password = md5($password);
        $sql = mysqli_query($conn, "SELECT * FROM pengguna WHERE email = '{$email}' AND password = '{$password}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['id_unik'] = $row['id_unik'];
            echo "success";
            }
        else{
            echo "email atau password salah";
        }
    }
    else{
        echo "Harap Masukkan semua data";
    }
?>