<?php
include "koneksi.php";

$npm=$_POST["npm"];
$nama_mhs=$_POST["nama_mhs"];
$kelas=$_POST["kelas"];
$semester=$_POST["semester"];
$kode_prodi=$_POST["kode_prodi"];

mysqli_query($koneksi, "UPDATE mahasiswa SET 
	
	npm='$npm',
	nama_mhs='$nama_mhs',
	kelas='$kelas',
	semester='$semester',
	kode_prodi='$kode_prodi' where npm='$npm'");

header("location:formmahasiswa.php");
?>