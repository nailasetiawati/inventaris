<?php
include '../../config.php';
$id = $_POST['id'];
$query = mysqli_query($koneksi, "DELETE FROM users WHERE nis='$id'");
if($query)
{
    header('location:/admin/student/index.php?pesan=delete');
}else{
    header('location:/admin/student/index.php?pesan=gagal');
}
