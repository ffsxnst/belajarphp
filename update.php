<?php
require_once 'db.php';
$NIM = $_GET['NIM'];

$sql = "SELECT * FROM mahasiswa WHERE NIM = '".$NIM."'";
$hasil = $conn->query($sql);

$mhs = $hasil->fetch_object();

?>


<form action="process_update.php" method="POST">
   NIM : <input type = "text" name="NIM"value="<?=$mhs->NIM;?>">
   Nama :  <input type = "text" name="Nama"value="<?=$mhs->Nama;?>">
   Alamat : <input type = "text" name="Alamat"value="<?=$mhs->Alamat;?>">
   <button type="Submit ">Simpan</button>
</form>

