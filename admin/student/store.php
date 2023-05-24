<?php
include '../../config.php';
$nis = $_POST['nis'];
$name = $_POST['name'];
$class_id = $_POST['class_id'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$phone = $_POST['phone_number'];
$address = $_POST['address'];
$rand = rand();
$extension =  array('png', 'jpg', 'jpeg');
$file_name = $_FILES['image']['name'];
$size = $_FILES['image']['size'];
$ext = pathinfo($file_name, PATHINFO_EXTENSION);

$cekNis = mysqli_query($koneksi, "SELECT * FROM users WHERE nis='$nis'");
$totalNis = mysqli_num_rows($cekNis);
$cekEmail = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
$totalEmail = mysqli_num_rows($cekEmail);

if($_POST['nis'] == ""){
    header('location:/admin/student/create.php?pesan=null_nis');
}elseif($totalNis > 0){
    header('location:/admin/student/create.php?pesan=unique_nis');
}elseif(!is_numeric($nis)){
    header('location:/admin/student/create.php?pesan=string_nis');
}elseif($_POST['name'] == ""){
    header('location:/admin/student/create.php?pesan=null_name');
}elseif($_POST['class_id'] == ""){
    header('location:/admin/student/create.php?pesan=null_class');
}elseif($totalEmail > 0){
    header('location:/admin/student/create.php?pesan=unique_email');
}elseif($_POST['email'] == ""){
    header('location:/admin/student/create.php?pesan=null_email');
}elseif($_POST['password'] == ""){
    header('location:/admin/student/create.php?pesan=null_password');
}elseif($_POST['phone_number'] == ""){
    header('location:/admin/student/create.php?pesan=null_phone');
}elseif($_POST['address'] == ""){
    header('location:/admin/student/create.php?pesan=null_address');
}elseif(!in_array($ext, $extension)){
    header('location:/admin/student/create.php?pesan=extension_failed');
}elseif($size < 1044070){
    $xx = $rand.'-'.$file_name;
    move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/student/'.$rand.'-'.$file_name);
    mysqli_query($koneksi, "INSERT INTO users VALUES(NULL, '$class_id', '$nis', '$name', '$email', '$password', '$phone', '$address', '$xx', 'user')");
    header('location:/admin/student/index.php?pesan=create');
}else{
    header('location:/admin/student/create.php?pesan=size_failed');
}