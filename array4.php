<?php
$arrNilai = array("Tata" => 80, "Titi" => 90, "Ahmed" => 77, "Rafi" => 86);
echo "Menampilkan isi array asosiatif dengan Foreach: <br>";
foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai <br>";
}

reset($arrNilai);
echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
while ($item = current($arrNilai)) {
    $nama = key($arrNilai);
    echo "Nilai $nama = $item<br>";
    next($arrNilai);
}
