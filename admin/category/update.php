<?php
include '../../config.php';
$id = $_POST['id'];
$name = $_POST['name'];
$query = mysqli_query($koneksi, "UPDATE categories SET category_name='$name' WHERE id_category='$id'");
if($query == true)
{
    header('location:/admin/category/index.php?pesan=update');
}else{
    header('location:/admin/category/index.php?pesan=gagal');
}