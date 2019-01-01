<?php

include "koneksi.php";

$kode_mtkul=$_POST["kode_mtkul"];
$nama_mtkul=$_POST["nama_mtkul"];
$sks=$_POST["sks"];

mysqli_query($koneksi, "INSERT  INTO matakuliah (kode_mtkul,nama_mtkul,sks) values ('$kode_mtkul','$nama_mtkul','$sks')");

header("location:matakuliah.php");
?>