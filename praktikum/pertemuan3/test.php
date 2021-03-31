<?php


function cetak_bintang($angka)
{
    for ($i = 0; $i <= $angka; $i++) {

        for ($j = 0; $j < $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}


echo "cetak_bintang(5)<br>";
cetak_bintang(5);
echo "cetak_bintang(7)<br>";
cetak_bintang(7);
