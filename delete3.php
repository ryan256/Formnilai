<?php
include "koneksi.php";

$kode_mtkul=$_GET["kode_mtkul"];

mysqli_query($koneksi, "DELETE FROM matakuliah Where kode_mtkul='$kode_mtkul'");

header("location:matakuliah.php");
?>