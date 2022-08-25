<?php
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$hasil = $con->query($sql);

if ($hasil->num_rows > 0) {
  // output data of each row
  while($datamahasiswa = $hasil->fetch_assoc()) {
    if($datamahasiswa['mhs_jeniskelamin']=='p'){
      $jk='Perempuan';
    }else{
      $jk='Laki - Laki';
    }
    $id_mhs=$datamahasiswa['mhs_id'];                               //baru
    echo $id_mhs ." " . $datamahasiswa['mhs_nama']. " " .           //edit 
    $datamahasiswa['mhs_email']." " . $jk." ". 
    $datamahasiswa['mhs_alamat']."". $datamahasiswa['mhs_tgllahir'];
    ?>
    <a href="updateMahasiswa.php?id=<?php echo $datamahasiswa['mhs_id']; ?>">Edit</a>|
    <a href="deleteMahasiswa.php?id=<?php echo $datamahasiswa['mhs_id']; ?>">Delete</a>
                                                             <!--baru-->
    <?php
    echo "<br>";                                                    //edit
  }
} else {
  echo "Gagal";
}
$con->close();
?>



