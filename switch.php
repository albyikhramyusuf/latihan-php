<?php
$day = date ("D");
switch ($day) {

case 'Mon' : $hari = "Senin"; break;
case 'Tue' : $hari = "Selasa"; break;
case 'Wed' : $hari = "Rabu"; break;
case 'Thu' : $hari = "Kamis"; break;
case 'Fri' : $hari = "Jum'at"; break;
case 'Sat' : $hari = "Sabtu"; break;
case 'Sun' : $hari = "Minggu"; break;
default    : $hari = "Kiamat";
}
echo "Hari ini hari <b>$hari</b>";
?>