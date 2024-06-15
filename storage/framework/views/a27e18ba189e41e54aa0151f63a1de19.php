<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman Anda</title>

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Icon cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- css -->
    <link href="css/bodyStyle.css" rel="stylesheet">

    <!-- Chart Donut-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>

    <!-- Chart garis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/6.7.0/d3.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="<?php echo e(route('logout')); ?>">
                <img src="images/RespiraCareLogo.png" alt="RespiraCare Logo" style="height: 50px; width: 50px;">respiraCare
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <a href="<?php echo e(route('logout')); ?>" type="button" class="btn btn-primary">Kembali</a>
        </div>
    </nav>
    <div class="container-fluid" style="margin-top: 100px; margin-bottom: 150px">
        <div class="container mx-auto">
            <div class="card border-0 shadow border-radius">
                <h2 class="text-center pt-5">Enter Admin Data</h2>
                <div class="card-body">
                    <form action="/regisAdmin" method="POST" class="form-valid" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputNip" class="form-label">NIP</label>
                                <!--  -->
                                <input type="text" name="inputNip" id="inputNip" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputnamaLengkap" class="form-label">Name</label>
                                <!--  -->
                                <input type="text" name="nama_lengkap" id="inputnamaLengkap" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputemail" class="form-label">Email</label>
                                <input type="email" name="email" id="inputemail" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4" style="padding-bottom:30px;">
                                <label for="inputpassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="inputpassword" class="form-control" required>
                                    <span class="input-group-text icon" id="id_icon"><i class="fa-regular fa-eye"></i></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-md text-light" onclick="#" style="background-color: rgba(88, 95, 233, 1)">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showHideTimeInput() {
            var selectedValue = parseInt(document.getElementById("inputObatSehari").value);
            var timeInputsDiv = document.getElementById("timeInputs");

            // Menghapus semua input waktu yang ada sebelum menambah yang baru
            timeInputsDiv.innerHTML = "";

            // Menambah input waktu sesuai dengan jumlah yang dipilih
            for (var i = 0; i < selectedValue; i++) {
                var inputTime = document.createElement("div");
                inputTime.classList.add("col-md-4");
                inputTime.innerHTML = `
                    <label for="waktu${i+1}">Jam Minum ${i+1}:</label>
                    <input type="time" id="waktu${i+1}" name="waktu${i+1}">
                `;
                timeInputsDiv.appendChild(inputTime);
            }

            // Menampilkan atau menyembunyikan div input waktu
            if (selectedValue === 0) {
                timeInputsDiv.style.display = "none";
            } else {
                timeInputsDiv.style.display = "block";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\HP\Documents\Semester 6\Konfigurasi\Project-WRAP\resources\views/auth/regisAdmin.blade.php ENDPATH**/ ?>