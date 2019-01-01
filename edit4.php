<?php
include "koneksi.php";

$npm=$_POST["npm"];
$nilai_tugas=$_POST["nilai_tugas"];
$nilai_uts=$_POST["nilai_uts"];
$nilai_uas=$_POST["nilai_uas"];

mysqli_query($koneksi, "UPDATE nilai SET 
	
	nilai_tugas='$nilai_tugas',
	nilai_uts='$nilai_uts',
	nilai_uas='$nilai_uas' where npm='$npm'");

header("location:nilai.php");
?>