<?php 
    /**
     * NIM : 2257401073
     * NAMA : MASAYU NISA ATIKA
     * KELAS MI22A
     */ 
    $host       = "localhost";
    $user       = "root";
    $password   = "";
    $dbname     = "db_mi22a_uas";

    $koneksi    = mysqli_connect($host, $user, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("Koneksi Gagal Karena : ". mysqli_connect_error());
    }
?>