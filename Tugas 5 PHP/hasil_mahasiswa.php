<?php

require_once 'Mahasiswa.php';

// Tangkap data dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$matkul = $_POST['matkul'];
$nilai = $_POST['nilai'];

//Buat objek
$ns1 = new Mahasiswa($nim, $nama, $kuliah, $matkul, $nilai);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Cetak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h2 align="center">Tabel Cetak</h2>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Kuliah</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ([$ns1] as $maha): ?>
            <tr>
                <td><?= $maha->nim ?></td>
                <td><?= $maha->nama ?></td>
                <td><?= $maha->kuliah ?></td>
                <td><?= $maha->matkul ?></td>
                <td><?= $maha->nilai ?></td>
                <td><?= $maha->grade ?></td>
                <td><?= $maha->predikat ?></td>
                <td><?= $maha->getHasil() ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
