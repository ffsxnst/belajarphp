<?php

$servername = "localhost";
$username = "root";
$password = "";
$nama_database = 'belajar_php';

//create connection
$conn = new mysqli($servername, $username, $password, $nama_database);

//check connection
    if($conn ->connect_error){
    die("Connection failed: ".$conn->connect_error);

}



?>