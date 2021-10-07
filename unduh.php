<?php
$myDir = "C:/xampp/htdocs/PrakPWD/";
$dir = opendir($myDir);
echo "Isi folder (Klik link untuk download : )<br>";
while($tmp = readdir($dir)){
    echo"<a href='$tmp'target='_blank'>$tmp</a><br>";
}
    closedir($dir);

?>
