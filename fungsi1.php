<?php
function cetak_genap()
{
    for ($i = 0; $i < 100; $i++) {
        if ($i % 2 == 0) {
            echo "$i, | ";
        }
    }
}

cetak_genap();
