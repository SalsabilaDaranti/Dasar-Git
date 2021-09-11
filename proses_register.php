<?php 
    // ambil data dari formulir
    //$id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $conn = mysqli_connect('localhost','root','');
    if($conn){
        $db = mysqli_select_db($conn,'register');

        $result = mysqli_query($conn,"insert into salsa (id,username,email,password) values ('','$username','$email','$pass')");
        if($result ) {
    // kalau berhasil alihkan ke halaman login.php
    // dengan status=sukses
        //echo "berhasil";
        header('Location: login.php?status=berhasil');
        exit;
        }else{
            echo "gagal";
        }
    }else{
        echo "gagal";
    }
?>