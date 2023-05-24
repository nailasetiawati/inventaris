<?php
include '../../config.php';
$name = $_POST['name'];
$cekName = mysqli_query($koneksi, "SELECT * FROM classes WHERE class_name='$name'");
$totalName = mysqli_num_rows($cekName);
if($_POST['name'] == ""){
    header('location:/admin/class/create.php?pesan=null_name');
}elseif($totalName > 0){
    header('location:/admin/class/create.php?pesan=unique_name');
}else{
    $query = mysqli_query($koneksi, "INSERT INTO classes VALUES(NULL, '$name')");
    header('location:/admin/class/index.php?pesan=create');
}
