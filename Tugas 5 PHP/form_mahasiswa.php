    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Input</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <div class="container">
            <h1 class="mt-5 mb-4 text-center">Form Input</h1>
            <form action="hasil_mahasiswa.php" method="POST">
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">NIM</label>
                    <div class="col-sm-8">
                        <input name="nim" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama</label>
                    <div class="col-sm-8">
                        <input name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Kuliah</label>
                    <div class="col-sm-8">
                        <select name="kuliah" class="custom-select">
                            <option value="">--- Pilih Kuliah ---</option>
                            <option value="Universitas Jabal Ghafur">Universitas Jabal Ghafur</option>
                            <option value="Universitas Gadjah Mada">Universitas Gadjah Mada</option>
                            <option value="Universitas Indonesia">Universitas Indonesia</option>
                            <option value="Institut Teknologi Bandung">Institut Teknologi Bandung</option>
                            <option value="Bogor Agricultural University">Bogor Agricultural University</option>
                            <option value="-">DLL .....</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 col-form-label">Mata Kuliah</label>
                    <div class="col-sm-8">
                        <select name="matkul" class="custom-select">
                            <option value="">--- Pilih Mata Kuliah ---</option>
                            <option value="PHP">PHP</option>
                            <option value="HTML & CSS">HTML & CSS</option>
                            <option value="JAVASCRIPT">JAVASCRIPT</option>
                            <option value="SOFT SKILL">SOFT SKILL</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nilai</label>
                    <div class="col-sm-8">
                        <input name="nilai" type="number" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-4 col-sm-8">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </body>

    </html>