<?php
include_once("koneksi.php");
$id_users = $_POST['id_users'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$pass = md5($_POST[password]);
$sql = "INSERT INTO users(id_users,Username,password, nama_lengkap, email) VALUES ('$id_user', '$pass', '$nama','$email')";
$query=mysqli_query($con, $sql); mysqli_close($con);
header('location:index.php');
?>
