<?php

$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username == "admin" && $password == "1234") {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    echo "Anda berhasil login. Silahkan menuju <a href='homeSesisson.php>Halaman Home";
} else {
    echo "Gagal login. Silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
}