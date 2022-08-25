<html>
<body>
<div class="tableform">
<h5>UPDATE DATA JURUSAN</h5>
<?php
include 'koneksi.php';
$id=$_GET['id'];

$sql = "SELECT * FROM jurusan where jur_id=".$id;
$hasil = $con->query($sql);
$jurusan = $hasil->fetch_assoc();
?>
<form action="?show=pju&id=<?php echo $jurusan['jur_id']; ?>" method="post">
<div class="col-auto">
  <label for="lNama" class="form-label">Nama</label>
  <input type="text" name="nama" value="<?php echo $jurusan['jur_nama']; ?>" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>



