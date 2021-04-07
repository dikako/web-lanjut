<?php
    session_start();
    include "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
    $cek = mysqli_fetch_array($query);

    if ($cek) {
        $_SESSION['username'] = $username;
        ?>Anda berhasil login. silankan menuju <a href="home.php">Halaman Home</a><?php
    } else {
        ?>Anda gagal login. Silahkan menuju <a href="form_admin.php">Login Kembali</a><?php 
    }
?>