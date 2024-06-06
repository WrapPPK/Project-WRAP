@include('noLogin.navBar')
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
    @include('noLogin.navBar')
    <div class="gambarTulisan" style="position: relative; ">
        <img src="images/Dokter10.png" class="img-fluid" alt="" style="width: 100%;" data-aos="fade-up">
        <div class="Kotak p-5" style="position: absolute; top: 25%; width: 45%; height: 60%; left: 7%;"
            data-aos="fade-up"data-aos-duration="3000">
            <p style="font-size:40px;">Breathe Easy, Live Happily with..</p>
            <p style="font-size:40px; font-weight:bold; color:rgba(17, 63, 103, 1)">RespiraCare</p>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet justo sit amet orci tincidunt
                dictum.</p> --}}
            <a class="login-button" href="/pilihRole">Login</a>
            <button class="navbar-toggler pe-0 p-4" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
                harapan.</p>
            <p>Ini dirancang untuk memanfaatkan kekuatan individu, mendorong pertumbuhan profesional, dan
                berkontribusi pada kesuksesan tim secara keseluruhan.</p>
        </div>
        <div class="row row-cols-3-cols-md-3 g-4" style="padding-left:100px;padding-right:100px;" data-aos="fade-down"
            data-aos-duration="500">
            <!-- card 1 -->
            <div class="col">
                <div class="card shadow" style="width: 400px; height: 400px;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title">
                            <div class="text-container text-center">
                                <div class="bulat">
                                    <img src="images/heru.jpg" alt="Heru Ikhsan Maulana"
                                        class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                            </div>
                            Heru Ikhsan Maulana
                        </h5>
                        <p>Heru Ikhsan Maulana adalah Scrum Master, memastikan bahwa tim mengikuti prinsip-prinsip
                            tangkas dan
                            praktik. Dia memfasilitasi pertemuan, menghilangkan hambatan, dan membantu tim untuk
                            meningkatkannya
                            proses dan produktivitas.</p>
                    </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="col">
                <div class="card shadow" style="width: 400px; height: 400px;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title">
                            <div class="text-container text-center">
                                <div class="bulat">
                                    <img src="images/risky.png" alt="Heru Ikhsan Maulana"
                                        class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                            </div>
                            Muhammad Risky Farhan
                        </h5>
                        <p>Muhammad Risky Farhan adalah Front End Developer, bertanggung jawab untuk merancang dan
                            melaksanakan
                            antarmuka pengguna. Ia memastikan aplikasinya ramah pengguna, responsif, dan
                            menarik secara visual.</p>
                    </div>
                </div>
            </div>
            <!-- card 3 -->
            <div class="col">
                <div class="card shadow" style="width: 400px; height: 400px;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title">
                            <div class="text-container text-center">
                                <div class="bulat">
                                    <img src="images/bimo.png" alt="Heru Ikhsan Maulana"
                                        class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                            </div>
                            Bimo Zachriansyah Wicaksono
                        </h5>
                        <p>Bimo Zachriansyah Wicaksono adalah AI Developer, berfokus pada mengintegrasikan buatan
                            intelijen ke dalam proyek tersebut. Dia mengembangkan dan mengimplementasikan model
                            pembelajaran mesin untuk menyempurnakannya
                            fungsionalitas dan kecerdasan aplikasi.</p>
                    </div>
                </div>
            </div>
            <!-- card 4 -->
            <div class="col">
                <div class="card shadow" style="width: 400px; height: 400px;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <h5 class="card-title">
                            <div class="text-container text-center">
                                <div class="bulat">
                                    <img src="images/david.jpg" alt="Heru Ikhsan Maulana"
                                        class="img-fluid rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                            </div>
                            David Gholi Rahmadana
                        </h5>
                        <p>David Gholi Rahmadana adalah Backend Developer, bertanggung jawab atas logika sisi server dan
                            manajemen basis data. Dia memastikan bahwa backend aplikasi kuat, aman, dan
                            efisien menangani pemrosesan dan penyimpanan data.</p>
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
                            <img src="images/AI_kepatuhan.jpg" class="rounded-start p-5" alt="..."
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
        .text-container {
            text-align: center;
            margin-bottom: 5px;
        }

        .bulat {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            overflow: hidden;
            width: 80px;
            /* Adjust size as needed */
            height: 80px;
            /* Adjust size as needed */
            background-color: #f0f0f0;
            /* Fallback color if no image */
        }

        .bulat img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .about-section {
            padding: 100px;
        }

        .about-text {
            margin-left: 10px;
            margin-right: 10px;
            text-align: justify;
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
