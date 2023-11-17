<?php
include ("koneksi.php");
$no = $_GET['no'];
$query= mysqli_query($mysqli, "delete from data_mahasiswa where no='$no' ");

header('location:index.php');
?>
