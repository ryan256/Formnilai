<?php
include "koneksi.php";

$kode_prodi=$_GET["kode_prodi"];

mysqli_query($koneksi, "DELETE FROM prodi Where kode_prodi='$kode_prodi'");

header("location:index.php");
?>