<?php
$host = '127.0.0.1:3306';
$username = 'root';
$password = '';
$dbname = 'inventaris';

$koneksi = mysqli_connect($host, $username, $password, $dbname);
if($koneksi != true)
{
    echo "Gagal Terkoneksi";
}else{
    // echo "Berhasil";
}