<?php

include "koneksi.php";

$npm=$_POST["npm"];
$nama_mhs=$_POST["nama_mhs"];
$kelas=$_POST["kelas"];
$semester=$_POST["semester"];
$kode_prodi=$_POST["kode_prodi"];

mysqli_query($koneksi, "INSERT  INTO mahasiswa (npm,nama_mhs,kelas,semester,kode_prodi) values ('$npm','$nama_mhs','$kelas','$semester','$kode_prodi')");

header("location:formmahasiswa.php");
?>