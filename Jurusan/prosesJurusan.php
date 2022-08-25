<?php
include 'koneksi.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama=$_POST["nama"];

        $sql = "INSERT INTO `jurusan` (`jur_nama`) 
        VALUES ('$nama')";

        if ($con->query($sql)) {
            echo "insert berhasil";
            header("location: http://localhost/si_kampus/?show=j");//baru
        } else {
            echo "Error: ";
    }
    $con->close();
}
?>


