<?php

$predikat = "B";

switch ($predikat) {
    case "A":
        $keterangan = "Sangat Bagus";
        break;
    case "B":
        $keterangan = "Bagus";
        break;
    case "C":
        $keterangan = "Cukup Bagus";
        break;

    default:
        $keterangan = "Buruk";
        break;
}

echo $keterangan;


$nilai = 40;
echo "<br>";
echo $nilai == 20 ? "Nilai 20" : "Nilai Bukan 20";
