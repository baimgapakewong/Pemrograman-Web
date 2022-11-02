<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
} echo "Connected Successfully to Project 1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TL, NIP,
 JURUSAN) VALUES('', 'Muhammad Ibrahim', 'Gedongan Colomadu ', '2004-11-27', 'A2121331', 'RPL C')");
 if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection));
 }
 mysqli_close($connection);
 
 ?>