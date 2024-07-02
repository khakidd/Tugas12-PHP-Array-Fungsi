<?php
$arrNilai = array("Hanif" => 89, "Bayu" => 90, "Rakha" => 95, "Ivan" => 87);
echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
