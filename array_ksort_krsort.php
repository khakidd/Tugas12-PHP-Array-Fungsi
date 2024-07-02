<?php
$arrNilai = array("Hanif" => 89, "Bayu" => 90, "Rakha" => 95, "Ivan" => 87);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
