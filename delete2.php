<?php
include "koneksi.php";

$npm=$_GET["npm"];

mysqli_query($koneksi, "DELETE FROM mahasiswa Where npm = '$npm'");

header("location:formmahasiswa.php");
?>