<?php

// Data Mahasiswa
$a1 = ['nama' => 'Salman alvaricy', 'nim' => '7858076', 'nilai' => '90'];
$a2 = ['nama' => 'Siti Hartati', 'nim' => '8193330', 'nilai' => '80'];
$a3 = ['nama' => 'Rozir Wobari', 'nim' => '9279997', 'nilai' => '70'];
$a4 = ['nama' => 'Amran Frenly Panjaitan', 'nim' => '7399538', 'nilai' => '55'];
$a5 = ['nama' => 'Moh Farrij Wajdi', 'nim' => '7620877', 'nilai' => '30'];
$a6 = ['nama' => 'Zakiyyah Nurfida', 'nim' => '7638860', 'nilai' => '90'];
$a7 = ['nama' => 'Daffa Cesario SafiI', 'nim' => '7852420', 'nilai' => '80'];
$a8 = ['nama' => 'Gigih Zhafrans Mukti Luhur', 'nim' => '7874603', 'nilai' => '70'];
$a9 = ['nama' => 'Muhammad Salsabil', 'nim' => '7892120', 'nilai' => '55'];
$a10 = ['nama' => 'M. Asroful Anam', 'nim' => '7908152', 'nilai' => '30'];
$a11 = ['nama' => 'Anggi Alfian', 'nim' => '7987648', 'nilai' => '90'];
$a12 = ['nama' => 'M. Irfan Hamdi', 'nim' => '8243174', 'nilai' => '80'];
$a13 = ['nama' => 'Muhammad Faris', 'nim' => '8400475', 'nilai' => '70'];
$a14 = ['nama' => 'Bagus Aji Hapsoro', 'nim' => '9092006', 'nilai' => '55'];
$a15 = ['nama' => 'Diar Putri Yani', 'nim' => '8355109', 'nilai' => '30'];
$a16 = ['nama' => 'Miftah Farid Ramdhani', 'nim' => '8423109', 'nilai' => '90'];
$a17 = ['nama' => 'Ahmad Fahruddin', 'nim' => '8601870', 'nilai' => '80'];
$a18 = ['nama' => 'Zavira Raihana Salsabila', 'nim' => '8665136', 'nilai' => '70'];
$a19 = ['nama' => 'Muhammad Ilham Yahya', 'nim' => '8898980', 'nilai' => '55'];
$a20 = ['nama' => 'Arman Sholihin', 'nim' => '9103429', 'nilai' => '30'];

$ar_mahasiswa = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20];

// Deklarasikan nama-nama judul tabel header menggunakan looping array 
$ar_judul = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];

// Menghitung Agregat Nilai
$nilai_tertinggi = max(array_column($ar_mahasiswa, 'nilai'));
$nilai_terendah = min(array_column($ar_mahasiswa, 'nilai'));
$jumlah_mahasiswa = count($ar_mahasiswa);
$total_nilai = array_sum(array_column($ar_mahasiswa, 'nilai'));
$rata_rata = $total_nilai / $jumlah_mahasiswa;


$keterangan1 = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah ' => $nilai_terendah,
    'Nilai Rata-rata' => $rata_rata,
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $total_nilai,
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <h3>Daftar Nilai Mahasiswa</h3>
        <table border="1" cellspacing="2" cellpadding="10" width="100%">
            <thead align="center">
                <tr>
                    <?php foreach ($ar_judul as $judul) { ?>
                        <th><?php echo $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody align="center">
                <?php
                $no = 1;
                foreach ($ar_mahasiswa as $mahasiswa) {
                    // Menentukan grade berdasarkan nilai
                    $nilai = $mahasiswa['nilai'];
                    if ($nilai >= 85 && $nilai <= 100) {
                        $grade = "A";
                    } elseif ($nilai >= 75 && $nilai <= 85) {
                        $grade = "B";
                    } elseif ($nilai >= 60 && $nilai <= 75) {
                        $grade = "C";
                    } elseif ($nilai >= 35 && $nilai <= 60) {
                        $grade = "D";
                    } elseif ($nilai >= 0 && $nilai <= 35) {
                        $grade = "E";
                    }

                    // Menentukan predikat berdasarkan grade
                    switch ($grade) {
                        case 'A':
                            $predikat = "Memuaskan";
                            break;
                        case 'B':
                            $predikat = "Bagus";
                            break;
                        case 'C':
                            $predikat = "Cukup";
                            break;
                        case 'D':
                            $predikat = "Kurang";
                            break;
                        case 'E':
                            $predikat = "Buruk";
                            break;
                    }

                    //Ternary jika nilai >= 65 di nyatakan lulus jika tidak dianggap gagal
                    $keterangan = ($nilai >= 65) ? "Lulus" : "Gagal";
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mahasiswa['nama'] ?></td>
                        <td><?php echo $mahasiswa['nim'] ?></td>
                        <td><?php echo $nilai ?></td>
                        <td><?php echo $keterangan ?></td>
                        <td><?php echo $grade ?></td>
                        <td><?php echo $predikat ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot align="center">
                <?php
                foreach ($keterangan1 as $ket => $hasil) { ?>
                    <tr>
                        <th colspan="3"><?php echo $ket ?></th>
                        <th colspan="5"><?php echo $hasil ?></th>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Daftar Salman Alvaricy. All Rights Reserved.</p>
    </footer>

</body>

</html>