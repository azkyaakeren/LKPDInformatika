<?php
$jamSekarang = date("4.01"); 

if ($jamSekarang >= 0 && $jamSekarang < 4) {
    $waktu = "Udah dini hari masih aja belum tidur?";
} elseif ($jamSekarang >= 4 && $jamSekarang < 10) {
    $waktu = "Pagiii Guysss";
} elseif ($jamSekarang >= 10 && $jamSekarang < 15) {
    $waktu = "Siang siang gini panas bangettt";
} elseif ($jamSekarang >= 15 && $jamSekarang < 17.30) {
    $waktu = "Udah soree mandiii";
} elseif ($jamSekarang >= 17.30 && $jamSekarang < 18.30) {
    $waktu = "Petang";
} elseif ($jamSekarang >= 18.30 && $jamSekarang <=  24) {
    $waktu = "Dah Malem tidorrrr";
} else {
    $waktu = "Busettt Orang mana luu";
}

echo "<br> Sekarang adalah jam: $jamSekarang:00 <br> Waktu: $waktu";
?>