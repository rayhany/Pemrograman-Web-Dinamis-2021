<?php
echo "<head><title>MY GUEST BOOK</head></title>";
$fp = fopen("guestbook.txt","a+");
fputs ($fp,"$nama|$alamat|$email|$status|$Komentar\n");
fclose($fp);
echo "Terima Kasih Atas Partisipasinya Anda Mengisi Buku Tamu<br>";
echo "<a href=tampilan.php> Isi Buku Tamu </a><br>";
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";
?>