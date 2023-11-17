<?php
include ("koneksi.php");
$no                 =$_GET['no'];
$nim                =$_POST['nim'];
$nama               =$_POST['nama'];
$prodi           =$_POST['prodi'];
$query = mysqli_query($mysqli,"UPDATE `data_mahasiswa` SET `nim`='$nim',`nama`='$nama',`prodi`='$prodi' WHERE no='$no'");

header('location:index.php');
?>
