<?php
$arrWarna = array("Red", "Pink", "Yellow", "Brown", "Blue", "Purple");

echo "Menampilkan isi array dengan FOR: <br>";
for ($i = 0; $i < count($arrWarna); $i++) {
    echo "Warna warna <font color= $arrWarna[$i]>" . $arrWarna[$i] . "</font><br>";
}

echo "<br>Menampilkan isi array dengan FOREACH: <br>";
foreach ($arrWarna as $warna) {
    echo "Warna warna <font color= $warna>" . $warna . "</font><br>";
}
