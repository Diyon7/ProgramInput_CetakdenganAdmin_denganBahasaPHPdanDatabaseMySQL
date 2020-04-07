<?php

session_start();

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($link, "select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:cetak.php");
} else {
    header("location:index.php?pesan=kesalahan");
}
