<?php

    //session
    session_start();
    
    //include koneksi
    include('koneksi.php');

    //get id
    $name = $_SESSION['namaDepan'];
    
    //variable
    $id_pelanggan = htmlspecialchars($_POST['id_pelanggan']);
    $nama_pelanggan = htmlspecialchars(ucwords($_POST['nama_pelanggan']));
    $alamat_pelanggan = htmlspecialchars(ucwords($_POST['alamat_pelanggan']));
    $nomor_telepon = htmlspecialchars($_POST['nomor_telepon']);
    $status_aktif = htmlspecialchars($_POST['status_aktif']);

    $result2 = mysqli_query($con,"CALL update_pelanggan(
        '".$id_pelanggan."',
        '".$nama_pelanggan."',
        '".$alamat_pelanggan."',
        '".$nomor_telepon."',
        '".$status_aktif."',
        CURDATE(),
        '".$name."'
    )");
    mysqli_next_result($con);
?>