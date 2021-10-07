<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt","r");
echo "<table borde=0>";
while ($isi = fgets($fp,80))
{
    $pisah = explode("|",$isi);
    echo "<tr><td>Nama </td></tr>: $pisah[0]</td></tr>";
    echo "<tr><td>Alamat </td></tr>: $pisah[1]</td></tr>";
    echo "<tr><td>Email </td></tr>: $pisah[2]</td></tr>";
    echo "<tr><td>Status </td></tr>: $pisah[3]</td></tr>";
    echo "<tr><td>Komentar </td></tr>: $pisah[4]</td></tr>
    <tr><td>&nbsp;<hr></td>&nbsp;<hr></td></tr>";
}

echo "</table>";
echo "<a href=bukutamu.php> Klik Disini </a> Isi Buku Tamu";
?>