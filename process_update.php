<?php
require_once 'db.php';

$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
echo '<pre>';
print_r($_POST);
echo '</pre>';

$sql = "UPDATE mahasiswa SET nama ='".$Nama."', Alamat= '".$Alamat."'
where NIM = '".$NIM."'";

if($conn->query($sql)){
    echo "Data sudah masuk ya";
    header: ('Location : index.php');

}else{
    die("Error : " . $conn->connect_error);
}
die;
?>