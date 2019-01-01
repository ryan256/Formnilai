<?php
include "koneksi.php";

$npm=$_GET["npm"];

mysqli_query($koneksi, "DELETE FROM nilai Where npm='$npm'");

header("location:nilai.php");
?>