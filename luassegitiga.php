<?php
function luas_segitiga ($alas, $tinggi) {
    return 0.5 * $alas * tinggi;
}
    $al = 7;
    $ti = 18;
    echo "luas segitiga yaitu 1/2 x alas ($al) x tinggi ($ti) =";
    echo luas_segitiga($al, $ti);
?>