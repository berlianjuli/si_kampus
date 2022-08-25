<?php
include 'koneksi.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama=$_POST["nama"];
        $email=$_POST["email"];
        $pswd=$_POST["password"];
        $jk=$_POST["jeniskelamin"];
        $alamat=$_POST["alamat"];
        $jurusan=$_POST["jurusan"];
        $ttl=$_POST["ttl"];

        $sql = "INSERT INTO `mahasiswa` (`mhs_jur_id`,`mhs_nama`, `mhs_email`, 
        `mhs_password`,`mhs_jeniskelamin`,`mhs_alamat`,`mhs_tgllahir`) 
        VALUES ('$jurusan','$nama','$email','$pswd','$jk','$alamat','$ttl')";

        if ($con->query($sql)) {
            echo "insert berhasil";
            header("location: http://localhost/si_kampus/?show=m");//baru
        } else {
            echo "Error: ";
        }
    $con->close();
}
?>


