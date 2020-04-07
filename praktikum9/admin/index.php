<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style1.css">
</head>

<body>
    <h1>Login Admin</h1>
    <div class="kotak-login">
        <form action="proses-login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form-login" placeholder="Masukkan Username" required>

            <label>Password</label>
            <input type="password" name="password" class="form-login" placeholder="Masukkan Password" required>

            <input type="submit" class="tombol-login" value="LOGIN">
        </form>
    </div>
</body>
<div class="pesan"></div>

</html>

<?php

session_start();
if ($_SESSION) {
    if ($_SESSION['status'] == "login") {
        echo "<script> alert('Sudah Login Lanjutkan');window.location='cetak.php';</script>";
    }
}


if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "kesalahan") {
        echo "<div class='pesan'>username atau password salah</div>";
    }
    if ($_GET['pesan'] == "logout") {
        echo "<div class='pesan'>anda berhasil logout</div>";
    }
    if ($_GET['pesan'] == "belum-login") {
        echo "<div class='pesan'>login terlebih dahulu</div>";
    }
}

?>