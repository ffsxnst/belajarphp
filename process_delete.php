<?php

require_once "db.php";


$sql =  "DELETE mahasiswa SET Nama = '".$Nama."', Alamat = '".$Alamat."'
WHERE NIM = '".$NIM."'";

header("location:index.php?pesan=hapus");
?>