<?php 
$host = "localhost"; //alamat host mysql
$user = "root"; //username mysql
$pass = ""; //password mysql ()
$db  = "siminba"; //nama database yang digunakan

$connect = mysql_connect($host,$user,$pass); //menghubungkan ke mysql
$koneksi = mysql_select_db($db,$connect); //memilih database yang digunakan
?>