<?php

    require_once('koneksi.php');

    $nama_fakultas = $_POST['nama_fakultas'];
    $kode = $_POST['kode'];
    $dekan = $_POST['dekan'];
   
   

    $query = "INSERT INTO fklts(nama_fakultas,kode,dekan)VALUES('$nama_fakultas','$kode','$dekan')";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        echo json_encode ( array('message' => 'created!') );
    }else {
        echo json_encode ( array('message' => 'error') );
    }
?>