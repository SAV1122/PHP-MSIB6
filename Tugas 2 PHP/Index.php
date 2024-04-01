<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">
        <h1 class="mt-5 mb-4 text-center">Input Produk</h1>
        <form action="index.php" method="POST">
            <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label">Nama Pelanggan</label>
                <div class="col-sm-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Produk</label>
                <div class="col-sm-8">
                    <select id="" name="produk" class="custom-select">
                        <option value="">--- Pilih Produk ---</option>
                        <option value="TV">TV</option>
                        <option value="AC">AC</option>
                        <option value="KULKAS">KULKAS</option>
                        <option value="MESIN CUCI">MESIN CUCI</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Jumlah Beli</label>
                <div class="col-sm-8">
                    <input id="" name="beli" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-4 col-sm-8">
                    <button name="proses" type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button name="reset" type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
            <div class="mt-5">
                <h2 class="mb-4 text-center">Harga Produk</h2>
                <ul class="list-group">
                    <li class="list-group-item">TV : Rp 1.000.000</li>
                    <li class="list-group-item">AC : Rp 2.000.000</li>
                    <li class="list-group-item">KULKAS : Rp 3.000.000</li>
                    <li class="list-group-item">MESIN CUCI : Rp 4.000.000</li>
                </ul>
            </div>
        </form>

        <?php
            $nama = $_POST['nama'];
            $produk = $_POST['produk'];
            $beli = $_POST['beli'];
            $proses = $_POST['proses'];

            // Switch case produk and harga
            switch ($produk) {
                case 'TV':
                    $hargasatuan = 1000000;
                    break;
                case 'AC':
                    $hargasatuan = 2000000;
                    break;
                case 'KULKAS':
                    $hargasatuan = 3000000;
                    break;
                case 'MESIN CUCI':
                    $hargasatuan = 4000000;
                    break;
                default:
                    $hargasatuan = 0;
                    break;
            }

            // Penjumlahan
            $totalabelanja = $beli * $hargasatuan;
            $diskon = 0.2 * $totalabelanja;
            $ppn = 0.1 * ("$totalabelanja - $diskon");
            $hargabersih = $totalabelanja - $diskon + $ppn;

            if (isset($_POST['proses'])) {
        ?>

            <!-- Output -->
            <!-- number_format disini digunakan sebagai pemisah ribuan  -->
            <div class="mt-5">
                <h2 class="mb-4 text-center">Output Produk</h2>
                <ul class="list-group">
                    <li class="list-group-item">Nama Pelanggan : <?php echo $nama ?></li>
                    <li class="list-group-item">Produk : <?php echo $produk ?></li>
                    <li class="list-group-item">Jumlah Beli : <?php echo $beli ?></li>
                    <li class="list-group-item">Harga Satuan : Rp <?php echo number_format($hargasatuan, 0,',') ?></li>
                    <li class="list-group-item">Total Belanja : Rp <?php echo number_format($totalabelanja, 0,',') ?></li>
                    <li class="list-group-item">Diskon : Rp <?php echo number_format($diskon, 0,',') ?></li>
                    <li class="list-group-item">PPN : Rp <?php echo number_format($ppn, 0, ',') ?></li>
                    <li class="list-group-item">Harga Bersih : Rp <?php echo number_format($hargabersih, 0, ',') ?></li>
                </ul>
            </div>
        <?php } ?>

    </div>

</body>

</html>