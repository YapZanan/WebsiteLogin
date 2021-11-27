<?php

    // echo "dari php";
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password  = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT email FROM pengguna WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - email sudah terdaftar";
            }
            else{
                 if(isset($_FILES['image'])){
                     $img_name = $_FILES['image']['name'];
                     $img_type = $_FILES['image']['type'];
                     $tmp_name = $_FILES['image']['tmp_name'];

                     $img_explode = explode('.', $img_name); //ngambil nama terakhir
                     $img_ext = end($img_explode); //ngambil ekstensi

                     $extensions = ['png', 'jpg', 'jpeg'];
                     if(in_array($img_ext, $extensions) === true){
                        $time = time();
                        $new_img_name = $time.$img_name;
                        if(move_uploaded_file($tmp_name, "foto/".$new_img_name)){
                            $password = md5($password);
                            $status = "Sudah aktif";
                            $random_id = rand(time(), 10000000);
                            // echo "$random_id, $fname, $lname, $email, $password, $new,"
                            $sql2 = mysqli_query($conn, "INSERT INTO pengguna (id_unik, nama_awal, nama_akhir, email, password, img, status)
                                                                        VALUES('{$random_id}', '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                            
                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM pengguna WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['id_unik'] = $row['id_unik'];
                                    echo "success";
                                }
                            }
                            else{
                                
                                echo "$sql2 asdasd";
                            }
                                                
                        }
                        
                     }
                     else{
                        echo "masukkan foto yang sesuai";
                     }
                 }
                 else{
                     echo "masukkan foto";
                 }
            }
        }
        else{
            echo "$email - email tidak valid";
        }
    }
    else{
        echo "Isikan semua input";
    }
?>