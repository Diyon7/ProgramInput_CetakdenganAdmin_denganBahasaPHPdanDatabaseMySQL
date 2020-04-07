<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style1.css">
</head>

<body>


    <?php
    include "koneksi.php";
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:index.php?pesan=belum-login");
    }

    $sql = "select * from kontak order by nama;";
    $qry = mysqli_query($link, $sql) or die("Proses cetak gagal");
    echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>No</th>
<th>Nama</th>
<th>Jenis kelamin</th>
<th>Email</th>
<th>Alamat</th>
<th>Kota</th>
<th>Pesan</th>";
    $no = 1;
    while ($hasil = mysqli_fetch_row($qry)) {
        echo "<tr>
<td>$no</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
<td>$hasil[3]</td>
<td>$hasil[4]</td>
<td>$hasil[5]</td>
<td>$hasil[6]</td>
</tr>";
        $no++;
    }
    echo "</table>";
    ?>
    <a href="logout.php">
        <h3 class="tombol-logout">Logout</h3>
    </a>
    <a href="#">Kembali</a>
</body>

</html>