<?php
include 'config.php';
$email  = $_POST['email'];
$password   =   md5($_POST['password']);

$query = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' and password='$password'");
$cekData = mysqli_num_rows($query);

if($cekData > 0)
{
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['name'] = $data['name'];
    $_SESSION['role'] = $data['role'];
    $_SESSION['status'] = 'login';
    header('location:admin/dashboard/index.php');

}else{
    header('location:index.php');
}
