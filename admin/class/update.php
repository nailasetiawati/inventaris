<?php
include '../../config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$query = mysqli_query($koneksi, "UPDATE classes SET class_name='$name' WHERE id='$id'");
if ($query == true) {
    header('location:/admin/class/index.php?pesan=update');
}else{
    header('location:/admin/class/create.php?pesan=gagal');
}