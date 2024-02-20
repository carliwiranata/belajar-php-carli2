<?php
include 'function.php';
error_reporting(0);
$nilai_1 = $_POST['nilai_1'];
$nilai_2 = $_POST['nilai_2'];
if (isset($_POST['tambah'])) {
    $hasil = tambah($nilai_1, $nilai_2);
    $hasil = "Hasil dari penjumlahan $nilai_1 tambah $nilai_2 adalah $hasil";
} elseif (isset($_POST['kurang'])) {
    $hasil = kurang($nilai_1, $nilai_2);
    $hasil = "Hasil dari pengurangan $nilai_1 kurang $nilai_2 adalah $hasil";
} else {

    $hasil = "Selamat datang di aplikasi kalkulator sederhana";
}


?>





<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Kalkulator PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <div class="row ">
            <div class="col-lg-6 mx-auto p-5 rounded-1">
                <input type="text" readonly class="form-control mb-3 py-5" name="hasil" value="<?= $hasil ?>">
                <form action="" method="post">
                    <input type="number" value="<?php echo $nilai_1 ?>" name="nilai_1" placeholder="Nilai 1" class="form-control mb-3">
                    <input type="number" value="<?php echo $nilai_2 ?>" name="nilai_2" placeholder="Nilai 2" class="form-control mb-3">
                    <button class="btn btn-warning" name="tambah">+</button>
                    <button class="btn btn-warning" name="kurang">-</button>
                    <button class="btn btn-warning" name="bagi">/</button>
                    <button class="btn btn-warning" name="kali">x</button>
                    <a href="latihanform.php" class="btn btn-warning">C</a>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>