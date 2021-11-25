<?php
include_once("koneksi.php");
$sql="delete from users where id_users='$_GET[id_users]'"; mysqli_query($con, $sql);
mysqli_close($conn);

header('location:index.php');
?>
