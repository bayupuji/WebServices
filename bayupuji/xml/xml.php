<?php

Header('Content-type: text/xml');
//koneksi ke database
$connection = mysqli_connect("localhost", "root", "", "fakultas") or die("Error " . mysqli_error($connection));
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table tb_anggota
$sql = "select * from fklts ";
$result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('fklts');
    $track->addChild('ID', $row['ID']);
    $track->addChild('nama_fakultas', $row['nama_fakultas']);
    $track->addChild('kode', $row['kode']);
    $track->addChild('dekan', $row['dekan']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($connection);
?>