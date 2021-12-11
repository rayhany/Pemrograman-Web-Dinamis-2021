<?php
include_once("koneksi.php");

$result = mysqli_query($con, "SELECT * FROM mahasiswa");
?>
<html>

<head>
    <title>Laman Utama</title>
</head>

<body>
    <a href="tambah.php">Tambah Data Mahasiswa</a><br /><br />
    <table width = '80%' border=1>
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>ALAMAT</th>
            <th>TGL LAHIR</th>
            <th>UPDATE</th>
</tr>
<?php
while ($user_data = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $user_data['nim'] . "</td>";
    echo "<td>" . $user_data['nama'] . "</td>";
    echo "<td>" . $user_data['jekel'] . "</td>";
    echo "<td>" . $user_data['alamat'] . "</td>";
    echo "<td>" . $user_data['tgllhr'] . "</td>";
    echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";
}
?>
</table>
<a href="lap_mhs.php">CETAK</a>
</body>

</html>
