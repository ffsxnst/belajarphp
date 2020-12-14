<?php

require_once "db.php";

$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
echo $NIM, $Nama, $Alamat;

$sql = "INSERT INTO mahasiswa (NIM, Nama, Alamat) 
VALUES ('".$NIM."', '".$Nama."', '".$Alamat."')";


if ($conn->query($sql)){
    echo "Data sudah berhasil ditambahkan";
}
else
{
    die("Error: ".$conn->error);
}

exit;