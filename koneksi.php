<?php
$namaserver = "localhost";
$username = "root";
$password = "";
$dbname = "db_kampus";

// Create connection
$con = new mysqli($namaserver, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Koneksi Gagal: " . $con->connect_error);
}
?>


