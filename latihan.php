<?php
    $hari = 50000;
    $belanja = 25000;
    $minuman = 10000;
    $hasil = $hari - $makanan - $minuman;

    echo "hari mempunyai uang sebesar $hari <br>";
    echo "hari membeli makanan $makanan dan $minuman <br>";

if ($hasil >=0){
    echo "sisa uang hari $hasil,hari hemat uang";
}else
    echo "sisa uang hari $hasil,hari boros uang";

