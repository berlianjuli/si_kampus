<?php

//if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["show"])) {
        $aksi=$_GET["show"];
      }else{
          $aksi='';
      }

   
    switch($aksi){
        case 'm' :
            include 'Mahasiswa/mahasiswa.php';
        break;
        case 'ma' :
            include 'Mahasiswa/addMahasiswa.php';
        break;
        case 'mu' :
            include 'Mahasiswa/updateMahasiswa.php';
        break;
        case 'md' :
            include 'Mahasiswa/deleteMahasiswa.php';
        break;
        case 'pam' :
            include 'Mahasiswa/prosesMahasiswa.php';
        break;
        case 'pum' :
            include 'Mahasiswa/prosesUpdateMahasiswa.php';
        break;
        case 'j' :
            include 'Jurusan/jurusan.php';
        break;
        case 'ja' :
            include 'Jurusan/addJurusan.php';
        break;
        case 'pja' :
            include 'Jurusan/prosesJurusan.php';
        break;
        case 'ju' :
            include 'Jurusan/updateJurusan.php';
        break;
        case 'pju' :
            include 'Jurusan/prosesUpdateJurusan.php';
        break;
        case 'jd' :
            include 'Jurusan/deleteJurusan.php';
        break;
        default :
            
        break;
    }

//}
?>