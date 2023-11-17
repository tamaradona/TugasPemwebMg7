<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
      <h2 class="mb-4"><center>Edit Master Mahasiswa</h2>
		  
<form action="edit data.php?no=<?php echo $_GET['no'];?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">NIM</label>
      <input type="text" class="form-control" id="inputNim" placeholder="nim" name="nim" required>
    </div>
  <div class="form-group">
    <label for="inputAddress">nama</label>
    <input type="text" class="form-control" id="inputNama" placeholder="nama" name="nama" required>
  </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Prodi</label>
    <input type="text" class="form-control" id="inputProdi" placeholder="prodi" name="prodi" required>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>

