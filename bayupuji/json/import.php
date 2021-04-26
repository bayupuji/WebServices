<!Doctype Html>
<html>
<head>
<title>cara insert data menggunakan json di php</title>
</head>
<body>
<?php
//koneksi ke database
$connection = mysqli_connect("localhost","root","","fakultas") or die("Error " . mysqli_error($connection));

//untuk mendapatkan file json
$jsondata = file_get_contents('empdetail.json');

//convert json ke   data array
$data = json_decode($jsondata, true);

//mendapatkan data employee details

$nama_fakultas = $data['nama_fakultas'];
$kode= $data['kode'];
$dekan = $data['dekan'];



//insert data ke table tbl_emp 
$sql = "INSERT INTO fklts(nama_fakultas, kode, dekan)
VALUES('$nama_fakultas', '$kode', '$dekan')";

if(!mysqli_query($connection, $sql)){
  die("Error insert data ");
}else{
  echo "Success insert data";
}

?>
</body>
</html>