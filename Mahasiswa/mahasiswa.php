<?php
include 'koneksi.php';
$sql = "SELECT * FROM mahasiswa,jurusan where mhs_jur_id=jur_id";
$hasil = $con->query($sql);
$i=1;
  ?>
<div class="tableselect">
<h5>DATA MAHASISWA</h5>
<a href="?show=<?php echo 'ma'; ?>" class="btn btn-primary">Tambah Mahasiswa</a>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" style="width: 5%">No</th>
      <th scope="col" style="width: 20%">Nama Mahasiswa</th>
      <th scope="col" style="width: 10%">Jurusan</th>
      <th scope="col" style="width: 20%">Email</th>
      <th scope="col" style="width: 20%">Alamat</th>
      <th scope="col" style="width: 10%">Tgl Lahir</th>
      <th scope="col" style="width: 15%">Aksi</th>
    </tr>
  </thead>
  <tbody>

  <?php
  // output data of each row
  while($datamahasiswa = $hasil->fetch_assoc()) {
    if($datamahasiswa['mhs_jeniskelamin']=='p'){
      $jk='Perempuan';
    }else{
      $jk='Laki - Laki';
    }?>
    <tr>
         <th scope="row"><?php echo $i; $i++; ?></th>
         <td> <?php echo $datamahasiswa['mhs_nama']; ?></td>
         <td> <?php echo $datamahasiswa['jur_nama']; ?></td>
         <td> <?php echo $datamahasiswa['mhs_email']; ?></td>
         <td> <?php echo $jk; ?></td>
         <td> <?php echo $datamahasiswa['mhs_alamat']; ?></td>
         <td>
         <a href="?show=mu&id=<?php echo $datamahasiswa['mhs_id']; ?>" class="btn btn-warning">Edit</a>|
          <a href="?show=md&id=<?php echo $datamahasiswa['mhs_id']; ?>" class="btn btn-danger">Delete</a> 
         </td>
    </tr>       
    <?php } ?>
  </tbody>
</table>
</div>
<?php
$con->close();
?>



