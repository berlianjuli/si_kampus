<html>
<body>
<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "SELECT * FROM mahasiswa,jurusan where mhs_id=".$id." and mhs_jur_id=jur_id";
$hasil = $con->query($sql);
$datamahasiswa = $hasil->fetch_assoc();
$jk=$datamahasiswa['mhs_jeniskelamin'];
?>
<div class="tableform">
<form action="?show=pum&id=<?php echo $datamahasiswa['mhs_id']; ?>" method="post">
<div class="col-auto">
  <label for="lNama" class="form-label">Nama</label>
  <input type="text" name="nama" class="form-control" value="<?php echo $datamahasiswa['mhs_nama']; ?>">
</div>
<div class="col-auto">
  <label for="lEmail" class="form-label">Email</label>
  <input type="email" name="email" class="form-control" value="<?php echo $datamahasiswa['mhs_email']; ?>">
</div>
<div class="col-auto">
  <label for="lPassword" class="form-label">Password</label>
  <input type="password" name="password" class="form-control" value="<?php echo $datamahasiswa['mhs_nama']; ?>">
</div>
<div class="col-auto">
  <label for="ljenis Kelamin" class="form-label">jenis Kelamin</label>
  <select name="jeniskelamin" id="jeniskelamin" class="form-control">
  <?php if($jk=='p'){?>
  <option value="p" selected="selected">Perempuan</option>
<?php }else{ ?>
  <option value="p">Perempuan</option>
  <?php } ?> 
  <?php if($jk=='l'){?>
  <option value="l" selected="selected">Laki - laki</option>
<?php }else{ ?>
  <option value="l">Laki - laki</option>
  <?php } ?> 
  </select>
</div>
<?php include 'selectJurusan.php'; ?>
<div class="col-auto">
  <label for="ljurusan" class="form-label">Jurusan</label>
  <select name="jurusan" id="jurusan" class="form-control">
 <?php while($j = $hasil->fetch_assoc()) { 
   if($datamahasiswa['mhs_jur_id'] == $j['jur_id'] ){
   ?>
  <option value="<?php echo $j['jur_id']; ?> " selected="selected"><?php echo $j['jur_nama']; ?>  </option>
  <?php }else{ ?>
    <option value="<?php echo $j['jur_id']; ?> "><?php echo $j['jur_nama']; ?>  </option>
    <?php } ?>
 <?php } ?> 
  </select>
</div>
<div class="col-auto">
  <label for="lAlamat" class="form-label">Alamat</label>
  <input type="textarea" name="alamat" class="form-control" value="<?php echo $datamahasiswa['mhs_alamat']; ?>">
</div>
<div class="col-auto">
  <label for="lTanggalLahir" class="form-label">Tanggal Lahir</label>
  <input type="date" name="ttl" class="form-control" value="<?php echo $datamahasiswa['mhs_tgllahir']; ?>">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>



