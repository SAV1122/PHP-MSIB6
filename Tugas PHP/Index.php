<?php

// Data variabel
$nama = "Salman Alvaricy";
$npm = 21105111078;
$alamat = "Aceh";
$univ = "Universitas Jabal Ghafur";
$gmail = "salmanalvaricy12399@gmail.com";
$no_telp = "0822-7662-2223";
$about = "Saya adalah seorang mahasiswa yang berasal dari Aceh dan saat ini menempuh studi 
di Universitas Jabal Ghafur dengan jurusan Teknik Informatika. Saya memiliki semangat yang besar 
dalam belajar dan mengembangkan keterampilan di dunia teknologi informasi. Sebagai seorang mahasiswa 
Teknik Informatika, saya tertarik pada berbagai aspek dalam bidang ini, termasuk pemrograman, keamanan 
jaringan, pengembangan perangkat lunak, dan analisis data. Saya percaya bahwa teknologi informasi memiliki 
potensi besar untuk mengubah dunia dan saya bersemangat untuk menjadi bagian dari perubahan tersebut.
Selain dari dunia akademis, saya juga bangga akan warisan budaya dan tradisi dari Aceh, tempat asal saya. 
Saya percaya bahwa menjaga dan mempromosikan budaya kami sangat penting, dan saya berusaha untuk 
berkontribusi pada pembangunan komunitas lokal saya.";
$footer = "&copy; 2024 Company Salman Alvaricy. All Rights Reserved.";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Perkenalan Section -->
    <section class="jumbotron text-center">
        <div class="container">
            <img src="img/profile.jpeg" alt="" class="rounded mx-auto d-block mb-4 rounded-circle">
            <p class="lead text-muted"><?php echo $nama ?></p>
            <p class="lead text-muted"><?php echo $npm ?></p>
            <p class="lead text-muted"><?php echo $alamat ?></p>
            <p class="lead text-muted"><?php echo $univ ?></p>
            <p class="lead text-muted"><?php echo $gmail ?></p>
            <p class="lead text-muted"><?php echo $no_telp ?></p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="mb-4">About Me</h2>
                    <p><?php echo $about ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <!-- Page Content -->
    <div id="services" class="container mt-5">
        <h1 class="text-center mb-4">Services</h1>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="img/webdesain.png" class="card-img-top" alt="Web Design">
                    <div class="card-body">
                        <h5 class="card-title">Web Design</h5>
                        <p class="card-text">Saya menciptakan desain yang menakjubkan dan responsif yang disesuaikan dengan kebutuhan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="img/WebDevelopment.png" class="card-img-top" alt="Web Development">
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">Saya mengembangkan situs web yang berfungsi penuh menggunakan teknologi terbaru.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img src="img/E-commerceSolutions.png" class="card-img-top" alt="E-commerce Solutions">
                    <div class="card-body">
                        <h5 class="card-title">E-commerce Solutions</h5>
                        <p class="card-text">Saya membangun platform e-commerce yang aman dan modern agar anda dapat berbisnis dengan baik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="mb-4">Contact Us</h2>
                    <p>Punya pertanyaan atau ingin mendiskusikan suatu proyek? Kirimkan pesan kepada saya di bawah ini.</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p><?php echo $footer ?></p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
