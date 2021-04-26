<?php
include ('konek.php');
$xml = simplexml_load_file('data.xml'); //parse the xml file into object
foreach( $xml->children() as $fakultas) 
{
$nama_fakultas = $fakultas->nama_fakultas; //get the childnode nama_fakultas
$kode = $fakultas->kode; //get the child node kode
$dekan = $fakultas->dekan; //get the child node dekan
echo 'nama_fakultas : '.$nama_fakultas.'<br />';
echo 'kode : '.$kode.'<br />';
echo 'dekan : '.$dekan.'<br />';
echo '<br>';

$query = "INSERT INTO fklts 
VALUES('$nama_fakultas','$kode','$dekan')";
    mysqli_query($koneksi, $query);
}
?>