<?php

$nilai = 90;
echo "Nilai $nilai = ";

if($nilai <= 79 && $nilai >= 70)
{
    echo "C Nice Try";
}
else if($nilai <= 69 && $nilai >= 0){
    echo "D Nasib";
}
else if($nilai <= 100 && $nilai >= 90){
    echo "A Mntapp";
}
else if($nilai <= 89 && $nilai >= 80){
    echo "B Keren Juga Lu";
}
else {
    echo "nilai wajib di atas 0";
}
?>