<?php
include "koneksi.php";

$kode_mtkul=$_POST["kode_mtkul"];
$nama_mtkul=$_POST["nama_mtkul"];
$sks=$_POST["sks"];

mysqli_query($koneksi, "UPDATE matakuliah SET 
	
	nama_mtkul='$nama_mtkul',
	sks = '$sks' where kode_mtkul='$kode_mtkul'");

header("location:matakuliah.php");
?>