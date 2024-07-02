<?php
function luas_persegi($sisi)
{
    return $sisi * $sisi;
}

$s = 8;
echo "Luas persegi dengan sisi $s = ";
echo luas_persegi($s);
