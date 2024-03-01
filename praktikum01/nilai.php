<?php
$nilai1 = ["id" => 1, "nim" => "01109", "uts" => 50, "uas" => 78, "tugas" => 60]; 
$nilai2 = ["id" => 2, "nim" => "01108", "uts" => 70, "uas" => 67, "tugas" => 70]; 
$nilai3 = ["id" => 3, "nim" => "01107", "uts" => 60, "uas" => 87, "tugas" => 80];
$nilai4 = ["id" => 4, "nim" => "01106", "uts" => 80, "uas" => 66, "tugas" => 90]; 

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

echo $kumpulan_nilai[0]["nim"];
?>