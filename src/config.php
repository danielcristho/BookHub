<?php
$server = "10.11.1.253";
$user = "superking";
$password = "MEZhUBHEqfMp";
$nama_database = "library";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>