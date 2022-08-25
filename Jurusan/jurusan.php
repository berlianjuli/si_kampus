<?php
include 'koneksi.php';

$sql = "SELECT * FROM jurusan";
$hasil = $con->query($sql);
$i=1;
if ($hasil->num_rows > 0) {
  // output data of each row
?>

<div class="tableselect">
<h5>DATA JURUSAN</h5>
<a href="?show=<?php echo 'ja'; ?>" class="btn btn-primary">Tambah Jurusan</a>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" style="width: 15%">No</th>
      <th scope="col" style="width: 70%">Jurusan</th>
      <th scope="col" style="width: 15%">Aksi</th>
    </tr>
  </thead>
  <tbody>

 <?php while($jurusan = $hasil->fetch_assoc()) { ?>
         <tr>
         <th scope="row"><?php echo $i; $i++; ?></th>
         <td> <?php echo $jurusan['jur_nama']; ?></td>
         <td>
         <a href="?show=ju&id=<?php echo $jurusan['jur_id'];?>" class="btn btn-warning">Edit</a>|
          <a href="?show=jd&id=<?php echo $jurusan['jur_id']; ?>" class="btn btn-danger">Delete</a> 
         </td>
    </tr>                                                        <!--baru-->
<?php } ?>
  </tbody>
</table>
</div>
  <?php
} else {
  //echo "Gagal";
}
$con->close();
?>



