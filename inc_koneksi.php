<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'multiuser';

$koneksi = mysqli_connect('localhost', 'root', '', 'multiuser');
if($koneksi){
   // echo "Koneksi Berhasil";
}

mysqli_select_db($koneksi, $db);
?>
