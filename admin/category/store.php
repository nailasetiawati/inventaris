<?php
include '../../config.php';
$name = $_POST['name'];
$cekName = mysqli_query($koneksi, "SELECT * FROM categories WHERE category_name='$name'");
$totalName = mysqli_num_rows($cekName);
if($_POST['name'] == ""){
    header('location:/admin/category/create.php?pesan=null_name');
}elseif($totalName > 0){
    header('location:/admin/category/create.php?pesan=unique_name');
}else{
    mysqli_query($koneksi, "INSERT INTO categories VALUES(NULL, '$name')");
    header('location:/admin/category/index.php?pesan=create');
}