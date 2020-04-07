<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "18082010037";
$link = mysqli_connect($host, $username, $password) or die("Koneksi gagal dibangun");
$conn = mysqli_select_db($link, $database) or die("Database tidak dapat dibuka");
//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
