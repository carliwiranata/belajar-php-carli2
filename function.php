<?php
$tanggal = date('Y-m-d');
function tanggal_hari_ini($tanggal)
{
    $tanggal = explode('-', $tanggal);
    $tahun = $tanggal[0];
    $hari = $tanggal[1];
    $bulan = $tanggal[2];
    switch ($bulan) {
        case '01':
            $bulan = "Januari";
            break;
        case '02':
            $bulan = "Februari";
            break;
        case '03':
            $bulan = "Maret";
            break;
        case '04':
            $bulan = "April";
            break;
        case '05':
            $bulan = "Mei";
            break;
        case '06':
            $bulan = "Juni";
            break;
        case '07':
            $bulan = "Juli";
            break;
        case '08':
            $bulan = "Agustus";
            break;
        case '09':
            $bulan = "September";
            break;
        case '10':
            $bulan = "Oktober";
            break;
        case '11':
            $bulan = "November";
            break;

        default:
            $bulan = "Desember";
            break;
    }
    return  $tanggal = "$hari $bulan $tahun";
}

function tambah($a, $b)
{
    $hasil = $a + $b;
    return $hasil;
}
function kurang($a, $b)
{
    $hasil = $a - $b;
    return $hasil;
}
function kali($a, $b)
{
    $hasil = $a * $b;
    return $hasil;
}
function bagi($a, $b)
{
    $hasil = $a / $b;
    return $hasil;
}
