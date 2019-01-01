<?php

include "koneksi.php";

$kode_prodi=$_POST["kode_prodi"];
$nama_prodi=$_POST["nama_prodi"];

mysqli_query($koneksi, "INSERT  INTO prodi (kode_prodi,nama_prodi) values ('$kode_prodi','$nama_prodi')");

header("location:index.php");
?>