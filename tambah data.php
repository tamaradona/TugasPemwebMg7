<?php
include ("koneksi.php");
$query= mysqli_query($mysqli, "INSERT INTO `data_mahasiswa`(`no`, `nim`, `nama`, `prodi`) 
VALUES ('','','','')");
header('location:index.php');
?>