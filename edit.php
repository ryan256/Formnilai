<?php
include "koneksi.php";

$kode_prodi=$_POST["kode_prodi"];
$nama_prodi=$_POST["nama_prodi"];

mysqli_query($koneksi, "UPDATE prodi SET 

	nama_prodi='$nama_prodi' where kode_prodi='$kode_prodi'");

header("location:index.php");
?>