<?php

include "koneksi.php";

$npm=$_POST["npm"];
$kode_mtkul=$_POST["kode_mtkul"];
$nilai_tugas=$_POST["nilai_tugas"];
$nilai_uts=$_POST["nilai_uts"];
$nilai_uas=$_POST["nilai_uas"];

mysqli_query($koneksi, "INSERT  INTO nilai (npm,kode_mtkul,nilai_tugas,nilai_uts,nilai_uas) values ('$npm','$kode_mtkul','$nilai_tugas','$nilai_uts','$nilai_uas')");

header("location:nilai.php");
?>