<?php
$server = "10.11.1.253";
$user = "superking";
$password = "MEZhUBHEqfMp";
$nama_database = "library";

$con = mysqli_connect($server, $user, $password, $nama_database);

if(!$con)
		die("ERROR: Couldn't connect to database");
?>