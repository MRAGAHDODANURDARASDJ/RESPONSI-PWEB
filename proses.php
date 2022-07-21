<?php
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $notelp = $_POST['notelp'];
    $kamar = $_POST['kamar'];
    $tanggal = $_POST['tanggal'];

    $fp = fopen("datakost.txt","a+");
    fputs($fp,"$email|$nama|$umur|$notelp|$kamar|$tanggal\n");
    fclose($fp);

    header('location: index.php', true, 301);
    exit();
?>