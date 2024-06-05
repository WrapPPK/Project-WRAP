<?php echo $__env->make('noLogin.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman Anda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css/styleNoLogin.css" rel="stylesheet">
</head>

<body style="background-color: rgba(243, 249, 251, 1);">
    <?php echo $__env->make('noLogin.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="gambarTulisan" style="position: relative; ">
        <img src="images/Dokter10.png" class="img-fluid" alt="" style="width: 100%;" data-aos="fade-up">
        <div class="Kotak p-5" style="position: absolute; top: 25%; width: 45%; height: 60%; left: 7%;"
            data-aos="fade-up"data-aos-duration="3000">
            <p style="font-size:40px;">Breathe Easy, Live Happily with..</p>
            <p style="font-size:40px; font-weight:bold; color:rgba(17, 63, 103, 1)">RespiraCare</p>
            
            <a class="login-button" href="/pilihRole">Login</a>
            <button class="navbar-toggler pe-0 p-4" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

    <div class="container-fluid" style="padding-bottom:100px">
        <div class="row text-center justify-content-center" style="padding-top:100px;padding-bottom:50px"
            data-aos="fade-down" data-aos-duration="1000">
            <div class="col"
                style="padding-bottom:30px; font-size: 60px; font-weight:bold; color: rgba(34, 101, 151, 1)">
                Why Choose Us?
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis arcu ac fermentum placerat.</p>
        </div>
        <div class="row row-cols-3-cols-md-3 g-4" style="padding-left:100px;padding-right:100px;" data-aos="fade-down"
            data-aos-duration="500">
            <!-- card 1 -->
            <div class="col">
                <div class="card shadow" style="width: 400px; height: 400px;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title"><i class="fas fa-user"></i><br>Lorem Ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget elit sit amet arcu
                            volutpat tincidunt. Mauris sollicitudin metus non magna pulvinar, nec pulvinar ex aliquet.
                            Integer id convallis metus. Proin vel justo nec velit blandit vehicula</p>
                    </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="col">
                <div class="card shadow" style="width: 400px; height: 400px;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title"><i class="fas fa-user"></i><br>Lorem Ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget elit sit amet arcu
                            volutpat tincidunt. Mauris sollicitudin metus non magna pulvinar, nec pulvinar ex aliquet.
                            Integer id convallis metus. Proin vel justo nec velit blandit vehicula</p>
                    </div>
                </div>
            </div>
            <!-- card 3 -->
            <div class="col">
                <div class="card shadow" style="width: 400px; height: 400px;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title"><i class="fas fa-user"></i><br>Lorem Ipsum</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget elit sit amet arcu
                            volutpat tincidunt. Mauris sollicitudin metus non magna pulvinar, nec pulvinar ex aliquet.
                            Integer id convallis metus. Proin vel justo nec velit blandit vehicula</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="OurFeature">
        <div class="kotakputih">
            <div class="container-fluid" style="padding-bottom:100px" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="1000">
                <div class="row text-center justify-content-center" style="padding-top:100px">
                    <div id="fitur" class="col"
                        style="padding-bottom:30px; font-size: 60px; font-weight:bold; color: rgba(34, 101, 151, 1)">
                        Our Feature
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis arcu ac fermentum
                        placerat.</p>
                </div>
                <div class="col" style="padding-left:100px;padding-right:100px;">
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <img src="images/Dokter10.png" class="rounded-start p-5" alt="..." style="width: 50%;">
                            <div class="ms-1">
                                <h5>Tulisan Anda di Samping Gambar</h5>
                                <p>Deskripsi singkat di samping gambar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="ms-1">
                                <h5>Tulisan Anda di Samping Gambar</h5>
                                <p>Deskripsi singkat di samping gambar.</p>
                            </div>
                            <img src="images/Dokter10.png" class="rounded-end p-5" alt="..." style="width: 50%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <img src="images/Dokter10.png" class="rounded-start p-5" alt="..." style="width: 50%;">
                            <div class="ms-1">
                                <h5>Tulisan Anda di Samping Gambar</h5>
                                <p>Deskripsi singkat di samping gambar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row text-center justify-content-center" style="padding:100px" data-aos="fade-down"
            data-aos-duration="1000">
            <div id="about" class="col"
                style="padding-bottom:30px; font-size: 60px; font-weight:bold; color: rgba(34, 101, 151, 1)">
                About Us
            </div>
            <p data-aos="fade-down" data-aos-duration="500">RespiraCare is an innovative application specifically
                designed to help patients experiencing respiratory disorders.</p>
                <p> By utilizing the latest technology, we are
                    committed to providing effective and easy-to-use solutions for those in need of respiratory care.</p>
        </div>
    </div>

    <div class="Aboutus">
        <div class="kotakputih">
            <div class="container-fluid" style="padding-bottom:100px">
                <div class="row text-center justify-content-center" style="padding-top:100px" data-aos="fade-down"
                    data-aos-duration="1000">
                    <div class="col"
                        style="padding-bottom:30px; font-size: 60px; font-weight:bold; color: rgba(34, 101, 151, 1)">
                        Our Teams
                    </div>
                    <p>We are a team of talented and spatial individuals,</p>
                    <p>Risky for Frontend Developer</p>
                    <p>Heru for Scrum Master</p>
                    <p>Bimo for Ai Developer</p>
                    <p>David for Backend Developer</p>
                </div>
                <div class="row row-cols-4-cols-md-3 g-4" style="padding-left:100px;padding-right:100px;"
                    data-aos="fade-down" data-aos-duration="500">
                    <div class="col">
                        <div class="text-container p-5 text-align-center">
                            <div class="bulat">
                                <img src="images/risky.png" alt="Muhammad Risky Farhan"
                                    class="img-fluid rounded-circle">
                            </div>
                            <p class="mt-3">Muhammad Risky Farhan</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-container p-5 text-align-center">
                            <div class="bulat">
                                <img src="images/heru.jpg" alt="Heru Ikhsan Maulana"
                                    class="img-fluid rounded-circle">
                            </div>
                            <p class="mt-3">Heru Ikhsan Maulana</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-container p-5 text-align-center">
                            <div class="bulat">
                                <img src="images/bimo.png" alt="Bimo Zachriansyah wicaksono"
                                    class="img-fluid rounded-circle">
                            </div>
                            <p class="mt-3">Bimo Zachriansyah wicaksono</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-container p-5 text-align-center">
                            <div class="bulat">
                                <img src="images/david.jpg" alt="David Gholi Rahmadana"
                                    class="img-fluid rounded-circle">
                            </div>
                            <p class="mt-3">David Gholi Rahmadana</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .text-container {
            text-align: center;
        }

        .bulat {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            overflow: hidden;
            width: 150px;
            /* Adjust size as needed */
            height: 150px;
            /* Adjust size as needed */
            background-color: #f0f0f0;
            /* Fallback color if no image */
        }

        .bulat img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi plugin AOS
        AOS.init();

        // Pemicu ulang plugin AOS saat pengguna menggulir halaman
        window.addEventListener('scroll', function() {
            AOS.refresh();
        });
    </script>
</body>
<?php /**PATH C:\xampp\htdocs\Project WRAP\resources\views/noLogin/body.blade.php ENDPATH**/ ?>