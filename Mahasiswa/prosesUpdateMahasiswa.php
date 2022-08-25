<?php

include 'koneksi.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $pswd=$_POST['password'];
        $jk=$_POST['jeniskelamin'];
        $alamat=$_POST['alamat'];
        $jurusan=$_POST['jurusan'];
        $ttl=$_POST['ttl'];
        $id=$_GET['id'];
        $sql = "update `mahasiswa` set `mhs_jur_id`='$jurusan',`mhs_nama`='$nama', `mhs_email`='$email', 
        `mhs_password`='$pswd',`mhs_jeniskelamin`='$jk',`mhs_alamat`='$alamat',`mhs_tgllahir`='$ttl'
        where `mhs_id`='$id';
        ";

        if ($con->query($sql)) {
            echo "Update berhasil:";
            header("location: http://localhost/si_kampus?show=m");
        } else {
            echo "Error: ";
    }
    $con->close();
}
?>


