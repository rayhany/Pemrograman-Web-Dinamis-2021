<htmi>
<head>
<title>Tambah data mahasiswa</title>
</head>

<body>
<a href="index.php">Go to Home</a>
<br/><br/>

<form action="tambah.php" method="post" name="form1">
<table width="254" border="O">
<tr>
<td>Nim</td>
<td><input type="text" name="nim"></td>
<tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Gender (L/P)</td>
<td><input type="text" name="jekel"></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat"></td>
</tr>
<tr>
<td>Tgl Lahir</td>
<td><input type="text" name="tgllhr"></td>
<tr>
<tr>
<td></td>
<td><input type="submit" name="Submit" value="Tambah"></td>
<tr>
</table>
</form>

<?php
// check If form submitted, insert form data into users table.

if(isset($_POST['Submit'])) { 
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jekel = $_POST['jekel'];
$alamat = $_POST['alamat'];
$tglhr = $_POST['tgllhr'];

// in<lude database connection file
include_once("koneksi.php");

//insert user data into table
$result = mysqli_query($con, "INSERT INTO mahasiswa(nim,nama,jekel,alamat,tgllhr) VALUES('$nim','$nama', '$jekel','$alamat','$tglhr')");

//show massage when user added
echo "Data Berhasil Disimpan. <a herf='index.php'>View Users </a>";
}
?>

</body>
</html>
 
