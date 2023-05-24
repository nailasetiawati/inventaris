<?php
include '../../config.php';
$id = $_POST['id'];
$query = mysqli_query($koneksi, "DELETE FROM categories WHERE id_category='$id'");
header('location:/admin/category/index.php?pesan=delete');