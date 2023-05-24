<?php
include '../../config.php';
$id = $_POST['id'];
$query = mysqli_query($koneksi, "DELETE FROM classes WHERE id='$id'");
if ($query == true) {
    header('location:/admin/class/index.php?pesan=delete');
}else{
    header('location:/admin/class/index.php?pesan=gagal');
}