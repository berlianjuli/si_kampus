<html>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      
    <div class="tableform">
<form action="?show=pam" method="post">
<div class="col-auto">
  <label for="lNama" class="form-label">Nama</label>
  <input type="text" name="nama" class="form-control">
</div>
<div class="col-auto">
  <label for="lEmail" class="form-label">Email</label>
  <input type="email" name="email" class="form-control">
</div>
<div class="col-auto">
  <label for="lPassword" class="form-label">Password</label>
  <input type="password" name="password" class="form-control">
</div>
<div class="col-auto">
  <label for="ljenis Kelamin" class="form-label">jenis Kelamin</label>
  <select name="jeniskelamin" id="jeniskelamin" class="form-control">
    <option value="p">Perempuan</option>
    <option value="l">Laki-laki</option>
  </select>
</div>
<?php include 'selectJurusan.php'; ?>
<div class="col-auto">
  <label for="ljurusan" class="form-label">Jurusan</label>
  <select name="jurusan" id="jurusan" class="form-control">
 <?php while($jurusan = $hasil->fetch_assoc()) { ?>
  <option value="<?php echo $jurusan['jur_id']; ?>  "><?php echo $jurusan['jur_nama']; ?>  </option>
 <?php } ?> 
  </select>
</div>
<div class="col-auto">
  <label for="lAlamat" class="form-label">Alamat</label>
  <input type="textarea" name="alamat" class="form-control">
</div>
<div class="col-auto">
  <label for="lTanggalLahir" class="form-label">Tanggal Lahir</label>
  <input type="date" name="ttl" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
</div>

