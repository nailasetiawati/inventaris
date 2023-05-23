<?php
include '../../config.php';
$name = $_POST['name'];
$query = mysqli_query($koneksi, "INSERT INTO classes VALUES(NULL, '$name')");
if ($query == true) {
    header('location:/admin/class/index.php?pesan=create');
}else{
    header('location:/admin/class/create.php?pesan=gagal');
}