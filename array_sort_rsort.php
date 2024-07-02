<?php
$arrNilai = array("Hanif" => 89, "Bayu" => 90, "Rakha" => 95, "Ivan" => 87);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

sort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan sort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

rsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan rsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
