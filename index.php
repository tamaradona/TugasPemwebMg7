<?php
include ("koneksi.php");
$query = mysqli_query($mysqli, "SELECT * from data_mahasiswa");
?>

<!-- Page Content  -->
<center>
<h2 class="mb-4"><center>Magister Mahasiswa</h2>
<td><a href="tambah data.php"class="btn btn-sm btn-info"<left>Tambah Mahasiswa</a>
<table class="table table-bordered table-responsive">
<thead>
      <tr>
        <th>No</th><th>NIM</th><th>Nama</th><th>Prodi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include ("koneksi.php");
        $no = 0;
        while($result = mysqli_fetch_array($query)){
          $no++;
      ?>
      <tr>
        <td><?php echo $result['no'];?></td>
        <td><?php echo $result['nim'];?></td>
        <td><?php echo $result['nama'];?></td>
        <td><?php echo $result['prodi'];?></td>
        <td>
          <a href="hapus data.php?no=<?php echo $result['no'];?>" class="btn btn-sm btn-danger">Hapus</a>
          <a href="form edit.php?no=<?php echo $result['no'];?>" class="btn btn-sm btn-warning">Edit</a>
        </td>
      </tr>
      <?php }?>
    </tbody>
  </table>
</center>
<!-- End Page Content  -->
