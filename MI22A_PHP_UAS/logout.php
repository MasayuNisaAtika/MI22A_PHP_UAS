<?php
     /**
     * NIM : 2257401073
     * NAMA : MASAYU NISA ATIKA
     * KELAS MI22A
     */ 
    session_start();
    session_destroy();
    session_unset();

    header('location:login.php');
?>