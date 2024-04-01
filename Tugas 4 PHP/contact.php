<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container my-5 py-5 z-depth-1">


        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text mt-5">

            <style>
                .map-container {
                    height: 230px;
                    position: relative;
                }

                .map-container iframe {
                    left: 0;
                    top: 0;
                    height: 100%;
                    width: 100%;
                    position: absolute;
                }
            </style>

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6 text-center">

                    <h3 class="font-weight-bold mt-3">Contact Us</h3>

                    <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                        molestiae.</p>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <div class="md-form md-outline mt-3">
                        <input type="email" id="form-email" class="form-control">
                        <label for="form-email">E-mail</label>
                    </div>
                    <div class="md-form md-outline">
                        <input type="text" id="form-subject" class="form-control">
                        <label for="form-subject">Subject</label>
                    </div>
                    <div class="md-form md-outline mb-3">
                        <textarea id="form-message" class="md-textarea form-control" rows="3"></textarea>
                        <label for="form-message">Apa yang bisa saya bantu?</label>
                    </div>
                    <button type="submit" class="btn btn-info btn-sm ml-0"><a href="index.php">Submit<i class="far fa-paper-plane ml-2"></i></a></i></button>
                </div>
                <div class="col-lg-6 col-md-12 mb-0 mb-md-0">
                    <div id="map-container-google-1" class="z-depth-1 map-container mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.9289341761273!2d95.97905404745781!3d5.273771681091616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304096acd8207e61%3A0x48223814fbffe38c!2sLapangan%20Bola%20Kaki%20Bereunuen!5e0!3m2!1sid!2sid!4v1688456961307!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
        </section>
    </div>
</body>

</html>