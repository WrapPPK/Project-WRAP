<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman Anda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="css/styleNoLogin.css" rel="stylesheet">
    <style>
    #navbarTogglerDemo02{
        height: 100%;
        padding: 10px;
    }
    /* Navbar */
    .navbar{
        background-color: white;
        height: 80px;
    }
    </style>
</head>

<body style="background-color: rgba(243, 249, 251, 1);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">
                <img src="images/RespiraCareLogo.png" alt="RespiraCare Logo" style="height: 80px; width: 80px;">respiraCare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center justify-content-center" id="navbarTogglerDemo02" style="background-color:rgba(248, 249, 250, 1)">
                <ul class="navbar-nav mx-auto flex-grow-3">
                    <li class="nav-item">
                        <a class="nav-link" id="home" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="role" href="#roles">Role</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="feature" href="#fitur">Feature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="about" href="#tentang">About</a>
                    </li>
                </ul>
                <a class="login-button" href="/pilihRole">Login</a>
            </div>
        </div>
    </nav>



    <div class="container-fluid landing align-items">
        <div class="row mx-5">
            <div class="col-md" style="padding-top:230px;" data-aos="fade-up"data-aos-duration="3000">
                    <p style="font-size: 30px; font-weight: bold; color: rgba(17, 63, 103, 1);">Your Solution for Managing Respiratory Medication</p>
                <div>
                    <p style="font-size: 12px;">We are here to provide you with the best solution for managing your respiratory medication. With high-quality products and reliable services, we are ready to help you manage your respiratory medication more easily and effectively every day.
                    </p>
                </div>

            </div>
            <div class="col-md-6">
                <img src="<?php echo e(asset('images/Dokter10.png')); ?>" class="img-fluid position-absolute w-100 h-100" style="object-fit: cover; z-index: -1;" alt="Doctor Image">
            </div>
        </div>
    </div>


    <div id="roles" class="container-fluid" style="padding-bottom:100px">
        <div class="row text-center justify-content-center" style="padding-top:100px;padding-bottom:50px"
            data-aos="fade-down" data-aos-duration="1000">
            <div class="col"
                style="padding-bottom:30px; font-size: 60px; font-weight:bold; color: rgba(34, 101, 151, 1)">
                Role
            </div>
            <p>Peran merupakan elemen penting dalam organisasi kami, yang mencakup berbagai tanggung jawab dan
                harapan. <br>Ini dirancang untuk memanfaatkan kekuatan individu, mendorong pertumbuhan profesional, dan
                berkontribusi pada kesuksesan tim secara keseluruhan.</p>
        </div>
        <div class="container pt-3 ms-md-auto text-center" data-aos="fade-down" data-aos-duration="500" >
             <div class="row">
                <div class="col mb-3">
                    <div class="card shadow h-200">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <div class="mx-auto mb-3">
                                <img src="images/heru.jpg" alt="Heru Ikhsan Maulana" class="img-fluid rounded-circle">
                                <h5 class="card-title">Heru Ikhsan Maulana</h5>
                                <p>Heru Ikhsan Maulana adalah Scrum Master, memastikan bahwa tim mengikuti prinsip-prinsip
                                    tangkas dan
                                    praktik. Dia memfasilitasi pertemuan, menghilangkan hambatan, dan membantu tim untuk
                                    meningkatkannya
                                    proses dan produktivitas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card shadow h-200">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <div class="mx-auto mb-3">
                            <img src="images/risky.png" alt="Muhammad Risky Farhan" class="img-fluid rounded-circle">                                
                            <h5 class="card-title">Muhammad Risky Farhan</h5>
                                <p>Muhammad Risky Farhan adalah Front End Developer, bertanggung jawab untuk merancang dan
                                melaksanakan
                                antarmuka pengguna. Ia memastikan aplikasinya ramah pengguna, responsif, dan
                                menarik secara visual.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card shadow h-200">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <div class=" mx-auto mb-3">
                                <img src="images/bimo.png" alt="Bimo Zachriansyah Wicaksono" class="img-fluid rounded-circle">
                            </div>
                            <h5 class="card-title">Bimo Zachriansyah Wicaksono</h5>
                            <p>Bimo Zachriansyah Wicaksono adalah AI Developer, berfokus pada mengintegrasikan buatan
                                intelijen ke dalam proyek tersebut. Dia mengembangkan dan mengimplementasikan model
                                pembelajaran mesin untuk menyempurnakannya
                                fungsionalitas dan kecerdasan aplikasi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card shadow h-200">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <div class=" mx-auto mb-3">
                                <img src="images/david.jpg" alt="David Gholi Rahmadana" class="img-fluid rounded-circle">
                            </div>
                            <h5 class="card-title">David Gholi Rahmadana</h5>
                            <p>David Gholi Rahmadana adalah Backend Developer, bertanggung jawab atas logika sisi server dan
                                manajemen basis data. Dia memastikan bahwa backend aplikasi kuat, aman, dan
                                efisien menangani pemrosesan dan penyimpanan data.
                            </p>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </div>

    <div id="fitur" class="OurFeature">
        <div class="kotakputih">
            <div class="container-fluid" style="padding-bottom:100px" data-aos="fade-down" data-aos-easing="linear"
                data-aos-duration="1000">
                <div class="row text-center justify-content-center" style="padding-top:100px">
                    <div class="col"
                        style="padding-bottom:30px; font-size: 60px; font-weight:bold; color: rgba(34, 101, 151, 1)">
                        Feature
                    </div>
                    <p>Aplikasi ini membantu mengontrol pernapasan dan memantau kepatuhan minum obat pasien menggunakan
                        kecerdasan buatan.</p>
                </div>
                <div class="col" style="padding-left:100px;padding-right:100px;">
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <img src="images/dashboardDokter.png" class="rounded-start p-5" alt="..."
                                style="width: 50%;">
                            <div class="ms-1">
                                <h5>Dashboard Dokter</h5>
                                <p>Fitur ini dapat digunakan oleh dokter untuk membuat akun pasien, melihat data pasien,
                                    mengedit data paseien, menghapus data pasien, serta dapat melihat
                                    apakah pasien patuh atau tidak dalam meminum obat sesuai anjuran dokter.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="ms-1">
                                <h5>Dashboard Pasien</h5>
                                <p>Fitur ini dapat digunakan oleh pasien untuk melakukan control minum obat, dengan cara
                                    input data apakah telah minum obat atau belum, supaya dokter bisa tau apakah pasien
                                    tersebut patuh minum obat atau tidak.</p>
                            </div>
                            <img src="images/dashboardPasien.png" class="rounded-end p-5" alt="..."
                                style="width: 50%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="d-flex align-items-center">
                            <img src="images/AI_kepatuhan.png" class="rounded-start p-5" alt="..."
                                style="width: 50%;">
                            <div class="ms-1">
                                <h5>AI Kepatuhan</h5>
                                <p>Fitur yang digunakan untuk mengecek pasien patuh atau tidak dalam informasi pasien yang diterima dokter menggunakan teknologi AI (Kecerdasan Buatan).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row text-center justify-content-center about-section" data-aos="fade-down"
            data-aos-duration="1000">
            <div id="tentang" class="col"
                style="padding-bottom:30px; font-size: 60px; font-weight:bold; color: rgba(34, 101, 151, 1)">
                About Us
            </div>
            <p class="about-text">RespiraCare adalah aplikasi inovatif yang dirancang khusus untuk membantu pasien yang
                mengalami gangguan pernafasan
                gangguan. Misi kami adalah memberdayakan individu dengan alat dan sumber daya yang mereka perlukan untuk
                mengelola kehidupan mereka
                kesehatan pernapasan secara efektif. Dengan memanfaatkan teknologi terkini, kami berkomitmen untuk
                menyediakan
                solusi yang efektif dan mudah digunakan untuk
                mereka yang membutuhkan perawatan pernapasan. Platform kami mengintegrasikan fitur-fitur canggih seperti
                real-time
                pemantauan, wawasan kesehatan yang dipersonalisasi, dan komunikasi yang lancar dengan penyedia layanan
                kesehatan, memastikan
                bahwa pengguna kami menerima standar perawatan tertinggi. Di RespiraCare, kami memahami tantangan yang
                dihadapi
                oleh individu dengan kondisi pernafasan. Karena itu,
                tim ahli kami, termasuk profesional medis dan inovator teknologi, bekerja tanpa lelah untuk
                mengembangkan dan
                menyempurnakan aplikasi kami untuk memenuhi beragam kebutuhan pengguna kami. Tujuan kami adalah untuk
                meningkatkan kualitas
                hidup bagi pengguna kami dengan menjadikan layanan pernapasan lebih mudah diakses dan dikelola. Kami
                percaya pada a
                pendekatan yang berpusat pada pasien, di mana masukan dan pengalaman pengguna membentuk kelangsungan
                kami
                perkembangan. Komitmen terhadap perbaikan terus-menerus ini memastikan bahwa aplikasi kami tetap pada
                standarnya
                terdepan dalam solusi perawatan pernafasan. Apakah Anda sedang menghadapi masalah pernapasan kronis atau
                pulih dari kondisi sementara, RespiraCare hadir untuk mendukung Anda di setiap langkah. Bergabunglah
                dengan kami
                dalam perjalanan kami merevolusi perawatan pernafasan dan merasakan perbedaan teknologi tersebut
                dan perhatian yang penuh kasih dapat menghasilkan dalam hidup Anda.</p>
        </div>
    </div>

    <style>
        .about-section {
            padding: 100px;
        }

        .about-text {
            margin-left: 10px;
            margin-right: 10px;
            text-align: justify;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
        var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
            return new bootstrap.Dropdown(dropdownToggleEl)
        });
    </script>

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
<?php /**PATH C:\Users\HP\Documents\Semester 6\Konfigurasi\Project-WRAP\resources\views/noLogin/body.blade.php ENDPATH**/ ?>