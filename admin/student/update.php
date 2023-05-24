<?php
include '../../config.php';
$id = $_POST['id'];
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

if($_POST['nis'] == ""){
    header('location:/admin/student/create.php?pesan=null_nis?id='.$id.'');
}elseif(!is_numeric($nis)){
    header('location:/admin/student/create.php?pesan=string_nis?id='.$id.'');
}elseif($_POST['name'] == ""){
    header('location:/admin/student/create.php?pesan=null_name?id='.$id.'');
}elseif($_POST['class_id'] == ""){
    header('location:/admin/student/create.php?pesan=null_class?id='.$id.'');
}elseif($_POST['email'] == ""){
    header('location:/admin/student/create.php?pesan=null_email?id='.$id.'');
}elseif($_POST['phone_number'] == ""){
    header('location:/admin/student/create.php?pesan=null_phone?id='.$id.'');
}elseif($_FILES['image']['name'] != ""){
    $xr = $rand.'-'.$file_name;
    move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/student/'.$rand.'-'.$file_name);
    mysqli_query($koneksi, "UPDATE users SET nis='$nis', name='$name', email='$email', password='$password', phone_number='$phone', address='$address', image='$xr' WHERE nis='$id'");
    header('location:/admin/student/index.php?pesan=update');
}elseif($_POST['address'] == ""){
    header('location:/admin/student/create.php?pesan=null_address?id='.$id.'');
}elseif($_POST['password'] != ""){
    mysqli_query($koneksi, "UPDATE users SET nis='$nis', name='$name', email='$email', password='$password', phone_number='$phone', address='$address' WHERE nis='$id'");
    header('location:/admin/student/index.php?pesan=update');
}elseif($_FILES['image']['name'] == null && $_POST['password'] == ""){
    mysqli_query($koneksi, "UPDATE users SET nis='$nis', name='$name', email='$email', phone_number='$phone', address='$address' WHERE nis='$id'");
    header('location:/admin/student/index.php?pesan=update');
}elseif($_FILES['image']['name'] == null){
    mysqli_query($koneksi, "UPDATE users SET nis='$nis', name='$name', email='$email', 'password='$password', phone_number='$phone', address='$address' WHERE nis='$id'");
    header('location:/admin/student/index.php?pesan=update');
}elseif(!in_array($ext, $extension)){
    header('location:/admin/student/create.php?pesan=extension_failed?id='.$id.'');
}elseif($size < 1044070){
    $xx = $rand.'-'.$file_name;
    move_uploaded_file($_FILES['image']['tmp_name'], '../../assets/img/student/'.$rand.'-'.$file_name);
    mysqli_query($koneksi, "UPDATE users SET nis='$nis', name='$name', email='$email', 'password='$password', phone_number='$phone', address='$address' image='$xx' WHERE nis='$id'");
    header('location:/admin/student/index.php?pesan=update');
}else{
    header('location:/admin/student/create.php?pesan=size_failed?id='.$id.'');
}