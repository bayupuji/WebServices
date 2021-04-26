<?php

    require_once('koneksi.php');

    $query = "SELECT * FROM fklts";
    $sql    = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while ($row = mysqli_fetch_array($sql)){
            array_push ($result,array(
                'ID' => $row ['ID'],
                'nama_fakultas' => $row['nama_fakultas'],
                'kode' => $row['kode'],
                'dekan' => $row['dekan'],
            ) );
        }
        
    
    echo json_encode ( array('fakultas' => $result) );
    }
?>